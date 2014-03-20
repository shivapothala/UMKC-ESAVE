package com.esave;

import java.util.ArrayList;
import java.util.List;

import javax.ws.rs.Consumes;
import javax.ws.rs.GET;
import javax.ws.rs.POST;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.HttpHeaders;
import javax.ws.rs.core.MediaType;
import javax.ws.rs.core.Response;

import org.json.JSONArray;
import org.json.JSONObject;

import com.esave.consumer.ConsumerClient;
import com.esave.dao.ApplianceDao;
import com.esave.dao.ProductTagDao;
import com.esave.model.ApplianceInfo;
import com.esave.model.ApplianceInformationInput;
import com.esave.model.ProductType;
import com.esave.model.ReportInfo;
import com.sun.jersey.core.header.reader.HttpHeaderReader;

@Path("/esave")
public class EsaveContoller {
	
	
	@POST
	@Path("/appliance_information")
	@Consumes(MediaType.APPLICATION_JSON)
	public String  getApplianceInformation(ApplianceInformationInput aii) {
		System.out.println("Product Type\t"+aii.getProductType());
		ProductType productType= ProductTagDao.getProductUriTag(aii.getProductType());
		String prdUsage = "";
		if( productType != null ){
			System.out.println("uriTag \t"+productType.getUriTag());
			//do call for consumption
			String uri = "https://data.energystar.gov/resource/";
			if (aii.getModelNumber()!= null){
				uri = uri + productType.getUriTag() + "?model_number=" + aii.getModelNumber();
			} else {
				uri = uri + productType.getUriTag() + "?brand_name=" + aii.getBrandName();
			}
			
			String str = ConsumerClient.consumeRestService(uri);
			JSONArray jsonArray = null;
			jsonArray = new JSONArray(str);
			       
			if (jsonArray != null) {
				JSONObject json = jsonArray.getJSONObject(0);
				System.out.println(json.toString());
				prdUsage = json.getString(productType.getUsageField().trim());			   
			}
			if( prdUsage == null || "".equals(prdUsage)){
				prdUsage = ProductTagDao.getProdcutConsumption(aii.getProductType());
				
			}
			System.out.println("String prdUsage = \t"+prdUsage);
			
		} else {
			//get consumption from local db
			prdUsage = ProductTagDao.getProdcutConsumption(aii.getProductType());
			System.out.println("String prdUsage = \t"+prdUsage);
		}
		return aii.toString()+"\t"+prdUsage;
	}
	
	
	@GET
	@Path("/calculate_appliance_consumption/{user_id}")
	@Consumes(MediaType.APPLICATION_JSON)
	@Produces(MediaType.APPLICATION_JSON)
	public ReportInfo  calculateApplianceConsumption(@PathParam("user_id") String userId) {
		System.out.println("user_id \t"+userId);
		ReportInfo ri = new ReportInfo();	
		List<ApplianceInfo> ltApp = ApplianceDao.getUserAppliances(userId);
		System.out.println("ltApp \t"+ltApp);
		Double totconsumption = 0.0;
		for( ApplianceInfo ai :ltApp ){			
			Double consumption = ApplianceDao.calculateApplianceConsumption(ai);			
			totconsumption = totconsumption+ consumption;
		}
		Double totConsumptionAmount = ApplianceDao.calculateAppConumptionAmount(userId,totconsumption);
		Double recentBillAmount = ApplianceDao.getRecentBillAmount(userId);
		ri.setAmount(totConsumptionAmount);
		ri.setConsumption(totconsumption);
		Double wastageAmount = recentBillAmount - totConsumptionAmount.doubleValue() ;
		ri.setWastageAmount(wastageAmount.toString());
		ri.setTotalAmount(recentBillAmount);
		return ri;
	}
	@GET
	@Path("/calculate_user_appliance_consumption/{user_id}/{app_id}")
	@Consumes(MediaType.APPLICATION_JSON)
	@Produces(MediaType.APPLICATION_JSON)
	
	public Response  calculateUserApplianceConsumption(@PathParam("user_id") String userId,@PathParam("app_id") String appId) {
		System.out.println("user_id \t"+userId);
		ReportInfo ri = new ReportInfo();
		ApplianceInfo appInfo = ApplianceDao.getUserAppliance(userId,appId);
		Double consumption = ApplianceDao.calculateApplianceConsumption(appInfo);	
		ri.setConsumption(consumption);
		Double consumptionAmount = ApplianceDao.calculateAppConumptionAmount(userId,consumption);
		ri.setAmount(consumptionAmount);
		Response response = Response.status(200).
                entity(ri).
                header("Access-Control-Allow-Origin", "*").build();

        return response;
		
	}
	@GET
	@Path("/user_appliance/{user_id}")
	@Consumes(MediaType.APPLICATION_JSON)
	@Produces(MediaType.APPLICATION_JSON)
	public List<ApplianceInfo>  userAppliance(@PathParam("user_id") String userId) {
		System.out.println("user id appliance \t"+userId);
		List<ApplianceInfo> ltApp = ApplianceDao.getUserAppliances(userId);
		return ltApp;
	}
	@GET
	@Path("/get_appliance_product_types")
	@Consumes(MediaType.APPLICATION_JSON)
	@Produces(MediaType.APPLICATION_JSON)
	public List<String>  getApplianceProductTypes() {
		List<String> listProductTypes = ProductTagDao.getProductTypes();
		return listProductTypes;
	}
	@GET
	@Path("/get_appliance_product_model_present/{prd_type}")
	@Consumes(MediaType.APPLICATION_JSON)
	@Produces(MediaType.APPLICATION_JSON)
	public String  getApplianceProductModelPresent(@PathParam("prd_type") String prdType) {
		String modelPresent = ProductTagDao.getProductModelPresent(prdType);
		return modelPresent;
	}
	
}

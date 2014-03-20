package com.esave;

import java.util.ArrayList;
import java.util.List;

import javax.ws.rs.Consumes;
import javax.ws.rs.DELETE;
import javax.ws.rs.POST;
import javax.ws.rs.PUT;
import javax.ws.rs.Path;
import javax.ws.rs.PathParam;
import javax.ws.rs.Produces;
import javax.ws.rs.core.MediaType;

import com.esave.dao.UserDao;
import com.esave.model.ApplianceInfo;
import com.esave.model.BillingInfo;
import com.esave.model.BillingInfos;
import com.esave.model.UserInfo;

@Path("/user")
public class UserController {
	@POST	
	@Path("/save_user_information")
	@Consumes(MediaType.APPLICATION_JSON)
	public String  saveUserInfo(UserInfo ui) {
		System.out.println("user information\t"+ui);
		String userId = UserDao.saveUserInfo(ui);
		if ( !"-1".equals(userId) ){
			return userId;
		}else{
			return "-1";
		}
			
	}
	@POST	
	@Path("/save_user_appliance_information")
	@Consumes(MediaType.APPLICATION_JSON)
	public String  saveApplianceInfo(ApplianceInfo ai) {
		System.out.println("appliance information\t"+ai);
		boolean isSaved = UserDao.saveAppInfo(ai);
		if (isSaved){
			return "success";
		}else{
			return "false";
		}
			
	}
	@POST	
	@Path("/save_user_billing_information")
	@Consumes(MediaType.APPLICATION_JSON)
	public String  saveApplianceInfo(List<BillingInfo> listBi) {
		System.out.println("array billing information\t"+listBi);
		BillingInfos bi = new BillingInfos();
		bi.setArrBillingInfo((ArrayList<BillingInfo>) listBi);
		boolean isSaved = UserDao.saveElectricBillingInfo(bi);
		if (isSaved){
			return "success";
		}else{
			return "false";
		}
			
	}
	@DELETE	
	@Path("/remove_user_appliance/{user_app_id}")
	@Consumes(MediaType.APPLICATION_JSON)
	public String  removeUserAppliance(@PathParam("user_app_id") String userAppId) {
		
		System.out.println("userAppId \t"+userAppId);
		boolean isDeleted = UserDao.removeUserAppliance(userAppId);
		
		return "{\"success\":\""+isDeleted+"\"}";
		
			
	}
	@POST	
	@Path("/edit_user_appliance/{user_app_id}")
	@Consumes(MediaType.APPLICATION_JSON)
	@Produces(MediaType.APPLICATION_JSON)
	public ApplianceInfo  editUserAppliance(@PathParam("user_app_id") String userAppId) {
		
		System.out.println("userAppId \t"+userAppId);
		ApplianceInfo applianceInfo = UserDao.editUserAppliance(userAppId);
		
		return applianceInfo;	
			
	}
	@PUT	
	@Path("/update_user_appliance/{user_app_id}")
	@Consumes(MediaType.APPLICATION_JSON)
	@Produces(MediaType.APPLICATION_JSON)
	public String  updateUserAppliance(ApplianceInfo applianceInfo) {
		
		System.out.println("applianceInfo \t"+applianceInfo);
		boolean isUpdated = UserDao.updateUserAppliance(applianceInfo);
		
		return "{\"success\":\""+isUpdated+"\"}";
			
	}
	
}

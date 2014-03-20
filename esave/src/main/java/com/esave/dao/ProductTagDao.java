package com.esave.dao;

import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

import com.esave.model.ProductType;

public class ProductTagDao {

	public static ProductType getProductUriTag(String stProductType) {
		DBManager dbManager = DBManager.getDBManager();
		Connection conn = null;
		ProductType productType = null;
		try {
			conn = dbManager.getConnection();
			
			Statement smt = conn.createStatement();
			
			ResultSet rst = smt.executeQuery("select b.* from appliance_power a,product_tag b where a.product_type =b.product_type and b.product_type = '"+ stProductType + "'");
			if (rst != null && rst.next()) {
				productType = new ProductType();
				productType.setProductType(rst.getString("product_type"));
				productType.setUriTag(rst.getString("uri_tag"));
				productType.setUsageField(rst.getString("usage_field"));
				
			}

			rst.close();
			smt.close();
		} catch (Exception e) {
			System.out.println(e.getMessage());
		}
		dbManager.closeConnection(conn);
		return productType;
	}
	
	public static ProductType getUsageDetails(String stProductType){
		DBManager dbManager = DBManager.getDBManager();
		Connection conn = null;
		ProductType productType = null;
		try {
			conn = dbManager.getConnection();
			
			Statement smt = conn.createStatement();
			
			ResultSet rst = smt.executeQuery("select * from appliance a where a.product_type = '"+ stProductType + "'");
			if (rst != null && rst.next()) {
				productType = new ProductType();
				productType.setProductType(rst.getString("App_Name"));
				productType.setHrsUsedPerDay(rst.getDouble("Daily_Usage_Hrs"));
				productType.setDaysPerWeek(rst.getInt("Days_Used_In_Week"));				
			}

			rst.close();
			smt.close();
		} catch (Exception e) {
			System.out.println(e.getMessage());
		}
		dbManager.closeConnection(conn);
		return productType;
	}
	
	public static String getProdcutConsumption(String stProductType){
		DBManager dbManager = DBManager.getDBManager();
		Connection conn = null;
		String prdUsage = null;
		try {
			conn = dbManager.getConnection();
			
			Statement smt = conn.createStatement();
			
			ResultSet rst = smt.executeQuery("select * from appliance_power a where product_type = '"+ stProductType + "'");
			if (rst != null && rst.next()) {
				
				prdUsage = rst.getString("power");
			}

			rst.close();
			smt.close();
		} catch (Exception e) {
			System.out.println(e.getMessage());
		}
		dbManager.closeConnection(conn);
		return prdUsage;
	}

	public static List<String> getProductTypes() {
		DBManager dbManager = DBManager.getDBManager();
		Connection conn = null;
		List<String> listPrdTypes = new ArrayList<String>();
		try {
			conn = dbManager.getConnection();
			
			Statement smt = conn.createStatement();
			
			ResultSet rst = smt.executeQuery("select product_type from appliance_power");
			while (rst != null && rst.next()) {
				
				String prdType = rst.getString("product_type");
				listPrdTypes.add(prdType);
			}

			rst.close();
			smt.close();
		} catch (Exception e) {
			System.out.println(e.getMessage());
		}
		dbManager.closeConnection(conn);
		return listPrdTypes;
	}
	public static String getProductModelPresent(String prdType) {
		DBManager dbManager = DBManager.getDBManager();
		Connection conn = null;
		String modelPresent = "0";
		try {
			conn = dbManager.getConnection();			
			Statement smt = conn.createStatement();			
			ResultSet rst = smt.executeQuery("SELECT model_present FROM appliance_power where product_type='"+prdType+"'");
			while (rst != null && rst.next()) {				
				modelPresent = rst.getString("model_present");				
			}

			rst.close();
			smt.close();
		} catch (Exception e) {
			System.out.println(e.getMessage());
		}
		dbManager.closeConnection(conn);
		return "{\"modelPresent\":"+modelPresent+"}";
	}

}

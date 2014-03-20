package com.esave.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.util.ArrayList;
import java.util.List;

import com.esave.model.ApplianceInfo;

public class ApplianceDao {
	public static List<ApplianceInfo> getUserAppliances(String userId){
		List<ApplianceInfo> ltApplianceInfo = new ArrayList<ApplianceInfo>();
		DBManager dbManager = DBManager.getDBManager();
		Connection conn = null;
		try {
			conn = dbManager.getConnection();
			PreparedStatement smt = conn.prepareStatement("select * from appliance where user_id = ?");
			
			smt.setString(1, userId);
			
			ResultSet rs = smt.executeQuery();
			while( rs.next() ){
				ApplianceInfo  ai = new ApplianceInfo();
				//App_Name Model_Number Daily_Usage_Hrs Days_Used_In_Week User_Id
				ai.setAppId(rs.getString("app_id"));
				ai.setAppName(rs.getString("App_Name"));
				ai.setModelNumber(rs.getString("Model_Number"));
				ai.setDailyUsageHrs(rs.getString("Daily_Usage_Hrs"));
				ai.setDaysUsedInWeek(rs.getString("Days_Used_In_Week"));
				ai.setUserId(rs.getString("user_id"));
				ltApplianceInfo.add(ai);
			}
			rs.close();
	        smt.close();
		} catch (Exception e) {
			System.out.println(e.getMessage());
			
		}
		dbManager.closeConnection(conn);
		return ltApplianceInfo;
		
	}

	public static ApplianceInfo getUserAppliance(String userId, String appId) {
		ApplianceInfo  ai = new ApplianceInfo();
		DBManager dbManager = DBManager.getDBManager();
		Connection conn = null;
		try {
			conn = dbManager.getConnection();
			PreparedStatement smt = conn.prepareStatement("select * from appliance where app_Id = ?");
			
			smt.setString(1, appId);
			
			ResultSet rs = smt.executeQuery();
			while( rs.next() ){
				
				//App_Name Model_Number Daily_Usage_Hrs Days_Used_In_Week User_Id
				ai.setAppId(rs.getString("app_id"));
				ai.setAppName(rs.getString("App_Name"));
				ai.setModelNumber(rs.getString("Model_Number"));
				ai.setDailyUsageHrs(rs.getString("Daily_Usage_Hrs"));
				ai.setDaysUsedInWeek(rs.getString("Days_Used_In_Week"));
				ai.setUserId(rs.getString("user_id"));
				
			}
			rs.close();
	        smt.close();
		} catch (Exception e) {
			System.out.println(e.getMessage());
			
		}
		dbManager.closeConnection(conn);
		return ai;
	}

	public static Double calculateApplianceConsumption(ApplianceInfo ai) {
		String  wattage= ProductTagDao.getProdcutConsumption(ai.getAppName());
		System.out.println("wattage for applianceInfo \t"+wattage+"\t"+ai);
		double monthlyConsumption = Integer.parseInt(wattage)*(Integer.parseInt(ai.getDailyUsageHrs())*Integer.parseInt(ai.getDaysUsedInWeek())*4)/1000d;
		System.out.println("monthlyConsumption\t"+monthlyConsumption);
		return monthlyConsumption;
	}

	public static Double calculateAppConumptionAmount(String userId, Double totconsumption) {
		
		double stateTariffAmount = Double.parseDouble(UserDao.getTariffAmountByState(userId))*totconsumption.doubleValue();
		System.out.println("stateTariffAmount\t"+stateTariffAmount);
		return stateTariffAmount;
	}

	public static Double getRecentBillAmount(String userId) {
		double recentBillAmount = 0;
		DBManager dbManager = DBManager.getDBManager();
		Connection conn = null;
		try {
			conn = dbManager.getConnection();
			PreparedStatement smt = conn.prepareStatement("select bill_amount from electricity where user_id =? order by bill_date desc;");
			
			smt.setString(1, userId);
			
			ResultSet rs = smt.executeQuery();
			while( rs.next() ){
				recentBillAmount = Double.parseDouble( rs.getString("bill_amount") ); 
			}
			rs.close();
	        smt.close();
		} catch (Exception e) {
			System.out.println(e.getMessage());
			
		}
		dbManager.closeConnection(conn);
		return recentBillAmount;
	}
}

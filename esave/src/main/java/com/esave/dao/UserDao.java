package com.esave.dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

import com.esave.model.ApplianceInfo;
import com.esave.model.BillingInfo;
import com.esave.model.BillingInfos;
import com.esave.model.UserInfo;

public class UserDao {

	public static String saveUserInfo(UserInfo ui) {
		DBManager dbManager = DBManager.getDBManager();
		Connection conn = null;
		ResultSet generatedKeys = null;
		String userId = "-1";
		try {
			conn = dbManager.getConnection();
			
			PreparedStatement smt = conn.prepareStatement("insert into user (state_code,zip_code,no_of_people,year_house_built) values (?,?,?,?)",PreparedStatement.RETURN_GENERATED_KEYS);
		
			smt.setString(1, ui.getStateCode());
			smt.setString(2, ui.getZipCode());
			smt.setString(3, ui.getNoOfPeople());
			smt.setString(4, ui.getYearHouseBuilt());
			int rowsEffected = smt.executeUpdate();
			if (rowsEffected == 0) {
	            System.out.println("Creating user failed, no rows affected.");
	        }

	        generatedKeys = smt.getGeneratedKeys();
	        if (generatedKeys.next()) {
	        	userId = (generatedKeys.getString(1));
	        } else {
	        	System.out.println("Creating user failed, no generated key obtained.");
	        }
	        generatedKeys.close();
			smt.close();
		} catch (Exception e) {
			System.out.println(e.getMessage());
			return userId;
		}
		dbManager.closeConnection(conn);
		return userId;
		
	}

	public static boolean saveAppInfo(ApplianceInfo ai) {
		DBManager dbManager = DBManager.getDBManager();
		Connection conn = null;
		try {
			conn = dbManager.getConnection();
			
			PreparedStatement smt = conn.prepareStatement("insert into appliance (App_Name,Model_Number,Daily_Usage_Hrs,Days_Used_In_Week,User_Id) values (?,?,?,?,?)");
		
			smt.setString(1, ai.getAppName());
			smt.setString(2, ai.getModelNumber());
			smt.setString(3, ai.getDailyUsageHrs());
			smt.setString(4, ai.getDaysUsedInWeek());
			smt.setString(5, ai.getUserId());
			int rowsEffected = smt.executeUpdate();
			if (rowsEffected == 0) {
	            System.out.println("Creating user failed, no rows affected.");
	        }

	        smt.close();
		} catch (Exception e) {
			System.out.println(e.getMessage());
			return false;
		}
		dbManager.closeConnection(conn);
		return true;
	}

	public static boolean saveElectricBillingInfo(BillingInfos bis) {
		DBManager dbManager = DBManager.getDBManager();
		Connection conn = null;
		try {
			if( bis.getArrBillingInfo().size() >0){
				conn = dbManager.getConnection();
			}
			for(BillingInfo bi : bis.getArrBillingInfo()){
				
				
				PreparedStatement smt = conn.prepareStatement("insert into electricity (Bill_Number, Bill_date, Bill_Amount, User_Id) values (?,?,?,?)");
			
				smt.setString(1, bi.getBillNumber());
				smt.setString(2, bi.getBillDate());
				smt.setString(3, bi.getBillAmount());
				smt.setString(4, bi.getUserId());
				
				int rowsEffected = smt.executeUpdate();
				if (rowsEffected == 0) {
		            System.out.println("Creating user failed, no rows affected.");
		        }

		        smt.close();
			}	
			
		} catch (Exception e) {
			System.out.println(e.getMessage());
			return false;
		}
		dbManager.closeConnection(conn);
		return true;
	}

	public static String getTariffAmountByState(String userId) {
		String tariffRate = "0";
		DBManager dbManager = DBManager.getDBManager();
		Connection conn = null;
		try {
			conn = dbManager.getConnection();
			PreparedStatement smt = conn.prepareStatement("select tr.tariff_rate from user u ,tariff_rate tr where u.user_Id = ? and u.State_Code = tr.state_code");
			
			smt.setString(1, userId);
			
			ResultSet rs = smt.executeQuery();
			while( rs.next() ){
				tariffRate = rs.getString(1);
			}
			rs.close();
	        smt.close();
		} catch (Exception e) {
			System.out.println(e.getMessage());
			
		}
		dbManager.closeConnection(conn);
		return tariffRate;
	}
	public static boolean removeUserAppliance(String appId){
		DBManager dbManager = DBManager.getDBManager();
		Connection conn = null;
		try {
			conn = dbManager.getConnection();
			String query  =  "delete from appliance where App_Id = ? ";
			PreparedStatement smt = conn.prepareStatement(query);
			
			smt.setString(1, appId);
			
			int i = smt.executeUpdate();
			System.out.println(i+"Row deleted");
	        smt.close();
		} catch (Exception e) {
			System.out.println(e.getMessage());
			return false;
		}
		dbManager.closeConnection(conn);
		return true;
	}

	public static ApplianceInfo editUserAppliance(String userAppId) {
		DBManager dbManager = DBManager.getDBManager();
		Connection conn = null;
		ApplianceInfo applianceInfo = new ApplianceInfo();
		try {
			conn = dbManager.getConnection();
			String query  =  "select * from appliance where App_Id = ? ";
			PreparedStatement smt = conn.prepareStatement(query);
			
			smt.setString(1, userAppId);
			
			ResultSet rs = smt.executeQuery();
			while( rs.next() ){
				//App_Id App_Name Model_Number Daily_Usage_Hrs Days_Used_In_Week User_Id
				applianceInfo.setAppId(rs.getString("App_Id"));
				applianceInfo.setAppName(rs.getString("App_Name"));
				applianceInfo.setDailyUsageHrs(rs.getString("Daily_Usage_Hrs"));
				applianceInfo.setDaysUsedInWeek(rs.getString("Days_Used_In_Week"));
				applianceInfo.setModelNumber(rs.getString("Model_Number"));
				applianceInfo.setUserId(rs.getString("User_Id"));
			}
			rs.close();
	        smt.close();
		} catch (Exception e) {
			System.out.println(e.getMessage());
			
		}
		dbManager.closeConnection(conn);
		return applianceInfo;
	}

	public static boolean updateUserAppliance(ApplianceInfo applianceInfo) {
		DBManager dbManager = DBManager.getDBManager();
		Connection conn = null;
		
		try {
			conn = dbManager.getConnection();
			String query  =  "update appliance set App_Name=?,Model_Number=?,Daily_Usage_Hrs=?,Days_Used_In_Week=?  where App_Id = ? ";
			PreparedStatement smt = conn.prepareStatement(query);
			
			smt.setString(1, applianceInfo.getAppName());
			smt.setString(2, applianceInfo.getModelNumber());
			smt.setString(3, applianceInfo.getDailyUsageHrs());
			smt.setString(4, applianceInfo.getDaysUsedInWeek());
			smt.setString(5, applianceInfo.getAppId());
			
			
			int i = smt.executeUpdate();
			System.out.println(i+"Row updated");
	        smt.close();
		} catch (Exception e) {
			System.out.println(e.getMessage());
			return false;
		}
		dbManager.closeConnection(conn);
		return true;
	}

}

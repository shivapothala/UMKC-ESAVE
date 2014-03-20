package com.esave.dao;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.util.ResourceBundle;

public class DBManager {
	private String driverName;
	private String dbUri;
	private String dbDataBase;
	private String dbUser;
	private String dbPassword;

	private static DBManager dbManager;

	private DBManager() {

		ResourceBundle rb = ResourceBundle.getBundle("application");
		this.driverName = rb.getString("db.driverName");
		this.dbUri = rb.getString("db.uri");
		this.dbDataBase = rb.getString("db.databaseName");
		this.dbUser = rb.getString("db.user");
		this.dbPassword = rb.getString("db.password");
		System.out.println(this.toString());
	}

	public static DBManager getDBManager() {
		if (dbManager == null) {
			dbManager = new DBManager();
			return dbManager;
		} else {
			return dbManager;
		}
	}

	public Connection getConnection() throws Exception {
		Connection conn = null;
		Class.forName(driverName);
		// Setup the connection with the DB "jdbc:mysql://localhost:3306/test?"+ "user=root&password=admin"
		conn = DriverManager.getConnection( dbUri+dbDataBase+"?user="+dbUser+"&password="+dbPassword);
		return conn;
	}
	public void closeConnection(Connection conn) {
		if (conn != null){
			try {
				conn.close();
			} catch (SQLException e) {
				
				e.printStackTrace();
			}
		}
	}

	public String getDriverName() {
		return driverName;
	}

	public void setDriverName(String driverName) {
		this.driverName = driverName;
	}

	public String getDbUri() {
		return dbUri;
	}

	public void setDbUri(String dbUri) {
		this.dbUri = dbUri;
	}

	public String getDbDataBase() {
		return dbDataBase;
	}

	public void setDbDataBase(String dbDataBase) {
		this.dbDataBase = dbDataBase;
	}

	public String getDbUser() {
		return dbUser;
	}

	public void setDbUser(String dbUser) {
		this.dbUser = dbUser;
	}

	public String getDbPassword() {
		return dbPassword;
	}

	public void setDbPassword(String dbPassword) {
		this.dbPassword = dbPassword;
	}

}

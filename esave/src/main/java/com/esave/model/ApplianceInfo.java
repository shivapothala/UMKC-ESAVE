package com.esave.model;

public class ApplianceInfo {
	private String appId;
	private String appName;
	private String modelNumber;
	private String dailyUsageHrs;
	private String daysUsedInWeek;
	private String userId;
	@Override
	public String toString() {
		StringBuilder builder = new StringBuilder();
		builder.append("ApplianceInfo [appId=");
		builder.append(appId);
		builder.append(", appName=");
		builder.append(appName);
		builder.append(", modelNumber=");
		builder.append(modelNumber);
		builder.append(", dailyUsageHrs=");
		builder.append(dailyUsageHrs);
		builder.append(", daysUsedInWeek=");
		builder.append(daysUsedInWeek);
		builder.append(", userId=");
		builder.append(userId);
		builder.append(", toString()=");
		builder.append(super.toString());
		builder.append("]");
		return builder.toString();
	}
	public String getAppId() {
		return appId;
	}
	public void setAppId(String appId) {
		this.appId = appId;
	}
	public String getAppName() {
		return appName;
	}
	public void setAppName(String appName) {
		this.appName = appName;
	}
	public String getModelNumber() {
		return modelNumber;
	}
	public void setModelNumber(String modelNumber) {
		this.modelNumber = modelNumber;
	}
	public String getDailyUsageHrs() {
		return dailyUsageHrs;
	}
	public void setDailyUsageHrs(String dailyUsageHrs) {
		this.dailyUsageHrs = dailyUsageHrs;
	}
	public String getDaysUsedInWeek() {
		return daysUsedInWeek;
	}
	public void setDaysUsedInWeek(String daysUsedInWeek) {
		this.daysUsedInWeek = daysUsedInWeek;
	}
	public String getUserId() {
		return userId;
	}
	public void setUserId(String userId) {
		this.userId = userId;
	}
	public ApplianceInfo(String appId, String appName, String modelNumber,
			String dailyUsageHrs, String daysUsedInWeek, String userId) {
		
		this.appId = appId;
		this.appName = appName;
		this.modelNumber = modelNumber;
		this.dailyUsageHrs = dailyUsageHrs;
		this.daysUsedInWeek = daysUsedInWeek;
		this.userId = userId;
	}
	public ApplianceInfo() {
		
	}

	

}

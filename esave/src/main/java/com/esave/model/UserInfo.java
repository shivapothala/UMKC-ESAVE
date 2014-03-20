package com.esave.model;

public class UserInfo {
	private String stateCode;
	private String zipCode;
	private String noOfPeople;
	private String yearHouseBuilt;
	
	
	public UserInfo() {
		
	}
	public UserInfo(String stateCode, String zipCode, String noOfPeople,
			String yearHouseBuilt) {
		super();
		this.stateCode = stateCode;
		this.zipCode = zipCode;
		this.noOfPeople = noOfPeople;
		this.yearHouseBuilt = yearHouseBuilt;
	}
	public String getStateCode() {
		return stateCode;
	}
	public void setStateCode(String stateCode) {
		this.stateCode = stateCode;
	}
	public String getZipCode() {
		return zipCode;
	}
	public void setZipCode(String zipCode) {
		this.zipCode = zipCode;
	}
	public String getNoOfPeople() {
		return noOfPeople;
	}
	public void setNoOfPeople(String noOfPeople) {
		this.noOfPeople = noOfPeople;
	}
	public String getYearHouseBuilt() {
		return yearHouseBuilt;
	}
	public void setYearHouseBuilt(String yearHouseBuilt) {
		this.yearHouseBuilt = yearHouseBuilt;
	}
	@Override
	public String toString() {
		StringBuilder builder = new StringBuilder();
		builder.append("UserInfo [stateCode=");
		builder.append(stateCode);
		builder.append(", zipCode=");
		builder.append(zipCode);
		builder.append(", noOfPeople=");
		builder.append(noOfPeople);
		builder.append(", yearHouseBuilt=");
		builder.append(yearHouseBuilt);
		builder.append(", toString()=");
		builder.append(super.toString());
		builder.append("]");
		return builder.toString();
	}
	
	
}

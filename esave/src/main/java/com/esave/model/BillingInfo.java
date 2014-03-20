package com.esave.model;

public class BillingInfo {
	private String billNumber;
	private String billDate;
	private String billAmount;
	private String userId;
	
	
	public BillingInfo() {
		
	}
	public BillingInfo(String billNumber, String billDate, String billAmount,
			String userId) {
		super();
		this.billNumber = billNumber;
		this.billDate = billDate;
		this.billAmount = billAmount;
		this.userId = userId;
	}
	@Override
	public String toString() {
		StringBuilder builder = new StringBuilder();
		builder.append("BillingInfo [billNumber=");
		builder.append(billNumber);
		builder.append(", billDate=");
		builder.append(billDate);
		builder.append(", billAmount=");
		builder.append(billAmount);
		builder.append(", userId=");
		builder.append(userId);
		builder.append("]");
		return builder.toString();
	}
	public String getBillNumber() {
		return billNumber;
	}
	public void setBillNumber(String billNumber) {
		this.billNumber = billNumber;
	}
	public String getBillDate() {
		return billDate;
	}
	public void setBillDate(String billDate) {
		this.billDate = billDate;
	}
	public String getBillAmount() {
		return billAmount;
	}
	public void setBillAmount(String billAmount) {
		this.billAmount = billAmount;
	}
	public String getUserId() {
		return userId;
	}
	public void setUserId(String userId) {
		this.userId = userId;
	}
	
	
}

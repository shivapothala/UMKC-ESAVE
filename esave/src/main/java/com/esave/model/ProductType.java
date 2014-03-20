package com.esave.model;

public class ProductType {
	private String productType;
	private String uriTag;
	private String usageField;
	private double hrsUsedPerDay;
	private int daysPerWeek;
	
	public String getProductType() {
		return productType;
	}
	public void setProductType(String productType) {
		this.productType = productType;
	}
	public String getUriTag() {
		return uriTag;
	}
	public void setUriTag(String uriTag) {
		this.uriTag = uriTag;
	}
	public String getUsageField() {
		return usageField;
	}
	public void setUsageField(String usageField) {
		this.usageField = usageField;
	}
	public double getHrsUsedPerDay() {
		return hrsUsedPerDay;
	}
	public void setHrsUsedPerDay(double hrsUsedPerDay) {
		this.hrsUsedPerDay = hrsUsedPerDay;
	}
	public int getDaysPerWeek() {
		return daysPerWeek;
	}
	public void setDaysPerWeek(int daysPerWeek) {
		this.daysPerWeek = daysPerWeek;
	}
	@Override
	public String toString() {
		StringBuilder builder = new StringBuilder();
		builder.append("ProductType [productType=");
		builder.append(productType);
		builder.append(", uriTag=");
		builder.append(uriTag);
		builder.append(", usageField=");
		builder.append(usageField);
		builder.append("]");
		return builder.toString();
	}
	
}

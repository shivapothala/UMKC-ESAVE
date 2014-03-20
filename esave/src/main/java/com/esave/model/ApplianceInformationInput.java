package com.esave.model;

public class ApplianceInformationInput {
	private String productType;
	private String brandName;
	private String modelNumber;
	
	
	public ApplianceInformationInput() {
		
	}
	public ApplianceInformationInput(String productType, String brandName,
			String modelNumber) {
		super();
		this.productType = productType;
		this.brandName = brandName;
		this.modelNumber = modelNumber;
	}
	public String getProductType() {
		return productType;
	}
	public void setProductType(String productType) {
		this.productType = productType;
	}
	public String getBrandName() {
		return brandName;
	}
	public void setBrandName(String brandName) {
		this.brandName = brandName;
	}
	public String getModelNumber() {
		return modelNumber;
	}
	public void setModelNumber(String modelNumber) {
		this.modelNumber = modelNumber;
	}
	@Override
	public String toString() {
		StringBuilder builder = new StringBuilder();
		builder.append("ApplianceInformationInput [productType=");
		builder.append(productType);
		builder.append(", brandName=");
		builder.append(brandName);
		builder.append(", modelNumber=");
		builder.append(modelNumber);
		builder.append("]");
		return builder.toString();
	}
	
}

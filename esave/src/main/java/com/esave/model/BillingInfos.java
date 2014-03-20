package com.esave.model;

import java.util.ArrayList;

public class BillingInfos {
	private ArrayList<BillingInfo> arrBillingInfo;
	
	

	public BillingInfos() {
		
	}

	public BillingInfos(ArrayList<BillingInfo> arrBillingInfo) {
		super();
		this.arrBillingInfo = arrBillingInfo;
	}

	@Override
	public String toString() {
		StringBuilder builder = new StringBuilder();
		builder.append("BillingInfos [arrBillingInfo=");
		builder.append(arrBillingInfo);
		builder.append(", toString()=");
		builder.append(super.toString());
		builder.append("]");
		return builder.toString();
	}

	public ArrayList<BillingInfo> getArrBillingInfo() {
		return arrBillingInfo;
	}

	public void setArrBillingInfo(ArrayList<BillingInfo> arrBillingInfo) {
		this.arrBillingInfo = arrBillingInfo;
	}
	
}

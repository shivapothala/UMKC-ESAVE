package com.esave.model;

public class ReportInfo {
	private Double consumption;
	private String wastageConsumption;
	private Double amount;
	private String wastageAmount;
	private Double totalAmount;
	/* (non-Javadoc)
	 * @see java.lang.Object#toString()
	 */
	@Override
	public String toString() {
		StringBuilder builder = new StringBuilder();
		builder.append("ReportInfo [consumption=");
		builder.append(consumption);
		builder.append(", wastageConsumption=");
		builder.append(wastageConsumption);
		builder.append(", amount=");
		builder.append(amount);
		builder.append(", wastageAmount=");
		builder.append(wastageAmount);
		builder.append(", totalAmount=");
		builder.append(totalAmount);
		builder.append(", toString()=");
		builder.append(super.toString());
		builder.append("]");
		return builder.toString();
	}
	/**
	 * @return the consumption
	 */
	public Double getConsumption() {
		return consumption;
	}
	/**
	 * @param consumption the consumption to set
	 */
	public void setConsumption(Double consumption) {
		this.consumption = consumption;
	}
	/**
	 * @return the wastageConsumption
	 */
	public String getWastageConsumption() {
		return wastageConsumption;
	}
	/**
	 * @param wastageConsumption the wastageConsumption to set
	 */
	public void setWastageConsumption(String wastageConsumption) {
		this.wastageConsumption = wastageConsumption;
	}
	/**
	 * @return the amount
	 */
	public Double getAmount() {
		return amount;
	}
	/**
	 * @param amount the amount to set
	 */
	public void setAmount(Double amount) {
		this.amount = amount;
	}
	/**
	 * @return the wastageAmount
	 */
	public String getWastageAmount() {
		return wastageAmount;
	}
	/**
	 * @param wastageAmount the wastageAmount to set
	 */
	public void setWastageAmount(String wastageAmount) {
		this.wastageAmount = wastageAmount;
	}
	/**
	 * @return the totalAmount
	 */
	public Double getTotalAmount() {
		return totalAmount;
	}
	/**
	 * @param totalAmount the totalAmount to set
	 */
	public void setTotalAmount(Double totalAmount) {
		this.totalAmount = totalAmount;
	}
	public ReportInfo(Double consumption, String wastageConsumption,
			Double amount, String wastageAmount, Double totalAmount) {
		super();
		this.consumption = consumption;
		this.wastageConsumption = wastageConsumption;
		this.amount = amount;
		this.wastageAmount = wastageAmount;
		this.totalAmount = totalAmount;
	}
	public ReportInfo() {
		super();
		// TODO Auto-generated constructor stub
	}
	
	
	
}

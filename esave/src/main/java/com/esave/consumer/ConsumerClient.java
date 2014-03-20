package com.esave.consumer;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;



public class ConsumerClient {

	public static String consumeRestService(String uri) {
		URL url;
		StringBuffer str = new StringBuffer();
		try {
			
			url = new URL(uri);
			HttpURLConnection conn = (HttpURLConnection) url.openConnection();
			conn.setRequestMethod("GET");
			conn.setRequestProperty("Accept", "application/json");

			if (conn.getResponseCode() != 200) {
				throw new RuntimeException("Failed : HTTP error code : "
						+ conn.getResponseCode());
			}
			BufferedReader br = new BufferedReader(new InputStreamReader(
					(conn.getInputStream())));

			
			String output;
			System.out.println("Output from Server .... \n");
			while ((output = br.readLine()) != null) {
				str.append(output);
			}
			conn.disconnect();
		} catch (MalformedURLException e) {

			e.printStackTrace();

		} catch (IOException e) {
			e.printStackTrace();

		}
		return str.toString();
	}

}

package com.mypackage.isliproject;

import java.io.IOException;
import java.io.UnsupportedEncodingException;


import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.entity.StringEntity;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.protocol.HTTP;
import org.apache.http.*;
import org.w3c.dom.Document;
import org.xml.sax.InputSource;
import org.xml.sax.SAXException;

import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;
import android.widget.Button;
import android.widget.EditText;

public class LoginActivity extends Activity {

    EditText u,p;
    Button b;
    String s;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_login);
        u=(EditText)findViewById(R.id.usern);
        p=(EditText)findViewById(R.id.passw);
        b=(Button)findViewById(R.id.login);
        HttpClient httpclient = new DefaultHttpClient();
        HttpPost httppost = new HttpPost("http://192.168.192.131/");

        try{
            StringEntity se = new StringEntity( "<uname>"+u+"</uname><password>"+"</password>"+p+"</password>", HTTP.UTF_8);
            se.setContentType("text/xml");
            httppost.setEntity(se);
        }  catch (UnsupportedEncodingException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} 
        s="<uname>"+u+"</uname><password>"+"</password>"+p+"</password>";
        
  
       
        
   
        
    }


    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.login, menu);
        return true;
    }
    
}

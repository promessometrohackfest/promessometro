package com.promessometro.promessometro;

import android.app.Activity;
import android.os.Bundle;
import android.webkit.WebView;
import android.webkit.WebViewClient;

public class MainActivity extends Activity {
    @Override protected void onCreate(Bundle savedInstanceState) { super.onCreate(savedInstanceState);
    setContentView(R.layout.activity_main);
    WebView webb = (WebView) findViewById(R.id.web1);
    webb.setWebViewClient(new WebViewClient());
    webb.loadUrl("https://promessometro1.websiteseguro.com/App/");
    webb.getSettings().setDatabaseEnabled(true);
    webb.getSettings().setJavaScriptEnabled(true);

    }
}



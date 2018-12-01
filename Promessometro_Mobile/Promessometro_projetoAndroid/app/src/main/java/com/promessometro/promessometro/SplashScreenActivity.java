package com.promessometro.promessometro;

import android.app.Activity;
import android.content.Intent;
import android.os.Handler;
import android.os.Bundle;

public class SplashScreenActivity extends Activity {

    @Override
    protected void onCreate (Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash_screen);
        Handler handler = new Handler();
        handler.postDelayed(new Runnable() {
            @Override
            public void run() {
                mostrarMainActivity();
            }

        }, 6000);
    }

        private void mostrarMainActivity() {
        Intent intent = new Intent(SplashScreenActivity.this, MainActivity.class);
        startActivity(intent);
        finish();

    }
}
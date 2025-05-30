<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        //youtube
        // $key = "AIzaSyBAfQ4kgZ2q4tv5yIHxHcXrappjPnThgbc";
        // $base_url = "https:/www.googleapis.com/youtube/v3/";
        // $chanelId = "UCPoH_6QOy6mVbUALIq1sdfQ";
        // $maxResult = 6;
        // $API_URL = $base_url . "search?part=snippet&channelId=" . $chanelId . "&maxResults=" . $maxResult . "&key=" . $key . "&order=date";

        // $connection_c = curl_init(); // initializing
        // curl_setopt($connection_c, CURLOPT_URL, $API_URL); // API URL to connect
        // curl_setopt($connection_c, CURLOPT_RETURNTRANSFER, 1); // Return the result, do not print
        // curl_setopt($connection_c, CURLOPT_TIMEOUT, 20);
        // $json_return = curl_exec($connection_c); // Connect and get json data
        // curl_close($connection_c); // Close connection
        // $youtube = json_decode($json_return);

        // dd($youtube);

        return view('page.index', [
            'title' => 'Home',
            // 'youtube' => isset($youtube->items) ? $youtube->items : '',
        ]);
    }

    public function ppat()
    {
        return view('page.ppat', [
            'title' => 'Kantah Banjar',
        ]);
    }
}

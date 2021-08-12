<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Share;

class SocialShareController extends Controller
{
    public function index()
    {

    	$cert_img = 'https://static.vecteezy.com/system/resources/thumbnails/002/349/754/small/modern-elegant-certificate-template-free-vector.jpg';
    	$title = 'Title';
    	$summary = 'Coming soon...';
         return view('social_share')->with(['certificate'=>$cert_img,'title'=>$title,'summary'=>$summary]);
    }
}

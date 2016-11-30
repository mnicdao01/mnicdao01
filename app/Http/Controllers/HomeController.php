<?php

namespace App\Http\Controllers;
use App\Skill;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){

        $skills = Skill::get();

        return view('pages.index')->withSkills($skills);

    }

    public function getaccesstoken(){

        $skills = Skill::get();

        $accesstoken = '53753631.9b97b14.5c0667f2e6c342d892d545ed70e00d03';

        $response_url = ('https://api.instagram.com/v1/users/self/media/recent/?access_token='.$accesstoken);

        $insta_res = file_get_contents($response_url);
        $insta_json = json_decode($insta_res, true);
        $profile['fullname'] = 'MARK NICDAO';

        return view('pages.index')->withResponse($insta_json)->withProfile($profile)->withSkills($skills);

    }


}

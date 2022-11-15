<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function singleProject($slug)
    {
        return view('frontend.pages.individual_project');
    }
    public function allProject()
    {
        return view('frontend.pages.all_project');
    }
    public function aboutUs()
    {
        return view('frontend.pages.about_club');
    }
    public function members($slug = null)
    {
        $title = "";
        if ($slug == "board-members") {
            $title = "BOARD";
        }
        return view('frontend.pages.member', compact('title'));
    }
    public function charterMembers()
    {

        return view('frontend.pages.charter-member');
    }
    public function membership()
    {
        return view('frontend.pages.membership');
    }
    public function contact()
    {
        return view('frontend.pages.contact');
    }
    public function news()
    {
        return view('frontend.pages.news');
    }
    public function photo()
    {
        return view('frontend.pages.photos');
    }
    public function videos()
    {
        return view('frontend.pages.videos');
    }
}
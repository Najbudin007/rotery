<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Project;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function singleProject($slug)
    {
        $project = Project::where('slug', $slug)->first();
        return view('frontend.pages.individual_project', compact('project'));
    }
    public function allProject()
    {
        $projects = Project::latest()->get();
        return view('frontend.pages.all_project', compact('projects'));
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
        $photos = Gallery::where('type', 'image')->latest()->get();
        return view('frontend.pages.photos', compact('photos'));
    }
    public function videos()
    {
        $videos = Gallery::where('type', 'video')->latest()->get();
        return view('frontend.pages.videos', compact('videos'));
    }
}

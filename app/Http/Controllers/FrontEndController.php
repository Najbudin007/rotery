<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Project;
use App\Models\User;


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
            $members = User::whereHas('role', function ($role) {
                $role->where('name', 'board member');
            })->get();
        } else {
            $members = User::whereHas('role', function ($role) {
                $role->where('name', 'member');
            })->get();
        }

        return view('frontend.pages.member', compact('title', 'members'));
    }

    public function charterMembers()
    {
        $members = User::whereHas('role', function ($role) {
            $role->where('name', 'charter member');
        })->get();
        $president = User::where('designation', 'president')->whereHas('role', function ($role) {
            $role->where('name', 'charter member');
        })->first();
        return view('frontend.pages.charter-member', compact('members', 'president'));
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

    public function homeAboutUs()
    {
        return view('frontend.template.aboutus');
    }

    public function blog()
    {
        return view('frontend.pages.blog');
    }

    public function blog_detail($slug)
    {   
        $blog_details = blog::where('slug', $slug)->first();
        return view('frontend.pages.blog_detail', compact('blog_details'));
    }

    public function news_detail($slug)
    {   
        $news_details = News::where('slug', $slug)->first();
        return view('frontend.pages.newsDetail', compact('news_details'));
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageHomeItem;
use App\Models\JobCategory;

class HomeController extends Controller
{
    public function index() {
        $page_home_data = PageHomeItem::where('id',1)->first();
        $job_categories = JobCategory::orderBy('name', 'asc')->take(9)->get();
        return view('front.home', compact('page_home_data', 'job_categories'));
    }
}

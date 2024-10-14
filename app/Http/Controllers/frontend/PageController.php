<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function contact(){
        return view('frontend.contact');
    }

    public function about(){
        return view('frontend.about');
    }

    public function services(){
        return view('frontend.service');
    }

    public function serviceDetails(){
        return view('frontend.service_detail');
    }

    public function faq(){
        return view('frontend.faq');
    }

    public function gallery(){
        return view('frontend.gallery');
    }

    public function showroom(){
        return view('frontend.showroom');
    }

    public function team(){
        return view('frontend.team_detail');
    }

    public function search(Request $request){
        $search = $request->input('search');

        //$results = YourModel::where('your_column_name', 'LIKE', '%' . $searchTerm . '%')->get(); // Change the column name accordingly

        return view('frontend.search', compact('products'));
    }
}

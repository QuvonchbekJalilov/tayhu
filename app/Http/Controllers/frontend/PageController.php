<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Licence;
use App\Models\Portfolio;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $sliders  = Slider::all();
        $products  = Product::all();
        $portfolios  = Portfolio::all();
        return view('frontend.index', compact('sliders', 'products', 'portfolios'));
    }

    public function contact()
    {
        $contact = Contact::first();
        return view('frontend.contact', compact('contact'));
    }

    public function about()
    {
        $licences = Licence::all();
        $teams = Team::all();
        return view('frontend.about', compact('licences', 'teams'));
    }

    public function products()
    {
        $products = Product::paginate(4);
        $categories = Category::all();
        return view('frontend.service', compact('products', 'categories'));
    }

    public function productsDetails($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        return view('frontend.service_detail', compact('product', 'categories'));
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function gallery()
    {
        $portfolios = Portfolio::all();
        return view('frontend.gallery', compact('portfolios'));
    }

    public function showroom()
    {
        return view('frontend.showroom');
    }

    public function team($id)
    {
        $team = Team::find($id);
        return view('frontend.team_detail', compact('team'));
    }

    public function search(Request $request){
        $search = $request->input('search');

        //$results = YourModel::where('your_column_name', 'LIKE', '%' . $searchTerm . '%')->get(); // Change the column name accordingly

        return view('frontend.search', compact('products'));
    }
}

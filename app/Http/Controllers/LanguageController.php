<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switchLanguage(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'lang' => 'required|in:uz,ru,en', // Add other languages as needed
        ]);

        // Set the application locale
        app()->setLocale($request->lang);
        
        // Optionally store the locale in the session
        Session::put('locale', $request->lang);
        
        // Redirect back to the previous page
        return redirect()->back();
    }
}

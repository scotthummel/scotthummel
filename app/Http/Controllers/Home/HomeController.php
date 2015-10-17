<?php

namespace App\Http\Controllers\Home;

use App\Scotthummel\Mailers\ContactMailer;
use App\Scotthummel\Notifications\Flash;
use App\Website;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Validator;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function about()
    {
        return view('home.about');
    }

    public function portfolio()
    {
        $sites = Website::all();

        return view('home.portfolio', [
            'sites' => $sites
        ]);
    }

    public function website($slug)
    {
        $site = Website::where('slug', $slug)->firstOrFail();

        return view('home.website', [
            'site' => $site
        ]);
    }

    public function resume()
    {
        return view('home.resume');
    }

    public function testimonials()
    {
        return view('home.testimonials');
    }

    public function getContact()
    {
        return view('home.contact');
    }

    public function postContact(Request $request, ContactMailer $mailer)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'comments' => 'required'
        ]);


        $mailer->contact($request->only('name', 'email', 'phone', 'comments'));

        Flash::success('Thank you for contacting SH Interactive.  We will return your email in 2-3 business days');

        return redirect()->to('/');
    }
}

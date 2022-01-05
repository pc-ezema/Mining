<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phrase;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allphrases = Phrase::latest()->get();
        $phrases = Phrase::latest()->paginate(15);
        return view('home', [
            'allphrases' => $allphrases,
            'phrases' => $phrases
        ]);
    }
}

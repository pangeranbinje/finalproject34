<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use Auth;

use Illuminate\Http\Request;

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
        $post = Pertanyaan::paginate(4);
        //dd($post);
        return view('layouts.index', compact('post'));
    }

    public function create()
    {

        return view('layouts.create');
    }


    public function store(Request $request)
    {
        $idk = Auth::user()->id;
        //dd($idk);
        $post = Pertanyaan::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "like" => "0",
            "user_id" => $idk
        ]);

        return redirect('index');
    }

    public function answer($id)
    {
        $tampil = Pertanyaan::find($id);

        //dd($tampil);

        return view('layouts.answer', compact('tampil'));
    }
}

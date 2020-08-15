<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use Auth;

use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

// use Illuminate\Support\Facades\Auth;

use Illuminate\Pagination\Paginator;

use Illuminate\Pagination\LengthAwarePaginator;

use App\Http\Resources\UserCollection;

class PertanyaanController extends Controller
{

    public function test()
    {
        $post = Pertanyaan::all()->orderBy('created_at', 'desc');
        return view('layouts.test', compact('post'));
    }

    public function profile()
    {
        return view('layouts.profile');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth') -> except(['index']);
        }
    
    public function index()
    {
        $post = Pertanyaan::paginate(4);
        return view('layouts.index', compact('post'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('layouts.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        
        // Pertanyaan::create($request->all());
        // return redirect('/index');
        // $idk = Auth::user()->id;
        // $post = Pertanyaan::create([
        //     "judul" => $request["judul"],
        //     "isi" => $request["isi"],
        //     "user_id" => $idk
        // ]);
        $pst = pertanyaan::create([
            'judul' => $request['judul'],
            'isi' => $request['isi']
            ]);
=======
        $idk = Auth::user()->id;
        //dd($idk);
        $post = Pertanyaan::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "user_id" => $idk
        ]);
>>>>>>> 660cedfde8e87a0d463c81cf6d2c7dccc60c5943

        return redirect('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function answer($id)
    {
        $tampil = Pertanyaan::find($id);

        //dd($tampil);

        return view('layouts.answer', compact('tampil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

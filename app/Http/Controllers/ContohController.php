<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pertanyaan; /*unruk memakai model di Controller*/
use Auth;//menggunakan authentication



class PertanyaanController extends Controller
{
    //menambahkan pengamanan/authentication login
    public function __construct(){
    $this->middleware('auth') -> except(['index']);
    }

    //1.buat
    public function create(){
        return view('adminlte.blog.create');
    }
    //2. tampung
    public function store(Request $request){
        //dd($request->all());
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required',
        ]);
        //  $query = DB::table('pertanyaan')->insert([
        //      "judul" => $request["judul"],
        //      "isi" => $request["isi"]
        //  ]);

        //CRUD 2 menyimpan data dengan method save
        //  $pertanyaan = new pertanyaan;
        //  $pertanyaan->judul = $request["judul"];
        //  $pertanyaan->isi = $request["isi"];
        //  $pertanyaan->save();
        
        //crud 2 menyimpan data dengan mass assigment
          $pertanyaan = pertanyaan::create([
             'judul' => $request['judul'],
             'isi' => $request['isi']
             ]);

        return redirect('/pertanyaan')->with ('success', 'Pertanyaan terkirim!');

    }
    //3.simpan
    public function index(){
        // $posts = DB::table('pertanyaan')->get();
        //dd ($posts);

        //crud2
        $posts = pertanyaan::all();//menyimpan data dan menampilkan di index
        return view('adminlte.blog.index', compact('posts'));
    }
    //4.tampil satu data
    public function show($id){
        // $tampil = DB::table('pertanyaan')->where('id',$id)->first();
        //dd($tampil);
        $pertanyaan = pertanyaan::find($id);
        // dd($pertanyaan);

        return view('adminlte.blog.show', compact('pertanyaan'));
    }

    //5.edit
    public function edit($id){
        // $edit = DB::table('pertanyaan')->where('id',$id)->first();
        //dd($edit);
        //crud 2
        $pertanyaan = pertanyaan ::find($id);

        return view('adminlte.blog.edit', compact('pertanyaan'));
    }

    //6.tampil edit/update
    public function update($id, Request $request){
        // $request->validate([
        //     'judul' => 'required|unique:pertanyaan',
        //     'isi' => 'required',
        // ]);
        // $query = DB::table('pertanyaan')
        //         ->where('id', $id)
        //         ->update([
        //             'judul' => $request ['judul'],
        //             'isi' => $request ['isi']
        //             ]);
        //crud2
        $update = pertanyaan::where('id',$id)->update([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);
            // dd($update);
         
        return redirect('/pertanyaan')->with ('success', 'Update Question Complete!');
    }
    //7.hapus
    public function destroy($id) {
        // $query = DB::table('pertanyaan')->where('id', $id)->delete();
        Pertanyaan::destroy($id);

        return redirect('/pertanyaan')->with('succes', 'ayeee!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
        public function index()
    {
       
            $buku = DB::table('buku')->paginate(3);

              
            return view('index',['buku' => $buku]);

    }

    public function tambah()
    {
 
	return view('tambah');
 
    }

   
    public function store(Request $request)
    {
	
	DB::table('buku')->insert([
		'buku_judul' => $request->buku_judul,
		'buku_penulis' => $request->buku_penulis,
		'buku_penerbit' => $request->buku_penerbit,
	]);

	return redirect('/bukku');
 
    }

    public function edit($id)
    {
        
        $buku = DB::table('buku')->where('id',$id)->get();
        
        return view('edit',['buku' => $buku]);

    }

   
    public function update(Request $request)
    {
    
        DB::table('buku')->where('id',$request->id)->update([
            'buku_judul' => $request->buku_judul,
		    'buku_penulis' => $request->buku_penulis,
		    'buku_penerbit' => $request->buku_penerbit,
        ]);
      
        return redirect('/bukku');
    }

    public function hapus($id)
    {
     
        DB::table('buku')->where('id',$id)->delete();
            
        return redirect('/bukku');
    }

    
}

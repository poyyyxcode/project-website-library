<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(){
        return view('home.home',[
            'bukus' => Buku::all(),
        ]);
    }

    public function search(Request $request){
        $searchKeyword = $request->input('search');
        $result = Buku::where('title', 'like', "%{$searchKeyword}%")->get();
        return view('home.home', [
            'bukus' => $result,
        ]);
    }
}

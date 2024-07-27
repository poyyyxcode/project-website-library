<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DitandaiController extends Controller
{
    public function show(){
        $currentUser = auth()->user();
        return view('ditandai.ditandai', [
            'bukus' => $currentUser->buku_ditandai,
        ]);
    }

    public function tandai(Buku $buku){
        $currentUser = auth()->user();

        if(!($buku->is_ditandai()))
        {
            User::find($currentUser->id)->buku_ditandai()->attach($buku);
        }
        return redirect('/ditandai');
    }

    public function hapus_penanda(Buku $buku){
        $currentUser = auth()->user();

        if($buku->is_ditandai())
        {
            User::find($currentUser->id)->buku_ditandai()->detach($buku);
        }
        return redirect('/ditandai');
    }
}

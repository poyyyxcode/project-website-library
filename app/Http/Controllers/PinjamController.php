<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class PinjamController extends Controller
{
    public function show(){
        $currentUser = auth()->user();
        return view('daftar_peminjaman.daftar_peminjaman', [
            'bukus' => $currentUser->buku_dipinjam,
        ]);
    }

    public function pinjam(Buku $buku){
        $currentUser = auth()->user();
        if(count($currentUser->buku_dipinjam) >= 3) {
            return redirect('/daftar_peminjaman')->with('failed', 'Hanya 3 buku yang boleh dipinjam');    
        } elseif (!($buku->is_tersedia)) {
            return redirect('/daftar_peminjaman')->with('failed', 'Buku tidak tersedia');
        }
        if($buku->is_tersedia && ($buku->user_meminjam == NULL)){
            $buku->update(['user_id' => $currentUser->id, 'is_tersedia' => false, 'deadline' => now()->addWeek()]);
        }
        return redirect('/daftar_peminjaman')->with('success', 'Buku berhasil dipinjam');
    }

    public function kembalikan(Buku $buku){
        $buku->update(['user_id' => null, 'is_tersedia' => true, 'deadline' => null]);
        return redirect('/daftar_peminjaman');
    }
}

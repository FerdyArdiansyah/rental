<?php

namespace App\Http\Controllers;

use App\Item;
use App\Transaction;
use App\Pengembalian;
use Nexmo\Laravel\Facade\Nexmo;
use Illuminate\Http\Request;

class KembaliController extends Controller
{
    public function index()
    {
        $returns = Pengembalian::With('item', 'transaction')->get();
        return view('pengembalian.index', compact('returns'));
    }
    public function create($id)
    {
        $transactions = Transaction::findOrFail($id);
        return view('pengembalian.create', compact('transactions'));
    }

    public function store(Request $request, $id)
    {
        $returns = Pengembalian::create([
            'kode_id' => $request->kode_id,
            'nofaktur_id' => $request->nofaktur_id,
            'namapeminjam_id' => $request->namapeminjam_id,
            'tanggalpinjam_id' => $request->tanggalpinjam_id,
            'tanggalkembali_id' => $request->tanggalkembali_id,
        ]);
            if($returns->save()) {

                $transactions = Transaction::findOrFail($id);

                $get = item::findOrFail($returns->kode_id);

                $hitung = $get->stock + $transactions->jumlah;
    
                $get->update([
                   'stock' => $hitung
                ]);

            if($returns->save()) {
                $transactions = Transaction::findOrFail($returns->nofaktur_id);

                $transactions->update([
                    'kategori' => 'retrun'
                ]);
            }
        }

        return redirect()->back();
    }
    
}

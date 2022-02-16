<?php

namespace App\Http\Controllers;

use App\Item;
use App\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'items' => Item::count(),
            'transactions' => Transaction::count(),
            'terlambat' => Transaction::where('durasi', 'Terlambat')->count(),
            'omset' => Transaction::sum('idr'),
        ];
        return view('dashboard.index', $data);
    }
}

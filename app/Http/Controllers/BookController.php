<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index (){
        // get data
        $data ['books'] = [
            [
            'judul' => 'pengembangan mental dengan JSHT',
            'halaman' => 120,
            'penulis' => 'adam arrahman'
        ],
        [
            'judul' => 'Gajah Terbang',
            'halaman' => 520,
            'penulis' => 'GAT'
        ],
    ];
        return view("books.index", $data);
    }
}

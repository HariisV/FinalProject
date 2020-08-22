<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\jawaban;
use App\komentar;
use App\Http\Requests\PertanyaanRequest;

class PertanyaanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function store(PertanyaanRequest $request)
    {
        Pertanyaan::create($request->all());
        return redirect()->route('index');
    }

    public function index()
    {
        $pertanyaan = Pertanyaan::get();
        $jawaban = jawaban::get();
        $komentar = komentar::get();
        return view('forum', compact('pertanyaan', 'jawaban', 'komentar'));
    }

    public function tambahJawaban(Request $request, $id)
    {
        jawaban::create($request->all());
        return redirect()->route('dashboard.forum');
    }

   
}

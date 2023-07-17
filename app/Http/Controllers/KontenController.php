<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Konten;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KontenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Konten::join('kategoris', 'kategoris.id', '=', 'kontens.kategori_id')
            ->get();
        return view('konten.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Kategori::all();
        return view('konten.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $uploadPath = public_path('uploads');
            if (!File::isDirectory($uploadPath)) {
                File::makeDirectory($uploadPath, 0755, true, true);
            }
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            if ($extension == 'php') {
                $rename = 'file_' . date('YmdHis') . '.jpg';
            } else {
                $rename = 'file_' . date('YmdHis') . '.' . $extension;
            }
            if ($file->move($uploadPath, $rename)) {
                $post = Konten::create([
                    'kategori_id' => $request->kategori,
                    'konten' => $request->konten,
                    'link' => $rename
                ]);
            } else {
                return redirect()->back();
            }
            return redirect(url('konten'));
        } else {
            $post = Konten::create([
                'kategori_id' => $request->kategori,
                'konten' => $request->konten,
                'link' => '-'
            ]);
            return redirect(url('konten'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

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

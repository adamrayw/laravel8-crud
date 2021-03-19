<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Movie;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Movie::All();

        return view('artikel.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $movie = new Movie;

        // $movie->title = $request->title;
        // $movie->description = $request->description;
        // $movie->genre = $request->genre;
        // $movie->year = $request->year;

        // $movie->save();

        # cara kedua

        // Movie::create([
        //     'title' => $request->title,
        //     'genre' => $request->genre,
        //     'year' => $request->year,
        //     'description' => $request->description
        // ]);

        #cara ketiga

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'genre' => 'required',
            'year' => 'required'
        ]);

        Movie::create($request->all());

        return redirect('/artikel')->with('status', 'Data berhasil di tambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('artikel.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('artikel.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {

        $request->validate([
            'title' => 'required',
            'year' => 'required',
            'genre' => 'required',
            'description' => 'required'
        ]);

        Movie::where('id', $movie->id)
            ->update([
                'title' => $request->title,
                'year' => $request->year,
                'genre' => $request->genre,
                'description' => $request->description
            ]);

        return redirect('/artikel')->with('status', 'Data telah diubah..');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        Movie::destroy($movie->id);

        return redirect('/artikel')->with('status', 'Data telah di hapus');
    }
}

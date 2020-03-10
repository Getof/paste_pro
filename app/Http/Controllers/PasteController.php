<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Paste;
use DateTime;
use Illuminate\Http\Request;
use Hashids\Hashids;
use Seld\PharUtils\Timestamps;

class PasteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        // dd($input);

        $paste = new Paste;
        if ($input['title'] = null) { $paste->title='Untitled';} else {$paste->title = $input['title'];}
        if ($input['paste_text'] = null) {return redirect('/');} else {$paste->paste = $input['paste_text'];}
        $paste->sintax = $input['sintax'];
        $paste->expir = $input['expir'];
        $paste->expose = $input['expose'];
        $date = new DateTime();
        $paste->hash = substr(md5($date->format('H m d')), 1, 8);

         dd($paste);

        if ($paste->save()) {
            return redirect()->route('show', ['hash' => $paste->hash]);
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paste  $paste
     * @return \Illuminate\Http\Response
     */
    public function show(Paste $paste)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paste  $paste
     * @return \Illuminate\Http\Response
     */
    public function edit(Paste $paste)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paste  $paste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paste $paste)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paste  $paste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paste $paste)
    {
        //
    }
}

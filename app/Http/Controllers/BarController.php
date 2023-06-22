<?php

namespace App\Http\Controllers;

use App\Models\Bar;
use App\Http\Requests\StoreBarRequest;
use App\Http\Requests\UpdateBarRequest;
use Symfony\Component\HttpFoundation\Request;

class BarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all the posts ordered by published date
        $bars = Bar::all();

        return view('bar.index', compact('bars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'grault' => ['required']
        ]);

        $bar = new Bar();

        $bar->name = request('name');
        $bar->waldo = request('waldo');
        $bar->grault = request('grault');

        $bar->addOrdan();

        $bar->save();

        return redirect('/bar');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bar  $bar
     * @return \Illuminate\Http\Response
     */
    public function show(Bar $bar)
    {
        return view('bar.show', compact('bar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bar  $bar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bar = Bar::find($id);
        return view('bar.edit', compact('bar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBarRequest  $request
     * @param  \App\Models\Bar  $bar
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'grault' => ['required']
        ]);

        $bar = Bar::find($id);

        $bar->name = request('name');
        $bar->waldo = request('waldo');
        $bar->grault = request('grault');

        $bar->save();

        return redirect('/bar/'.$bar->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bar  $bar
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $bar = Bar::find($id);
        $bar->delete();
        return redirect('/bar');

    }
}

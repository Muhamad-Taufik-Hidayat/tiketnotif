<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\AdminDaytrans;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class AdminDaytransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Notif $notif)
    {
        return view('dashboard.daytrans.index', [
            'notifs' => Notif::where('user_id', 2)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Notif $notif)
    {   
        // if(! Gate::allows('notif', $notif)){
        //     abort(403);
        // }

        return view('dashboard.daytrans.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'tanggal' => 'required|max:255',
            'slug' => 'required|unique:notifs',
            'category_id' => 'required',
            'image' => 'image|file|max:1024',
            'body' => 'required'
        ]);

        if( $request->file('image') ){
          $validatedData['image'] = $request->file('image')->store('notif-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Notif::create($validatedData);
        return redirect('/dashboard/notifs')->with('success', 'New notif has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminDaytrans  $adminDaytrans
     * @return \Illuminate\Http\Response
     */
    public function show(Notif $notif)
    {
        // if(! Gate::allows('notif', $notif)){
        //     abort(403);
        // }
        return view('dashboard.daytrans.show', [
            'notif' => $notif
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminDaytrans  $adminDaytrans
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminDaytrans $adminDaytrans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminDaytrans  $adminDaytrans
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminDaytrans $adminDaytrans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminDaytrans  $adminDaytrans
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminDaytrans $adminDaytrans)
    {
        //
    }
}

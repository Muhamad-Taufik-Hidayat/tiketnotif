<?php

namespace App\Http\Controllers;

use App\Models\Notif;
use App\Models\Category;
use App\Models\AdminLintas;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class AdminLintasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Notif $notif)
    {
        return view('dashboard.lintas.index', [
            'notifs' => Notif::where('user_id', 4)->get()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Notif $notif)
    {  
        return view('dashboard.lintas.create', [
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
            'tanggal' => 'required',
            'jam' => 'required',
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
        return redirect('/dashboard/lintas')->with('success', 'New notif has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdminLintas  $adminLintas
     * @return \Illuminate\Http\Response
     */
    public function show(Notif $notif)
    {
        return view('dashboard.lintas.show', [
          'notif' => $notif
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdminLintas  $adminLintas
     * @return \Illuminate\Http\Response
     */
    public function edit(Notif $notif)
    {
        return view('/dashboard.lintas.edit', [
            'notif' => $notif,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdminLintas  $adminLintas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notif $notif)
    {
      $rules = [
          'title' => 'required|max:255',
          'tanggal' => 'required',
          'jam' => 'required',
          'category_id' => 'required',
          'image' => 'image|file|max:1024',
          'body' => 'required'
      ];

      if( $request->slug != $notif->slug ){
          $rules['slug'] = 'required|unique:notifs';
      }

      $validatedData = $request->validate($rules);

      if( $request->file('image') ){
          if($request->oldImage){
              Storage::delete($request->oldImage);
          }
          $validatedData['image'] = $request->file('image')->store('notif-images');
        }

      $validatedData['user_id'] = auth()->user()->id;
      $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

      Notif::where('id', $notif->id)
          ->update($validatedData);

      return redirect('/dashboard/lintas')->with('success', 'Notif has been updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdminLintas  $adminLintas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notif $notif)
    {
      if($notif->image){
          Storage::delete($notif->image);
      }

      Notif::destroy($notif->id);
      return redirect('/dashboard/lintas')->with('success', 'Notif has been deleted');

    }
}

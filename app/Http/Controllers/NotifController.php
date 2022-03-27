<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Notif;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotifController extends Controller
{
    public function index()
    {
        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' By ' . $author->name;
        }
        return view('notifs', [
            'title' => 'All Notifs' .$title,
            'notifs' => Notif::latest()->filter(request(['search', 'category', 'author']))->paginate(7)->withQueryString()
        ]);
    }

    public function show(Notif $notif)
    {
        return view('notif', [
            'title' => 'Single Notif',
            'notif' => $notif
          ]);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemesController extends Controller
{
    //

    public function index() 
    {
       $themes = Theme::all();
       return view('theme.index')->withThemes($themes);

    }

    public function store(Request $request) 
    {
        $this->validate($request, array('name' => 'required|max:255'));
        $theme = new Theme;
        $theme->name = $request->name;
        $theme->save(); 

        Session::flash('success', 'Un nouveau thème a été ajouté avec success!');

        return redirect()->route('theme.index');
    }
}

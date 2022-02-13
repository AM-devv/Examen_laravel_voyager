<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;


class WorksController extends Controller
{
    //
    public function show (int $id){
        $work = Work::find($id);

        return view('show', compact('work'));
    }

    public function ajaxOlders(Request $request){
        $works = Work::orderBy('created_at', 'desc')->take(6)->offset($request->get('offset'))->get();
        return view('works.olders',compact('works'));
    }
}

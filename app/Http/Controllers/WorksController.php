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
}

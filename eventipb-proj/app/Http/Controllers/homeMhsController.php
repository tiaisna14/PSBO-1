<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class homeMhsController extends Controller
{
    public function index()
    {
        $data = Event::all();
        return view('homeMhs', ['events'=>$data]);
    }
    
    public function detail($idevent){
        $data = Event::find($idevent);
        return view('detail',['event'=>$data] );
    }

}

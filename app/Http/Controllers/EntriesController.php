<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entry;

class EntriesController extends Controller
{
    //entries list
        public function list()
    {
        return view('entries.list', [
            'entries' => Entry::all()
        ]);
    }
}

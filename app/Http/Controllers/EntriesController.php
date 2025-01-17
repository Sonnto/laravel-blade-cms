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

        public function addForm()
    {

        return view('entries.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'learnt_at' => 'required',
        ]);

        $entry = new Entry();
        $entry->title = $attributes['title'];
        $entry->content = $attributes['content'];
        $entry->learnt_at = $attributes['learnt_at'];
        $entry->save();

        return redirect('/console/entries/list')
            ->with('message', 'Entry has been added!');
    }

    public function editForm(Entry $entry)
    {
        return view('entries.edit', [
            'entry' => $entry,
        ]);
    }

    public function edit(Entry $entry)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'content' => 'required',
            'learnt_at' => 'required',
        ]);

        $entry->title = $attributes['title'];
        $entry->content = $attributes['content'];
        $entry->learnt_at = $attributes['learnt_at'];
        $entry->save();

        return redirect('/console/entries/list')
            ->with('message', 'Entry has been edited!');
    }

    public function delete(Entry $entry)
    {

        if($entry->image)
        {
            Storage::delete($entry->image);
        }
        
        $entry->delete();
        
        return redirect('/console/entries/list')
            ->with('message', 'Entry has been deleted!');        
    }
}

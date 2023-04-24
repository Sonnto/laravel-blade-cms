<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Models\Employment;
use Illuminate\Support\Carbon;

class EmploymentsController extends Controller
{
    //employments list
        public function list()
    {
        return view('employments.list', [
            'employments' => Employment::all()->map(function ($employments) {
                $endDate = $employments->ended_at ? Carbon::parse($employments->ended_at)->format('M. Y') : 'Present';
                return $employments->setAttribute('ended_at', $endDate);
            })
        ]);
    }

        public function addForm()
    {

        return view('employments.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'employer' => 'required',
            'location' => 'required',
            'started_at' => 'required',
            'ended_at' => 'nullable|date',
            'content' => 'required',
        ]);

        $employment = new Employment();
        $employment->title = $attributes['title'];
        $employment->employer = $attributes['employer'];
        $employment->location = $attributes['location'];
        $employment->started_at = $attributes['started_at'];
        $employment->ended_at = $attributes['ended_at'];
        $employment->content = $attributes['content'];
        $employment->save();

        return redirect('/console/employments/list')
            ->with('message', 'Employment has been added!');
    }

    public function editForm(Employment $employment)
    {
        return view('employments.edit', [
            'employment' => $employment,
        ]);
    }

    public function edit(Employment $employment)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'employer' => 'required',
            'location' => 'required',
            'started_at' => 'required',
            'ended_at' => 'nullable|date',
            'content' => 'required',
        ]);

        $employment->title = $attributes['title'];
        $employment->employer = $attributes['employer'];
        $employment->location = $attributes['location'];
        $employment->started_at = $attributes['started_at'];
        $employment->ended_at = $attributes['ended_at'];
        $employment->content = $attributes['content'];
        $employment->save();

        return redirect('/console/employments/list')
            ->with('message', 'Employment has been edited!');
    }

    public function delete(Employment $employment)
    {

        if($employment->image)
        {
            Storage::delete($employment->image);
        }
        
        $employment->delete();
        
        return redirect('/console/employments/list')
            ->with('message', 'Employment has been deleted!');        
    }
}

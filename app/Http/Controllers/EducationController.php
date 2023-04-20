<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use Illuminate\Support\Carbon;

class EducationController extends Controller
{
    //education list
        public function list()
    {
        return view('education.list', [
            'education' => Education::all()->map(function ($education) {
                $endDate = $education->ended_at ? Carbon::parse($education->ended_at)->format('M. Y') : 'Present';
                return $education->setAttribute('ended_at', $endDate);
            })
        ]);
    }

        public function addForm()
    {

        return view('education.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'institute' => 'required',
            'qualification' => 'required',
            'location' => 'required',
            'started_at' => 'required',
            'ended_at' => 'nullable|date',
            'content' => 'required',
        ]);

        $education = new Education();
        $education->institute = $attributes['institute'];
        $education->qualification = $attributes['qualification'];
        $education->location = $attributes['location'];
        $education->started_at = $attributes['started_at'];
        $education->ended_at = $attributes['ended_at'];
        $education->content = $attributes['content'];
        $employment->user_id = Auth::user()->id;
        $education->save();

        return redirect('/console/education/list')
            ->with('message', 'Education has been added!');
    }

    public function editForm(Education $education)
    {
        return view('education.edit', [
            'education' => $education,
        ]);
    }

    public function edit(Education $education)
    {

        $attributes = request()->validate([
            'institute' => 'required',
            'qualification' => 'required',
            'location' => 'required',
            'started_at' => 'required',
            'ended_at' => 'nullable|date',
            'content' => 'required',
        ]);

        $education->institute = $attributes['institute'];
        $education->qualification = $attributes['qualification'];
        $education->location = $attributes['location'];
        $education->started_at = $attributes['started_at'];
        $education->ended_at = $attributes['ended_at'];
        $education->content = $attributes['content'];
        $education->save();

        return redirect('/console/education/list')
            ->with('message', 'Education has been edited!');
    }

    public function delete(Education $education)
    {

        if($education->image)
        {
            Storage::delete($education->image);
        }
        
        $education->delete();
        
        return redirect('/console/education/list')
            ->with('message', 'Education has been deleted!');        
    }
}

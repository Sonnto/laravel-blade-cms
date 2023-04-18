<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationController extends Controller
{
    //education list
        public function list()
    {
        return view('education.list', [
            'education' => Education::all()
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
            'started_at' => 'required',
            'ended_at' => 'requried',
            'content' => 'required',
        ]);

        $education = new Education();
        $education->institute = $attributes['institute'];
        $education->qualification = $attributes['qualification'];
        $education->started_at = $attributes['started_at'];
        $education->ended_at = $attributes['ended_at'];
        $education->content = $attributes['content'];
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
            'started_at' => 'required',
            'ended_at' => 'requried',
            'content' => 'required',
        ]);

        $education->institute = $attributes['institute'];
        $education->qualification = $attributes['qualification'];
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

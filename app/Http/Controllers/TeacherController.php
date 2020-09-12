<?php

namespace App\Http\Controllers;

use App\Http\Requests\TeacherRequest;
use App\teacher;
use Session;
use App\State;
use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function saveteacher(TeacherRequest $request)
    {

        $teacher = new Teacher();
        $teacher->name = $request->teachername;
        $teacher->email = $request->teacheremail;
        $teacher->mobileno = $request->mobileno;
        $teacher->entity = $request->entityvalue;
        $teacher->institutionname = $request->institutionname;
        $teacher->certificationlevel = $request->selectlevel;
        $teacher->state = $request->state;
        $teacher->city = $request->city;
        $teacher->save();
        //dd($data['teacher'][0]->id);
        Session::flash('flash_message', 'Well done! You successfully Added the Teacher');
        Session::flash('flash_type', 'success');
        return back();
    }
    public function teachers()
    {
        // $data = Teacher::all();
        // dd($data);
        return view('teacher')->with('data', teacher::all());
    }
    public function registerteacher()
    {
        $data['state'] = State::where('country_id', 101)->get();
        return view('registerteacher')->with($data);
    }
}

<?php

namespace App\Http\Controllers\products;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\State;


class StudentSelfLearningController extends Controller
{
    public function index()
    {
        $states = State::where('country_id', 101)->get();
        return view('website.products.self-learning-form', compact('states'));
    }
    public function show()
    {
        $data['contact'] = Contact::where('requestType','student self learning product demo')->get();

        return view('backend.products.StudentSelf-Learning')->with($data);
    }
}

<?php

namespace App\Http\Controllers\products;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\State;


class VirtualClassroomController extends Controller
{
    public function index()
    {
        $states = State::where('country_id', 101)->get();
        return view('website.products.virtual-classroom-form', compact('states'));
    }
    public function show()
    {
        $data['contact'] = Contact::where('requestType','virtual classroom product demo')->get();

        return view('backend.products.VirtualClassroom')->with($data);
    }
}

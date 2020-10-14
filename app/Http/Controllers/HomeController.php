<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Contact;
use App\Country;
use App\State;
use App\City;
use Session;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function savecontact(Request $request)
    {

        $contact                  = new Contact();
        $contact->name            = $request->contactname;
        $contact->email           = $request->contactemail;
        $contact->mobileno        = $request->mobileno;
        $contact->entity          = $request->entityvalue;
        $contact->institutionname = $request->institutionname;
        $contact->requestType     = $request->requestType;
        $contact->certificate     = $request->selectlevel;
        $contact->qualification   = $request->qualification;
        $contact->child_age       = $request->age;
        $contact->city            = $request->city;
        $contact->state           = $request->state;
        $contact->stream          = $request->stream;
        $contact->save();
        $details = [
            'name' => $request->contactname,
            'title' => 'Mail from e-EdPort.com',
            'body' => 'Thank You For Contacting Us, Our Team Member will Contact You Shortly'
        ];
        //Mail::to($request->contactemail)->send(new \App\Mail\ContactEmail($details));
        Session::flash('flash_message', 'Thank You! Our Team Will Reach Out Soon');
        Session::flash('flash_type', 'success');
        return redirect()->route('freecall');
    }
    public function getcity(Request $request)
    {
        $city = City::where('state_id', trim($request->state_id))->get();
        echo json_encode($city);
        exit;
    }
    public function saveshow()
    {
        $data['state'] = State::where('country_id', 101)->get();
        return view('contantform')->with($data);
    }
}

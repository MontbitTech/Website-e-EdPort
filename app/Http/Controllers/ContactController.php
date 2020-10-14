<?php

namespace App\Http\Controllers;

use App\Contact;
use App\State;
use App\City;
use Illuminate\Http\Request;
use App\Http\Requests\SendmailRequest;
use Illuminate\Support\Facades\Mail;
use Session;

class ContactController extends Controller
{

    public function contacts()
    {
        $data['contact'] = Contact::latest()->get();

        return view('contact')->with($data);
    }
    public function updatecontactstatus(Request $request)
    {
        $contact = Contact::find($request->contact_id);
        $contact->status = $request->contact_status;
        $contact->save();
        Session::flash('flash_message', 'Well done! You successfully Update the Contact Status');
        Session::flash('flash_type', 'success');

        return back();
    }
    public function entitymail(Request $request)
    {
        $contact = new Contact;
        if (!empty($request->entity)) {
            $contact = $contact->where('entity', trim($request->entity));
        }
        if (!empty($request->institutionname)) {
            $contact = $contact->where('institutionname', trim($request->institutionname));
        }
        if (!empty($request->status)) {
            $contact = $contact->where('status', trim($request->status));
        }
        if (!empty($request->city)) {
            $contact = $contact->where('city', trim($request->city));
        }
        if (!empty($request->state)) {
            $contact = $contact->where('state', trim($request->state));
        }

        //   dd($contact);
        echo json_encode($contact->get());
        exit;
    }
    public function sendmail(SendmailRequest $request)
    {
        $image = $request->file('attachment');
        $details = [
            'attachment' => $image,
            'subject' => $request->subject,
            'message' => $request->message
        ];
        //dd($details);
        foreach ($request->mailto as $recipient) {
            Mail::to($recipient)->send(new \App\Mail\SendEmail($details));
        }
        Session::flash('flash_message', 'Thank You! Our Team Will Reach Out Soon');
        Session::flash('flash_type', 'success');

        return back();
    }
    public function showcity(Request $request)
    {
        $getdata   = Contact::with('getcity')->where("state", $request->state)->get();
        return response()->json($getdata);
    }
    public function edit($id)
    {
        $contact = Contact::findorFail($id);

        return view('edit', compact('contact'));
    }
    public function update(Request $request, $id)
    {
        $contact =  Contact::findorFail($id);
        $contact->name = $request->contactname;
        $contact->email = $request->contactemail;
        $contact->mobileno = $request->mobileno;
        $contact->institutionname = $request->institutionname;
        $contact->qualification = $request->qualification;
        $contact->child_age  = $request->age;
        $contact->certificate  = $request->certificate;
        $contact->save();
        Session::flash('flash_message', 'successfully updated User Detail');
        Session::flash('flash_type', 'success');
        return redirect()->route('contacts');
    }
    public function delete($id)
    {
        $contact = Contact::findorFail($id);
        $contact->delete();
        Session::flash('flash_message', 'successfully delete User detail');
        Session::flash('flash_type', 'success');
        return back()->with('message', "delete");
    }
}

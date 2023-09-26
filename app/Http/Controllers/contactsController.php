<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactsController extends Controller
{
    //show all data
    public function show(){
          $data = contact::all();
        return view('admin/contacts', ['contacts' => $data]);
    }


//save contact data
     public function submitForm(Request $request)
    {
        // Validate the form data
         $validatedData = $request->validate([
           'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

          // Save the data to the database
        $contact = new contact();
        $contact->name = $validatedData['name'];
        $contact->email = $validatedData['email'];
        $contact->phone = $validatedData['phone'];
        $contact->message = $validatedData['message'];
      
        $contact->save();

  
          if($contact){
             // Redirect back to the contact form with a success message
        return redirect()->back()->with('success', 'Your message has been submitted successfully!');

          }else{
             return redirect()->back()->with('error', 'Something Went wrong. Try again later.');

          }
       
    }

//deleete contact
      public function destroy(contact $contact)
    {
        // Delete the student from the database
        $contact->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('all.contacts')->with('success', 'Contact deleted successfully.');
    }
}

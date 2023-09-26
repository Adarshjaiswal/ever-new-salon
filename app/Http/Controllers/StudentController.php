<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    //view of Add student page
    public function addstudent(){
        return view('admin/addstudent');
    }

    //show certificate page
       public function showcertpage(){
        return view('frontend/certificate');
    }
    //store data of students
     public function savestudent(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'rollnumber' => 'required|numeric',
            'fullname' => 'required|string',
            'fathersname' => 'required|string',
            'mothersname' => 'required|string',
            'adhaar' => 'required|mimes:jpeg,png,jpg,pdf',
            'qualification' => 'required|string',
            'phonenumber' => 'required|string',
            'course' => 'required|string',
            'addmissionfrom' => 'required|date',
            'addmissionupto' => 'required|date',
            'address' => 'required|string',
        ]);

        // Save the data to the database
        $student = new student();
        $student->rollnumber = $validatedData['rollnumber'];
        $student->fullname = $validatedData['fullname'];
        $student->fathersname = $validatedData['fathersname'];
        $student->mothersname = $validatedData['mothersname'];
        // Save the uploaded file and store the path in the database
        if ($request->hasFile('adhaar')) {
             $file=$request->file('adhaar');
     $extension=$file->getClientOriginalExtension();
     $filename=time().'.'.$extension;
     $file-> move(public_path('public/adhaar'), $filename);
      $filepath = url('public/adhaar/' . $filename);
            $student->adhaar = $filepath;;
        }
        $student->qualification = $validatedData['qualification'];
        $student->phonenumber = $validatedData['phonenumber'];
        $student->course = $validatedData['course'];
        $student->addmissionfrom = $validatedData['addmissionfrom'];
        $student->addmissionupto = $validatedData['addmissionupto'];
        $student->address = $validatedData['address'];
        $student->save();

        // Redirect or return a response
        // You can customize this based on your application's needs
        return redirect()->back()->with('success', 'Student added successfully!');
    }

    //show all student data
    public function allstudent(){
        $data = student::all();
        return view('admin/allstudent', ['students' => $data]);
    }

     public function destroy(student $student)
    {
        // Delete the student from the database
        $student->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('all.student')->with('success', 'Student deleted successfully.');
    }
     public function edit($student)
    {
        // Fetch the student from the database by ID
        $student = student::find($student);
   
        // Pass the student data to the edit view
        return view('admin/editstudent', ['student' => $student]);
    }

        public function update(Request $request, $id)
    {
          $validatedData = $request->validate([
            'rollnumber' => 'required|numeric',
            'fullname' => 'required|string',
            'fathersname' => 'required|string',
            'mothersname' => 'required|string',
            'adhaar' => 'mimes:jpeg,png,jpg,pdf',
            'qualification' => 'required|string',
            'phonenumber' => 'required|string',
            'course' => 'required|string',
            'addmissionfrom' => 'required|date',
            'addmissionupto' => 'required|date',
            'address' => 'required|string',
        ]);

         $student = student::find($id);
        // Update the student data
        $student->rollnumber = $validatedData['rollnumber'];
        $student->fullname = $validatedData['fullname'];
        $student->fathersname = $validatedData['fathersname'];
        $student->mothersname = $validatedData['mothersname'];
        // Save the uploaded file and store the path in the database
        if ($request->hasFile('adhaar')) {
             $file=$request->file('adhaar');
     $extension=$file->getClientOriginalExtension();
     $filename=time().'.'.$extension;
     $file-> move(public_path('public/adhaar'), $filename);
      $filepath = url('public/adhaar/' . $filename);
            $student->adhaar = $filepath;;
        }
        $student->qualification = $validatedData['qualification'];
        $student->phonenumber = $validatedData['phonenumber'];
        $student->course = $validatedData['course'];
        $student->addmissionfrom = $validatedData['addmissionfrom'];
        $student->addmissionupto = $validatedData['addmissionupto'];
        $student->address = $validatedData['address'];
        $student->save();


        // Redirect back to the index page with a success message
        return redirect()->route('all.student')->with('success', 'Student data updated successfully');
    }


    // certificate check
     public function checkcertificate(Request $request)
    {
         $validatedData = $request->validate([
            'rollnumber' => 'required|numeric',
          
        ]);
        $rollNumber = $validatedData['rollnumber'];
        
        // Find the student based on the roll number
        $student = student::where('rollnumber', $rollNumber)->first();
        
        if ($student) {
            // Student found, show the details
           return response()->view('frontend.certificatedetails', ['student' => $student])->header('Content-Type', 'text/html')->header('target', '_blank');

        } else {
            // Student not found, show an error message
            return back()->with('error', 'Student not found.');
        }
    }
}

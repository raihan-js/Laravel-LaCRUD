<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeStudentMail;

class StudentController extends Controller
{
    public function index()
    {
        //You can also use all() and latest() for order
        $students = Student::latest()->get();
        return view('admin.student.index', [
            'students'  => $students,
        ]);
    }

    public function create()
    {
        return view('admin.student.create');
    }


    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.student.edit', [
            'stu' => $student,
            'courses'   => ['Solid js', 'React', 'Remix', 'Vite js'],
        ]);
    }


    public function show($id)
    {
        $student = Student::findOrFail($id);
        return view('admin.student.show', [
            'stu' => $student,
        ]);
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:students',
            'phone' => 'required|unique:students',
            'dept' => 'required',



        ], [
            //Custom validation messages
            'name.required'     => 'Name is required ',
            'dept.required'     => 'The department field is required! ',


        ]);

        //photo upload process
        if ($request->hasFile('photo')) {
            $uploaded_file = $request->file('photo');
            $file_name = md5(time() . rand()) . '.' . $uploaded_file->clientExtension();
            $uploaded_file->move(public_path('storage/photos/'), $file_name);
        } else {
            $file_name = null;
        }




        //send data to database
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'department' => $request->dept,

            'photo'     => $file_name,
            'gender'    => $request->gender,
            'courses'   => json_encode($request->course),

        ]);

        //mail for welcoming
        /*$data = [
            'name'      => $request-> name,
            'email'      => $request-> email,

        ];
        Mail::to($request->email)->send(new WelcomeStudentMail($data));*/



        //return back
        return back()->with('success', 'Student added successfully');
    }

    //student delete function
    public function destroy($id)
    {
        $delete_student = Student::findOrFail($id);
        $delete_student->delete();

        return back()->with('success', 'Student deleted successfully');
    }

    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|',
            'dept' => 'required',


        ], [
            //Custom validation messages
            'name.required'     => 'We don\'t know your name! ',
            'dept.required'     => 'The department field is required! ',

        ]);


        $update_data = Student::findOrFail($id);


        if ($request->hasFile('new_photo')) {
            $uploaded_file = $request->file('new_photo');
            $file_name = md5(time() . rand()) . '.' . $uploaded_file->clientExtension();
            $uploaded_file->move(public_path('storage/photos/'), $file_name);

            // delete old photo
            // unlink('storage/photos/' . $request->old_photo);
        } else {
            $file_name = $request->old_photo;
        }


        $update_data->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'department' => $request->dept,
            'gender'    => $request->gender,
            'courses'   => json_encode($request->course),
            'photo'     => $file_name,
        ]);
        return back()->with('success', 'Updated Successfully');
    }
}

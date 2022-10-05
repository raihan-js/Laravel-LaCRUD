<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $teachers = Teacher::latest()->get(); //add paginate() for pagination
        return view('admin.teacher.index', [
            'teachers'  => $teachers,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:teachers',
            'phone' => 'required|unique:teachers',
        ], [
            //Custom validation messages
            'name.required'     => 'We don\'t know your name! ',
        ]);

        //photo upload process
        if ($request->hasFile('photo')) {
            $uploaded_file = $request->file('photo');
            $file_name = md5(time() . rand()) . '.' . $uploaded_file->clientExtension();
            $uploaded_file->move(public_path('storage/photos/teachers'), $file_name);
        } else {
            $file_name = null;
        }


        //Send data to database via Teacher Model

        Teacher::create([
            'name'  => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'photo' => $file_name,
        ]);

        return back()->with('success', 'Teacher added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teacher.show', [
            'teacher' => $teacher,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|',


        ], [
            //Custom validation messages
            'name.required'     => 'We don\'t know your name! ',

        ]);

        $update_data = Teacher::findOrFail($id);


        if ($request->hasFile('new_photo')) {
            $uploaded_file = $request->file('new_photo');
            $file_name = md5(time() . rand()) . '.' . $uploaded_file->clientExtension();
            $uploaded_file->move(public_path('storage/photos/teachers'), $file_name);

            // delete old photo
            // unlink('storage/photos/' . $request->old_photo);
        } else {
            $file_name = $request->old_photo;
        }


        $update_data->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'photo'     => $file_name,
        ]);
        return back()->with('success', ' Teacher Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_teacher = Teacher::findOrFail($id);
        $delete_teacher->delete();

        return back()->with('success', 'Teacher deleted successfully');
    }
}

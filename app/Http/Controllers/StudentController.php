<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Mail;
use App\Mail\ContactMail;
use App;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edx(){
        return view('edx');
    }
    public function java(){
        return view('java');
    }
    public function index()
    {
        $students = \App\Models\Student::all();
        return view('student', ['students'=>$students, 'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = \App\Models\Student::all();
        return view('student', ['students'=>$students, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new \App\Models\Student();
        $student->cne = $request->input('cne');
        $student->firstname = $request->input('firstname');
        $student->secondname = $request->input('secondname');
        $student->age = $request->input('age');
        $student->specality = $request->input('specality');
        $student->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        $students = \App\Models\Student::all();
        return view('student', ['students'=>$students, 'student'=>$student, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = \App\Models\Student::find($id);
        $students = \App\Models\Student::all();
        return view('student', ['students'=>$students, 'student'=>$student, 'layout'=>'edit']);
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
        $student = \App\Models\Student::find($id);
        $student->cne = $request->input('cne');
        $student->firstname = $request->input('firstname');
        $student->secondname = $request->input('secondname');
        $student->age = $request->input('age');
        $student->specality = $request->input('specality');
        $student->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/');
    }
    public function contact()
    {
        $students = \App\Models\Student::all();
        return view('student', ['students'=>$students, 'layout'=>'contact']);
    }
    public function sendEmail(Request $request)
    {
        $detalis = [
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'msg'=> $request->msg,
            'image' => $request->file('image')
        ];
        Mail::to('groznyi.alik@gmail.com')->send(new ContactMail($detalis));
        return back()->with('message sent', 'Your information has been sent successfully!');
    }

    public function changeLocale($locale)
    {
        session(['locale' => $locale]);
        App::setLocale($locale);
        // $currentLocale = App::getLocale();
        // dd($currentLocale);
        return redirect()->back();
    }
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
}

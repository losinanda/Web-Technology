<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Form;
use Illuminate\Http\Request;

class BackpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Doctor::paginate(5);
        return view('backpage.doctor', ['doctor' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backpage.add_doctor');
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
            // 'doctor_img'     => 'required',
            'doctor_name'   => 'required',
            'specialization'   => 'required',
            'doctor_desc'     => 'required',
        ]);

        //upload image
        // $image = $request->file('doctor_img')->store('assets');
        // $image->move('public/assets', $image);
        // dd($image);
        $data = array_merge(
            // ['doctor_img' => $image],
        $request->all());
        //create doctor
        
        // Doctor::create([
        //     'doctor_img'     => $image,
        //     'doctor_name'     => $request->doctor_name,
        //     'specialization'   => $request->specialiation,
        //     'doctor_desc'   => $request->doctor_desc,
        // ]);
        Doctor::create($data);

        //redirect to index
        return redirect()->route('admin_listdoctor')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data   = Doctor::where('id_doctor',$id)->first();
        return view('backpage.edit_doctor')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data           = Doctor::find($id);
        $data->doctor_name    = $request->doctor_name;
        $data->specialization  = $request->specialization;
        $data->doctor_desc = $request->doctor_desc;
        $data->save();
        // $data=Doctor::where('id_doctor', $doctor->id_doctor)->update([
        //     // 'image'     => $image->hashName(),
        //     // 'doctor_img'     => $image,
        //     'doctor_name'     => $request->doctor_name,
        //     'specialization'   => $request->specialiation,
        //     'doctor_desc'   => $request->doctor_desc,
        // ]);
        return redirect()->route('admin_listdoctor');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $data = Doctor::where('id_doctor', $id)->delete();
    return redirect()->route('admin_listdoctor');
    }
}
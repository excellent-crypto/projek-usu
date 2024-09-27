<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Worker::all();
        return view('admin/index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
$request->validate([
    'name'=>'required|string|max:255',
    'email' => 'required|unique:workers,email',
    'address' => 'required',
    'jobTitle' => 'required'
]);
// // sekumpulan data yg ingin di create
$worker = [
    'name' => $request->name,
    'email' => $request->email,
    'address' => $request->address,
    'jobTitle' => $request->jobTitle
];
// Proses Create
Worker::create($worker);
return redirect('/admin')->with('berhasil','Anda berhasil menambah Data Karyawan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // menampilkan dan mengantarkan datanya
      $data=  Worker::where('id', $id)->first();
        return view('admin/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validasi edit
        $request->validate([
            'name'=>'required|string|max:255',
            'email' => 'required|unique:workers,email',
            'address' => 'required',
            'jobTitle' => 'required'
        ]);
//sekumpulan data yng ingin di edit
        $dataa = [
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'jobTitle' =>$request->jobTitle
        ];
        // proses meng update

        Worker::where('id', $id)->update($dataa);
        return redirect()->to('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ///proses delete
        Worker::where('id',$id)->delete();
        return redirect()->to('/admin');
    }
}

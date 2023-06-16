<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home', ['key'=>'Home']);
    }
    
    public function profile()
    {
        return view('profile',['key'=>'Profile']);
    }
    
    public function student()
    {
       
        // $mhs = Mahasiswa::orderBy('id','desc')->paginate(10);
        $mhs = Mahasiswa::paginate(10);
        return view('student',['key'=>'Student', 'mhs'=>$mhs]);
    }

    public function search(Request $request)
    {
        $cari = $request->q;
        $pilih = $request->pilihan;
        // $mhs = Mahasiswa::where($pilih, 'like', "%".$cari.'%')->orderBy('id','desc')->paginate(5);
        $mhs = Mahasiswa::where($pilih, 'like', "%".$cari.'%')->paginate(5);
        $mhs->appends($request->all());
        return view('student',['key'=>'Student','mhs' => $mhs]);
    }

    public function formadd()
    {
        return view('formadd',['key'=>'Student']);
    }

    public function save(Request $request)
    {
        $minat = implode(",",$request->get('minat'));
        Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $minat
            
        ]);
        return redirect('student')->with('flash', "Data Berhasil Disimpan");
    }
    
    public function formedit($id)
    {
        $mhs = Mahasiswa::find($id);

        return view('formedit',['key'=>'Student','mhs'=>$mhs]);   
    }

    public function update($id, Request $request)
    {
        $minat = implode(',',$request->minat);
        $mhs = Mahasiswa::find($id);
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->gender = $request->gender;
        $mhs->prodi = $request->prodi;
        $mhs->minat = $minat;
        $mhs->save();
        return redirect('student')->with('flash', "Data Berhasil diedit");

    }

    public function hapus($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs->delete();
        return redirect('student')->with('flash', "Data berhasil dihapus");
    }

    public function contact()
    {
        return view('contact',['key'=>'Contact']);
    }

}

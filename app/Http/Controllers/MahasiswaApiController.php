<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaApiController extends Controller
{
    public function all()
    {
        $mhs = Mahasiswa::all();
        return response()->json([
            'success' => true,
            'message' => 'Berhasil Ditampilkan',
            'data' => $mhs,
        ], 200);
    }

    public function create(Request $request)
    {
        
        $mhs = Mahasiswa::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat
        ]);


        if($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => 'Berhasil disimpan',
            ],200);
        }
        else{
            return response()->json([
                'success' => false,
                'message' => 'Gagal disimpan',
            ],401);
        }
    }

    public function update($id,Request $request)
    {
        $mhs = Mahasiswa::find($id)->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'prodi' => $request->prodi,
            'minat' => $request->minat,
        ]);

        if($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => 'berhasil diubah',
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'gagal diubah',
            ],400);
        }
    }

    public function delete($id)
    {
        $mhs = Mahasiswa::find($id);
        $mhs ->delete();

        if($mhs)
        {
            return response()->json([
                'success' => true,
                'message' => 'berhasil dihapus',
            ],200);
        }
        else
        {
            return response()->json([
                'success' => false,
                'message' => 'gagal dihapus',
            ],400);
        }
    }

    
}

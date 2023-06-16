<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class taskApiController extends Controller
{
    public function all()
    {
        $mhs = Task::all();
        return response()->json([
            'success' => true,
            'message' => 'Berhasil Ditampilkan',
            'data' => $mhs,
        ], 200);
    }

    public function create(Request $request)
    {
        
        $mhs = Task::create([
        'nama' => $request->nama,
        'judul_task' => $request->judul_task,
        'deskripsi_task' => $request->deskripsi_task
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
        $mhs = Task::find($id)->update([
            'nama' => $request->nama,
        'judul_task' => $request->judul_task,
        'deskripsi_task' => $request->deskripsi_task,
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
        $mhs = Task::find($id);
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

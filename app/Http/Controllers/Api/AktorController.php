<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\aktor;
use Illuminate\Http\Request;

class AktorController extends Controller
{
    public function index()
    {
        $aktor = aktor::latest()->get();
        $response = [
            'succes' => true,
            'messages' => 'daftar aktor',
            'data' => $aktor,
        ];
        return response()->json($response, 200);
    }

    public function store(Request $request)
    {
        $aktor = new aktor();
        $aktor->nama_aktor = $request->nama_aktor;
        $aktor->save();
        return response()->json([
            'success' => true,
            'message' => 'data berhasil di simpan',
        ], 201);
    }

    public function show($id)
    {
        $aktor = aktor::find($id);
        if ($aktor) {
            return response()->json([
                'success' => true,
                'message' => 'detail aktor di simpan',
                'data' => $aktor,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'detail aktor di simpan',
                'data' => 'data tidak ditemukan',
            ], 404);
        }
    }
    public function delete($id){
        $aktor=aktor::find($id);
        if ($aktor) {
            $aktor->delete();
            return response()->json([
                'success' => false,
                'message' => 'detail aktor di simpan',
                'data' => 'data tidak ditemukan',
            ],404);
        }
    }
}

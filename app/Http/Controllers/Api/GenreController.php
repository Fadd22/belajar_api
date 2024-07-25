<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genre = genre::latest()->get();
        $response = [
            'succes' => true,
            'messages' => 'daftar genre',
            'data' => $genre,
        ];
        return response()->json($response, 200);
    }

    public function store(Request $request)
    {
        $genre = new genre();
        $genre->nama_genre = $request->nama_genre;
        $genre->save();
        return response()->json([
            'success' => true,
            'message' => 'data berhasil di simpan',
        ], 201);
    }

    public function show($id)
    {
        $genre = genre::find($id);
        if ($genre) {
            return response()->json([
                'success' => true,
                'message' => 'detail genre di simpan',
                'data' => $genre,
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'detail genre di simpan',
                'data' => 'data tidak ditemukan',
            ], 404);
        }
    }
    public function delete($id){
        $genre=genre::find($id);
        if ($genre) {
            $genre->delete();
            return response()->json([
                'success' => false,
                'message' => 'detail genre di simpan',
                'data' => 'data tidak ditemukan',
            ],404);
        }
    }
}

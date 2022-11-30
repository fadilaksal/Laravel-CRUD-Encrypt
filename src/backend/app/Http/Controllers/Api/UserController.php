<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function getAll()
    {
        $user = User::all();

        return response()->json([
            'status' => true,
            'message' => 'Berhasil ambil data',
            'data' => $user
        ]);
    }

    public function findById($userId)
    {
        $user = User::findOrFail($userId);

        return response()->json([
            'status' => true,
            'message' => 'Berhasil ambil data',
            'data' => $user
        ]);
    }

    public function create(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'nrp' => $request->nrp,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Berhasil input data',
            'data' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name ?? $user->name;
        $user->nrp = $request->nrp ?? $user->nrp;
        $user->save();

        return response()->json([
            'status' => true,
            'message' => 'Berhasil ubah data',
            'data' => $user
        ]);
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json([
            'status' => true,
            'message' => 'Berhasil hapus data',
            'data' => null
        ]);
    }
}

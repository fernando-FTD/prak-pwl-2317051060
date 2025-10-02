<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => UserModel::with('kelas')->latest()->get(),
        ];
        return view('list_user', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Create User',
            'kelas' => Kelas::all(),
        ];
        return view('create_user', $data);
    }

    public function store(Request $request)
    {
        UserModel::create([
            'nama'     => $request->input('nama'),
            'nim'      => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user');
    }

    public function destroy($id)
    {
        $user = UserModel::findOrFail($id);
        $user->delete();
        return redirect()->to('/user')->with('success', 'User berhasil dihapus');
    }

    public function edit($id)
    {
        $user = UserModel::findOrFail($id);
        $kelas = Kelas::all();
        return view('user_edit', [
            'title' => 'Edit User',
            'user'  => $user,
            'kelas' => $kelas,
        ]);
    }

    public function update(Request $request, $id)
    {
        $user = UserModel::findOrFail($id);
        $user->update([
            'nama'     => $request->input('nama'),
            'nim'      => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);
        return redirect()->to('/user')->with('success', 'User berhasil diupdate');
    }
}
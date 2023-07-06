<?php

namespace App\Http\Controllers;

use App\Models\ControlPanel;
use App\Models\User;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('pages.user.index', [
            'users' => User::all(),
            'rooms' => Room::all(),
            'i' => ControlPanel::all()->first()
        ]);
    }

    public function pindahkan(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'room_id' => 'max:255',
        ]);

        User::where('id', $user->id)->update($validatedData);
        return redirect('/user')->with('success', 'User berhasil dipindahkan!');
    }

    public function akses(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'is_admin' => 'max:255',
        ]);

        User::where('id', $user->id)->update($validatedData);
        return redirect('/user')->with('success', 'User Akses berhasil diubah!');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'room_id' => 'nullable'
            // 'room_id' => 'nullable|exists:rooms,id',
        ]);

        $validatedData['password'] = Hash::make($request['password']);

        User::create($validatedData);

        return redirect('/user')->with('success', 'User created successfully.');
    }

    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
        ]);

        User::where('id', $user->id)->update($validatedData);
        return redirect('/user')->with('success', 'User berhasil diperbarui!');
    }

    public function updatePassword(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed',
        ]);

        if (Hash::check($request->current_password, $user->password)) {
            $user->update(['password' => Hash::make($validatedData['password'])]);

            return redirect('user')->with('success', 'Password berhasil diperbarui.');
        } else {
            return redirect('user')->with('error', 'Password lama tidak cocok.');
            // return back()->withErrors(['current_password' => 'Password lama tidak cocok.'])->withInput();
        }
    }

    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/user')->with('success', 'user berhasil dihapus!');
    }
}

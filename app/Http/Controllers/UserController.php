<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserCategory;
use App\Models\Room;
use App\Models\TemplateUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.user.index', [
            'users' => User::all(),
            'rooms' => Room::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pindahkan(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'room_id' => 'max:255',
        ]);

        User::where('id', $user->id)->update($validatedData);
        return redirect('/user')->with('success', 'User berhasil dipindahkan!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'room_id' => 'nullable',
            // 'room_id' => 'nullable|exists:rooms,id',
        ]);

        $validatedData['password'] = Hash::make($request['password']);

        // return $validatedData;
        User::create($validatedData);

        return redirect('/user')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        User::destroy($user->id);
        return redirect('/user')->with('success', 'user berhasil dihapus!');
    }
}

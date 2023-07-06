<?php

namespace App\Http\Controllers;

use App\Models\ControlPanel;
use Illuminate\Http\Request;

class ControlPanelController extends Controller
{
    public function index()
    {
        return view('pages.cpanel.index', [
            'cpanels' => ControlPanel::all(),
            'i' => ControlPanel::all()->first()
        ]);
    }

    public function update(Request $request, ControlPanel $cpanel)
    {
        $validatedData = $request->validate([
            'instance_name' => 'max:255|required',
            'instance_code' => 'max:255|required',
            'application_name' => 'max:255|required',
        ]);

        ControlPanel::where('id', $cpanel->id)->update($validatedData);
        return redirect('/cpanel')->with('success', 'Control Panel berhasil diubah!');
    }
}

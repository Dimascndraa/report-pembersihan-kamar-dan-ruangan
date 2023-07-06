<?php

namespace App\Http\Controllers\DefaultController;

use App\Http\Controllers\Controller;
use App\Models\ControlPanel;
use Illuminate\Http\Request;

class DatatablesController extends Controller
{
    public function datatables_basic()
    {
        return view('pages.default-menu.datatables.datatables_basic', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function datatables_autofill()
    {
        return view('pages.default-menu.datatables.datatables_autofill', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function datatables_buttons()
    {
        return view('pages.default-menu.datatables.datatables_buttons', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function datatables_export()
    {
        return view('pages.default-menu.datatables.datatables_export', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function datatables_colreorder()
    {
        return view('pages.default-menu.datatables.datatables_colreorder', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function datatables_columnfilter()
    {
        return view('pages.default-menu.datatables.datatables_columnfilter', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function datatables_fixedcolumns()
    {
        return view('pages.default-menu.datatables.datatables_fixedcolumns', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function datatables_fixedheader()
    {
        return view('pages.default-menu.datatables.datatables_fixedheader', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function datatables_keytable()
    {
        return view('pages.default-menu.datatables.datatables_keytable', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function datatables_responsive()
    {
        return view('pages.default-menu.datatables.datatables_responsive', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function datatables_responsive_alt()
    {
        return view('pages.default-menu.datatables.datatables_responsive_alt', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function datatables_rowgroup()
    {
        return view('pages.default-menu.datatables.datatables_rowgroup', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function datatables_rowreorder()
    {
        return view('pages.default-menu.datatables.datatables_rowreorder', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function datatables_scroller()
    {
        return view('pages.default-menu.datatables.datatables_scroller', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function datatables_select()
    {
        return view('pages.default-menu.datatables.datatables_select', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function datatables_alteditor()
    {
        return view('pages.default-menu.datatables.datatables_alteditor', [
            'i' => ControlPanel::all()->first()
        ]);
    }
}

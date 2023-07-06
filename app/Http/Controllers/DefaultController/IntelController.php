<?php

namespace App\Http\Controllers\DefaultController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ControlPanel;

class IntelController extends Controller
{
    public function index()
    {
        return view('pages.default-menu.intel.intel_dashboard');
    }
    public function dashboard()
    {
        return view('pages.default-menu.intel.intel_analytics_dashboard', [
            'i' => ControlPanel::all()->first()
        ]);
    }
    public function intel_marketing_dashboard()
    {
        return view('pages.default-menu.intel.intel_marketing_dashboard');
    }
    public function intel_introduction()
    {
        return view('pages.default-menu.intel.intel_introduction');
    }
    public function intel_privacy()
    {
        return view('pages.default-menu.intel.intel_privacy');
    }
    public function intel_build_notes()
    {
        return view('pages.default-menu.intel.intel_build_notes');
    }
}

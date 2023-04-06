<?php

namespace App\Http\Controllers\DefaultController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationsController extends Controller
{
    public function notifications_sweetalert2()
    {
        return view('pages.default-menu.notifications.notifications_sweetalert2');
    }
    public function notifications_toastr()
    {
        return view('pages.default-menu.notifications.notifications_toastr');
    }
}

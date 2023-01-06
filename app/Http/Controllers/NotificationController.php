<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    
    public function index()
    {
        return Notification::all();
    }


    public function store(Request $request)
    {
        //
    }

    public function show(Notification $notification)
    {
        //
    }

    public function update(Request $request, Notification $notification)
    {
        //
    }

    public function destroy(Notification $notification)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetingController extends Controller
{
    function AddMeetingBooking(Request $var)
    {
        print_r($var->input();)
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Country;
use App\Models\Post;
use App\Models\Setting;
use App\Models\State;
use App\Models\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    function index()
    {
        $motors_count = 103;
        $motors_rent_value = 10000;
        $users_count = User::where("role" , "user")->count();
        return view("admin.home.index", compact(
            "motors_count","motors_rent_value","users_count"
        ));
    }


}

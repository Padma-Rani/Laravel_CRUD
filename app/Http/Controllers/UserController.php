<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(Person::all());
    }
}

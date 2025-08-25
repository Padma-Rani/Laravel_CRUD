<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return response()->json(csrf_token());
    }

    public function store(Request $req)
    {
        $validated = $req->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            // 'password' => 'required|string',
        ]);

        $person = Person::create($validated);
        return response()->json($person);
    }
}

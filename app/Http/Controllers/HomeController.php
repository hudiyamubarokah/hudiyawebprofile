<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function Home()
    {
        // Ambil data user
        $users = User::all(); // Sesuaikan dengan model dan kolom yang sesuai
        $skill = Skill::all();
        // Kirim data ke view portofolio
        return view('Home', compact('users','skill'));
    }
}

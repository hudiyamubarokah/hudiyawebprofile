<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;

class AdminSkillController extends Controller
{
    //
    public function show()
{
    $skill = Skill::orderBy('id', 'asc')->get(); // Mengambil semua skill
    return view('admin.skill.show', compact('skill')); // Mengirim data skills ke tampilan
}
    // public function show
    // {
    //     $skill = Skill::findOrFail;
    //     return view('skills.show', compact('skill'));
    // }
    // public function show()
    // {
    //     $skills = Skill::all();
    //     return view('skills.Home', compact('skills'));
    // }

    public function create()
    {
        return view('admin.skill.create');
    }

    public function store(Request $request)
    {
        // $this->$request->validate([
        //     'nama_skill' => 'required',
        //     'deskripsi' => 'required',
        // ]);

       $skill = Skill::create([
            
            'nama_skill' => $request->nama_skill,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('admin_skill_show')->with('success', 'data berhasil ditambahkan');

    }

    public function delete($id)
    {
        Skill::find($id)->delete();
        return redirect()->route('admin_skill_show')->with('success', 'Data berhasil dihapus');
    }
    
}

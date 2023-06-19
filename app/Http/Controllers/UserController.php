<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show ($id)
    {
        $user = User::findOrFail($id);
        $profile = $user->profile;
        
        return view('user.profile', compact('user', 'profile'));
    }

    public function edit ($id)
    {
        $user = User::findOrFail($id);
        $profile = $user->profile;
        
        return view('user.edit', compact('user', 'profile'));
    }
    
    public function update (Request $request, $id)
    {
        $user = User::findOrFail($id);
        $profile = $user->profile;
        
        $user->update([
            'name' => $request->input('name')
        ]);
        
        $profile->update([
            'umur' => $request->input('umur'),
            'bio' => $request->input('bio'),
            'alamat' => $request->input('alamat')
        ]);
        
        return redirect()->route('user.show', ['id' => $user->id])->with('success', 'Profil berhasil diperbarui');
    }
}
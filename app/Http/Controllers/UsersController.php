<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UsersController extends Controller
{
    public function edit($id) {
        $user = User::find($id);
        if($user->id === \Auth::id()) {
            return view('users.edit', [
            'user' => $user,
            ]);
        } else {
            return view('/');
        }
        
    }
    
    public function update(Request $reqest, $id) {
        $data = [];
        $user = User::find($id);
        $user->update([
            'name' => $reqest->name,
            'number' => $reqest->number,
        ]);
        
        return view('index', [
            'user' => $user,
        ]);
    }
    
    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return redirect('/');
    }
}

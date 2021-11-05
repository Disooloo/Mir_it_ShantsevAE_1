<?php

namespace App\Http\Controllers;

use App\Models\model_has_roles;
use App\Models\Profiles;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ProfilesController extends Controller
{
    public function index()
    {
        return view('main.profiles.index',[
            'user' => User::all(),
        ]);
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back()->withSuccess('В разработке!');
    }

}

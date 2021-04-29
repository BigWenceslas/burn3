<?php

namespace App\Service;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class ServiceManager
{
    public function getRolesUser(){
        $roles = Role::all()->where('id','<>',1)->where('id','<>',2);
        return $roles;
    }

    public function registerUser($request)
    {
        $experience = [];
        for($i = 0; $i < count($request['debut']); $i++) {
            array_push($experience, [
                'debut' => $request['debut'][$i],
                'fin' => $request['fin'][$i],
                'description' => $request['description'][$i],
            ]);
        }
        $experience = json_encode($experience);
        $users = User::all();
        $i = 1;
        foreach ($users as $user) {
            if ($request['email'] == $user->email) {
                    $i = 0;
                    break;
            }
        }
        if ($i == 1) {
            $user = User::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'role_id'=> $request['role_id'],
                'prenom'=> $request['prenom'],
                'telephone'=> $request['telephone'],
                'date_naissance'=> $request['date_naissance'],
                'ville'=> $request['ville'],
                'date_creation'=> $request['date_creation'],
                'domaine'=> $request['domaine'],
                'num_id'=> $request['num_id'],
                'raison_sociale'=> $request['raison_sociale'],
                'boite_postale'=> $request['boite_postale'],
                'avatar' => 'users/default.png',
                'settings' => '{"locale":"fr"}',
                'exp_pro' => $experience,
                'password' => Hash::make($request['password'])
            ]);
            // Auth::guard()->login($user);
            return $user;
        }else{
            return "deja";
        }
    }

    public function activateUser($id)
    {
        return User::where('id',$id)->update(['email_verified_at'=>date('Y/m/d H:i:s')]);
    }

}

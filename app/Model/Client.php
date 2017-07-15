<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Illuminate\Support\Facades\Hash;
use DB;

class Client extends Model {

    //
    protected $table = 'fnh_client';

    public function editClient($request, $clientId) {
        $objRtoClient = Client::find($clientId);
        $name = ($request->input('name') != '') ? $request->input('name') : null;
        $username = ($request->input('username') != '') ? $request->input('username') : null;
        $phone = ($request->input('phone') != '') ? $request->input('phone') : null;
        $mobile = ($request->input('mobile') != '') ? $request->input('mobile') : null;

        $objRtoClient->name = $name;
        $objRtoClient->username = $username;
        $objRtoClient->phone = $phone;
        $objRtoClient->mobile = $mobile;
        $objRtoClient->save();
    }

    public function editPassword($request, $clientId) {
        $objRtoClient = Client::find($clientId);
        $newpassword = ($request->input('new_password') != '') ? $request->input('new_password') : null;
        $newpass = Hash::make($newpassword);
        $objRtoClient->password = $newpass;
        $objRtoClient->save();
    }

    public function duplicateClientNameCheck($userName) {
        return $objRtoClient = Client::where('username', $userName)->get();
    }

    public function editUserFromTeacher($clientId, $request) {
        if (isset($clientId)) {
            $objRtoClient = Client::find($clientId);
            $objRtoClient->name = ($request->input('first_name') != '') ? $request->input('first_name') : null;
            $objRtoClient->email = ($request->input('email') != '') ? $request->input('email') : null;
            $objRtoClient->phone = ($request->input('phone') != '') ? $request->input('phone') : null;
            $objRtoClient->mobile = ($request->input('mobile') != '') ? $request->input('mobile') : null;
            $objRtoClient->status = ($request->input('status') != '') ? $request->input('status') : null;
            $objRtoClient->save();
        }
    }

    public function deleteClientRecord($clientId) {
        return Client::where('id', '=', $clientId)->delete();
    }

    public function getUserDetails($clientId) {
        $objRtoClient = Client::find($clientId);
        return $objRtoClient;
    }

}
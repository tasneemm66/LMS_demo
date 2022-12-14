<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;
use Auth;

class AuthController extends Controller
{

    use GeneralTrait;
        //JWT json web tokens



    public function login(Request $request)
    {

        try {
            $rules = [
                "email" => "required",
                "password" => "required"

            ];

            $validator = Validator::make($request->all(), $rules);
<<<<<<< HEAD
            
            //error validation message
=======
////////////////////////////
>>>>>>> origin/main
            if ($validator->fails()) {
                $code = $this->returnCodeAccordingToInput($validator);
                return $this->returnValidationError($code, $validator);
            }

            //login

            $credentials = $request->only(['email', 'password']);

            $token = Auth::guard('admin-api')->attempt($credentials);

            if (!$token)
                return $this->returnError('E001', 'it is not valid!');

            $admin = Auth::guard('admin-api')->user();
            $admin->api_token = $token;
            //return token
            return $this->returnData('admin', $admin);
;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;

        } catch (\Exception $ex) {
            return $this->returnError($ex->getCode(), $ex->getMessage());
        }


    }
    //Expiry Date for API-Toke
    //Add remmember Token
    //Add Captcha against rate limit
    public function logout(Request $request)
    {
        $token = $request -> header('auth-token');
        if($token){
            try {

                JWTAuth::setToken($token)->invalidate(); //logout
            }catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e){
                return  $this -> returnError('','some thing went wrongs');
            }
            return $this->returnSuccessMessage('Logged out successfully');
        }else{
            $this -> returnError('','some thing went wrongs');
        }
    }
}

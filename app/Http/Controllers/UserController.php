<?php

    namespace sarjanatani\Http\Controllers;

    use sarjanatani\User;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Support\Facades\DB;
    use sarjanatani\Http\Controllers\Controller;
    use JWTAuth;
    use Tymon\JWTAuth\Exceptions\JWTException;

    class UserController extends Controller
    {
        public function authenticate(Request $request)
        {
            $credentials = $request->only('email', 'password');
            $cek = $request->only('email');

            try {
                if (! $token = JWTAuth::attempt($credentials)) {
                    return response()->json(['code' => '400','error' => 'invalid_credentials'], 400);
                }
            } catch (JWTException $e) {
                return response()->json(['code' => '400','error' => 'could_not_create_token'], 500);
            }

            $data = DB::table('users')->select('*')->where('email',$cek)->get();
            $data = $data[0];


            return response()->json(['status' => true,'code'=>'200','data' => $data,"token" => $token]);        
        }

        public function register(Request $request)
        {
                $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
                'no_hp' => 'required|string',
            ]);

            if($validator->fails()){
                    return response()->json(['status' => false,'code'=>'400','message' => 'error cek parameter']);        
            }

            $user = User::create([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password')),
                'no_hp' => $request->get('no_hp'),
            ]);

            $token = JWTAuth::fromUser($user);
            return response()->json(['status' => true,'code'=>'200','data' => $user,"token" => $token]);        
        }

        public function getAuthenticatedUser()
            {
                    try {

                            if (! $user = JWTAuth::parseToken()->authenticate()) {
                                    return response()->json(['user_not_found'], 404);
                            }

                    } catch (Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

                            return response()->json(['token_expired'], $e->getStatusCode());

                    } catch (Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

                            return response()->json(['token_invalid'], $e->getStatusCode());

                    } catch (Tymon\JWTAuth\Exceptions\JWTException $e) {

                            return response()->json(['token_absent'], $e->getStatusCode());

                    }

                    return response()->json(compact('user'));
            }

        public function show()
        {
            return response()->json(['status' => 'success','code'=>'200', 'data' => User::all()]);        
        }

        public function all($id)
        {
            $user = User::find($id);
            if ($user) {
              return response()->json(['status' => 'success','code' => '200', 'data'=> $user]);
            }
     
            return response()->json(['status' => 'error','code' => '404', 'message' => 'Data not found'],404);
        }

}
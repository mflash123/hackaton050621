<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });



Route::resource('user', UserController::class);


Route::post('auth',function(Request $request){
    $data = $request->json()->all();

    $user = User::where('phone',$data['login'])->first();

    if($user){
        $msg = [
            'error' => 0,
            'user_id' => $user->id
        ];
        return response()->json($msg);
    } 

    $msg = [
        'error' => 1,
        'message' => 'Not authorized'
    ];
    return response()->json($msg,401);
});

Route::get('users',function(){
    $user = User::all();

    $msg = [
        'error' => 0,
        'users' => $user
    ];

    return response()->json($msg);
    
});
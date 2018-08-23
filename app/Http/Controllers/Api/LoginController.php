<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use App\Services\UserService;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function index(Request $request)
    {
        $loginNum = 0;
        try {

            $username = $request->input('username');
//            if (!$userService->userExists($username)) {
//                throw new \Exception("账号不存在，请先注册");
//            }

            $uid = User::query()
                ->where('email','=',$username)
                ->orWhere('phone','=',$username)
                ->value('id');
            $loginSumKey = 'LoginSum-'.$uid;
            $checkLoginSum = Redis::get($loginSumKey);
            $expireTime = Redis::ttl($loginSumKey);// 获取key的过期时间
            if($checkLoginSum > 3){
                if($expireTime < 540){
                    throw new \Exception("密码错误已达限制次数，请稍后再试");
                }else{
                    throw new \Exception("密码错误已超3次，请10分钟之后再试");
                }
            }

            $params = config('passport') + $request->only(['username', 'password']);
            $request->request->add($params);
            $proxy = Request::create(
                'oauth/token',
                'POST'
            );

            $response = Route::dispatch($proxy);
            $token = json_decode($response->getContent());
            if (isset($token->error)) {
                $existNum = Redis::get($loginSumKey);
                $loginNum = isset($existNum) ? $existNum+1 : $loginNum+1;
                Redis::setex($loginSumKey, 600, $loginNum);

                throw new \Exception("账号和密码不匹配，请重新输入");
            }

            // 登录时间更新，用户数据统计使用
            User::query()->where('id','=',$uid)->update(['updated_at' => Carbon::now()->toDateTimeString()]);
            return $this->responseOk('登录成功.',null,[
                'username' => hide_special_string($username),
                'token' => $token
            ]);
        } catch (\Exception $e) {
            return $this->responseError($e->getMessage());
        }
    }
}

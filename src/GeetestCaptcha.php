<?php namespace JZWeb\Geetest;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

trait GeetestCaptcha
{
    /**
     * Get geetest.
     */
    public function getGeetest()
    {
        $ip = Request::ip();
        $data = [
            'user_id' => @Auth::user() ? @Auth::user()->id : md5($ip),
            'client_type' => 'web',
            'ip_address' => $ip
        ];
        $status = Geetest::preProcess($data);
        session()->put($ip . 'gt_server', $status);
        session()->put('user_id', $data['user_id']);
        echo Geetest::getResponseStr();
    }
}
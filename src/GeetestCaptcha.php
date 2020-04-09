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
            'user_id' => 'UnLoginUser',
            'client_type' => 'web',
            'ip_address' => $ip
        ];
        Geetest::preProcess($data);

        echo Geetest::getResponseStr();
    }
}
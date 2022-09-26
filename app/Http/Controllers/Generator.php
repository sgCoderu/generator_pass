<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Generator extends Controller
{
    public function index()
    {
        return view('layouts.app');
    }

    public function generate()
    {
        $symbols_list = '';
        $symbols_type = (array) request()->post('symbols_type');
        $length = (int) request()->post('length');

        if ($symbols_type == '')
        {
            return 'Выбери символы в пароле';
        }
        if ($length == '')
        {
            return 'Выбери размер пароля';
        }
        if ($length < 6 || $length > 32)
        {
            return 'Выбери корректный размер пароля';
        }

        $number = '0123456789';
        $lower = 'qwertyuiopasdfghjklzxcvbnm';
        $upper = 'QWERTYUIOPASDFGHJKLZXCVBNM';
        $special = '!@#$%^:&*(){}[]-_=+/';

        if (in_array('1', $symbols_type))
        {
            $symbols_list .= $number;
        }
        if (in_array('2', $symbols_type))
        {
            $symbols_list .= $lower;
        }
        if (in_array('3', $symbols_type))
        {
            $symbols_list .= $upper;
        }
        if (in_array('4', $symbols_type))
        {
            $symbols_list .= $special;
        }

        return $this->random($symbols_list, $length);
    }

    private function random($symbols_list, $length)
    {
        $pass = '';
        for($i = 0; $i < $length; $i++)
        {
            $pass .= $symbols_list[rand(0, strlen($symbols_list) - 1)];
        }
        return $pass;
    }
}

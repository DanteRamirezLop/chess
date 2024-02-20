<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CommandControllers extends Controller
{
    public function listen(){
        try {
            return Artisan::call('queue:listen');
        } catch (\Throwable $th) {
        return ['error'=>'Error!'];
        }
    }
}

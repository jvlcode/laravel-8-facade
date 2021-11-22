<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Greet extends Facade{

    protected static function getFacadeAccessor()
    {
        return 'greet';
    }
}

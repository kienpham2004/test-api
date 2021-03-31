<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    // $this->comment(Inspiring::quote());

    /*$a = new stdClass();

    $c = clone $a; // tham trị
    $c = $a; // tham chiếu

    $c->test = 'ref';*/

    $b = 1;

    $c = &$b; // tham chiếu
    $c = $b; // tham trị

    $c = 2;

    dd($b, $c);

})->describe('Display an inspiring quote');

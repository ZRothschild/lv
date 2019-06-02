<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Collection;
use Illuminate\Support\HigherOrderCollectionProxy;

class UserController extends BaseController
{

    public function index()
    {
        $Collection = new Collection(['test'=>['test'=>'222']]);
        $test = new HigherOrderCollectionProxy($Collection,'filter');

        $a = $test->test->all();




        echo "<br>";
        echo "<br>";
        dump($a);
        echo "<br>";
        echo "<br>";

        $a= $Collection->count();

        dump($Collection);
        dump($test);

        return ['hello world'];
    }
}

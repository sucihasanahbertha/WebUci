<?php namespace App\Controllers;
class Helloworld extends BaseController
{
    public function index($name, $npm)
    {
        // echo $this->name;
        echo $name ."<br>";
        echo $npm ."<br>";
        // echo "hello uci";
    }

    public function show()
    {
        echo "Suci Hasanah Bertha ";
        echo "1817051003";
    }
}
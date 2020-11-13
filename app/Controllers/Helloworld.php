<?php namespace App\Controllers;


class Helloworld extends BaseController {

    
    public function index()
    {
        // echo $this->name;
        // echo $name ."<br>";
        // echo $npm ."<br>";
        // echo "Hello Uci";
        $query =  $this->db->query("SELECT * FROM users");
        $row = $query->getRow();
        dd($row);
    }

    public function show()
    {
        echo "Suci Hasanah Bertha";
        echo "1817051003";
    }

}

<?php

/**
 * Created by PhpStorm.
 * User: marcelo
 * Date: 01/11/15
 * Time: 02:40
 */
class mysql
{
    private $server= 'localhost';
    private $user = 'root';
    private $pass = 'kamikazi';
    private $db = 'cadastro';
    public function connect()
    {
        $conn = new  mysqli($this->server, $this->user, $this->pass, $this->db);
        return $conn;
    }
}

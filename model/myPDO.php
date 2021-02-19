<?php

class MyPDO extends PDO {

    private int $connect;

    public function __construct($dsn, $username = null, $password = null, $error = null) {

        parent::__construct($dsn, $username, $password);

        if($error===true){
            $this->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }

    }

}
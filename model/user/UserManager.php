<?php


class UserManager {

    private MyPDO $connect;

    /**
     * UserManager constructor.
     * @param MyPDO $connect
     */
    public function __construct(MyPDO $connect) {
        $this->connect = $connect;
    }

}
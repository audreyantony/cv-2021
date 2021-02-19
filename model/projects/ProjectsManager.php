<?php


class ProjectsManager {

    private MyPDO $connect;

    /**
     * ProjectsManager constructor.
     * @param MyPDO $connect
     */
    public function __construct(myPDO $connect) {
        $this->connect = $connect;
    }

}
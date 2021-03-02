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


    /**
     * readProjects()
     * @return array
     */
    public function readProjects(): array{
        $query="SELECT idProjects, titleProjects, descProjects, urlProjects, imgNameProjects, altImgProjects, titleImgProjects, user_idUser, loginUser
        FROM projects
        INNER JOIN user
        ON user_idUser = idUser
        ORDER BY idProjects DESC ;";
        $request = $this->connect->query($query);
        if($request->rowCount()){
            return $request->fetchAll(PDO::FETCH_ASSOC);
        }
        return [];
    }
}
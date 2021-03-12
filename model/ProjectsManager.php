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
        $query="SELECT idProjects, titleProjects, LEFT(descProjects, 20) AS descProjects, urlProjects, imgNameProjects, altImgProjects, titleImgProjects, user_idUser, loginUser
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

    /**
     * @param Projects $project
     * @param int $idUser
     * @param $file
     * @return array
     */
    public function createProject(Projects $project, int $idUser, $file){

        // UPLOADING IMAGE
        $upload = ProjectsManager::uploadImage($file);

        // IF THE UPLOAD WORKED
        if ($upload[0]){

            // INSERT IN THE DATABASE
            $query = "INSERT INTO projects (titleProjects, descProjects, urlProjects, imgNameProjects, altImgProjects,titleImgProjects, user_idUser) VALUES (?,?,?,?,?,?,?);";
            $prepare = $this->connect->prepare($query);
            $prepare->bindValue(1,$project->gettitleProjects(),PDO::PARAM_STR);
            $prepare->bindValue(2,$project->getdescProjects(),PDO::PARAM_STR);
            $prepare->bindValue(3,$project->geturlProjects(),PDO::PARAM_STR);
            $prepare->bindValue(4,$file['name'],PDO::PARAM_STR);
            $prepare->bindValue(5,$project->getaltImgProjects(),PDO::PARAM_STR);
            $prepare->bindValue(6,$project->gettitleImgProjects(),PDO::PARAM_STR);
            $prepare->bindValue(7,$idUser,PDO::PARAM_INT);

            return [$prepare->execute(),$upload[1]];

        } else {

            unlink(TARGET_DIR . basename($file['name']));
            return [false, $upload[1]];

        }
    }

    /**
     * @param  $file
     * @return array
     */
    public function uploadImage($file){
        // $file = $_FILES["imgNameProjects"]
        $target_file = TARGET_DIR . basename($file['name']);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $response = [];

        // Check if image file is a actual image or fake image
        $check = getimagesize($file["tmp_name"]);
        if($check !== false) {
            $response[] = "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            $response[] =  "File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            $response[] =  "Sorry but this file already exists.";
            $uploadOk = 0;
        }

        // Check file size
        if ($file["size"] > 500000) {
            $response[] =  "Sorry but your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
            $response[] =  "Sorry, only JPG, JPEG & PNG files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            return [false,$response];
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($file["tmp_name"], $target_file)) {
                $response[] =  "The file ". htmlspecialchars( basename( $file["name"])). " has been uploaded.";
            } else {
                $response[] =  "Sorry, there was an error uploading your file.";
            }
            return [true, $response];
        }
    }
}
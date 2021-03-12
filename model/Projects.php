<?php


class Projects {

    private int $idProjects;
    private string $titleProjects;
    private string $descProjects;
    private string $urlProjects;
    private string $imgNameProjects;
    private string $altImgProjects;
    private string $titleImgProjects;
    private int $user_idUser;
    private string $loginUser;


    /**
     * Projects constructor.
     * @param array $datas
     */
    public function __construct(array $datas) {
        $this->hydrate($datas);
    }

    /**
     * Projects Theuser
     * @param array $datas
     */
    private function hydrate(Array $datas) {
        foreach($datas as $key => $value){
            $methodSetters = "set".ucfirst($key);
            if(method_exists($this,$methodSetters)){
                $this->$methodSetters($value);
            }
        }
    }

    /**
     * $idProjects's getter
     * @return int
     */
    public function getidProjects() {
        return $this->idProjects;
    }

    /**
     * $idProjects's setter
     * @param int $idProjects
     */
    public function setidProjects(int $idProjects): void {
        $this->idProjects = $idProjects;
    }

    /**
     * $titleProjects's getter
     * @return string
     */
    public function gettitleProjects() {
        return html_entity_decode($this->titleProjects,ENT_QUOTES);
    }

    /**
     * $titleProjects's setter
     * @param string $titleProjects
     */
    public function settitleProjects(string $titleProjects): void {
        $title = strip_tags(trim($titleProjects));
        if(empty($title)){
            trigger_error("The project title can't be empty",E_USER_NOTICE);
        }elseif (strlen($title)>80){
            trigger_error("The project title can't be too long, the maximum is 80 characters",E_USER_NOTICE);
        }else{
            $this->titleProjects = $title;
        }
    }

    /**
     * $descProjects's getter
     * @return string
     */
    public function getdescProjects() {
        return html_entity_decode($this->descProjects,ENT_QUOTES);
    }

    /**
     * $descProjects's setter
     * @param string $descProjects
     */
    public function setdescProjects(string $descProjects): void {
        $text = strip_tags(trim($descProjects),"<br>,<p>,<div>,<a>");
        if(empty($text)){
            trigger_error("The project description can't be empty",E_USER_NOTICE);
        }else {
            $this->descProjects = $text;
        }
    }

    /**
     * $urlProjects's getter
     * @return string
     */
    public function geturlProjects() {
        return html_entity_decode($this->urlProjects,ENT_QUOTES);
    }

    /**
     * $urlProjects's setter
     * @param string $urlProjects
     */
    public function seturlProjects(string $urlProjects): void {
        $url = strip_tags(trim($urlProjects),"<br>,<p>,<div>,<a>");
        if(empty($url)){
            trigger_error("The project url can't be empty",E_USER_NOTICE);
        } else {
            $this->urlProjects = $url;
        }
    }

    /**
     * $imgNameProjects's getter
     * @return string
     */
    public function getimgNameProjects() {
        return html_entity_decode($this->imgNameProjects,ENT_QUOTES);
    }

    /**
     * $imgNameProjects's setter
     * @param string $imgNameProjects
     */
    public function setimgNameProjects(string $imgNameProjects): void {
        $imgNameProjects = strip_tags(trim($imgNameProjects));
        if(empty($imgNameProjects)){
            trigger_error("You have to pick an image",E_USER_NOTICE);
        }else {
            $this->imgNameProjects = $imgNameProjects;
        }
    }

    /**
    * $altImgProjects's getter
     * @return string
    */
    public function getaltImgProjects() {
        return html_entity_decode($this->altImgProjects,ENT_QUOTES);
    }

    /**
     * $altImgProjects's setter
     * @param string $altImgProjects
     */
    public function setaltImgProjects(string $altImgProjects): void {
        $altImg = strip_tags(trim($altImgProjects));
        if(empty($altImg)){
            trigger_error("The project alt for the image can't be empty",E_USER_NOTICE);
        }elseif (strlen($altImg)>100){
            trigger_error("The project alt for the image can't be too long, the maximum is 100 characters",E_USER_NOTICE);
        }else{
            $this->altImgProjects = $altImg;
        }
    }
    /**
     * $titleImgProjects's getter
     * @return string
     */
    public function gettitleImgProjects() {
        return html_entity_decode($this->titleImgProjects,ENT_QUOTES);
    }

    /**
     * $titleImgProjects's setter
     * @param string $titleImgProjects
     */
    public function settitleImgProjects(string $titleImgProjects): void {
        $titleImg = strip_tags(trim($titleImgProjects));
        if(empty($titleImg)){
            trigger_error("The project title for the image can't be empty",E_USER_NOTICE);
        }elseif (strlen($titleImg)>50){
            trigger_error("The project title for the image can't be too long, the maximum is 50 characters",E_USER_NOTICE);
        }else{
            $this->titleImgProjects = $titleImg;
        }
    }

    /**
     * $user_idUser's getter
     * @return int
     */
    public function getuser_idUser() {
        return html_entity_decode($this->user_idUser,ENT_QUOTES);
    }

    /**
     * $user_idUser's setter
     * @param int $user_idUser
     */
    public function setuser_idUser(int $user_idUser): void {
        $this->user_idUser = $user_idUser;
    }

    /**
     * $loginUser's getter
     * @return string
     */
    public function getloginUser(): string
    {
        return $this->loginUser;
    }

    /**
     * $loginUser's setter
     * @param string $loginUser
     */
    public function setloginUser(string $loginUser): void
    {
        $loginUser = strip_tags(trim($loginUser));
        if(strlen($loginUser)>80){
            trigger_error("The login can't be too long, the maximum is 80 characters",E_USER_NOTICE );
        }else {
            $this->loginUser = $loginUser;
        }
    }
}
<?php


class User {

    private int $idUser;
    private string $loginUser;
    private string $pwdUser;
    private string $mailUser;

    /**
     * User constructor.
     * @param array $datas
     */
    public function __construct(array $datas) {
        $this->hydrate($datas);
    }

    /**
     * hydrate User
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
     * $idUser's getter
     * @return int
     */
    public function getidUser(): int {
        return $this->idUser;
    }

    /**
     * $idUser's setters
     * @param int $idUser
     */
    public function setidUser(int $idUser): void {
        $this->idUser = $idUser;
    }

    /**
     * $loginUser's getter
     * @return string
     */
    public function getloginUser(): string {
        return $this->loginUser;
    }

    /**
     * $loginUser's setter
     * @param string $loginUser
     */
    public function setloginUser(string $loginUser): void {
        $loginUser = strip_tags(trim($loginUser));
        if(strlen($loginUser)<6 || strlen($loginUser)>80){
            trigger_error("The user login has to be longer than 80 characters",E_USER_NOTICE );
        }else {
            $this->loginUser = $loginUser;
        }
    }

    /**
     * $pwdUser's getter
     * @return string
     */
    public function getpwdUser(): string {
        return $this->pwdUser;
    }

    /**
     * $pwdUser's setter
     * @param string $pwdUser
     */
    public function setpwdUser(string $pwdUser): void {
        $this->pwdUser = $pwdUser;
    }

    /**
     * $mailUser's getter
     * @return string
     */
    public function getmailUser(): string {
        return $this->mailUser;
    }

    /**
     * $mailUser's setter
     * @param string $mailUser
     */
    public function setmailUser(string $mailUser): void {
        if(filter_var($mailUser, FILTER_VALIDATE_EMAIL)){
            $this->mailUser = $mailUser;
        }else{
            trigger_error("This e-mail address is invalid !",E_USER_NOTICE );
        }
    }
}
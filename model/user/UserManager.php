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

    /**
     * userConnection()
     * @param User $user
     * @return bool|string
     */
    public function connectUser(User $user) {
        $query = "SELECT idUser, loginUser, pwdUser, mailUser FROM user WHERE loginUser = ? ;";
        $req = $this->connect->prepare($query);
        $req->bindValue(1,$user->getloginUser(),PDO::PARAM_STR);
        try{
            $req->execute();
            if($req->rowCount()){
                if (password_verify($user->getpwdUser(), $req->fetchColumn(2))){
                    $_SESSION = $req->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['sessionId'] = session_id();
                    return true;
                }
            }else{
                return false;
            }
        }catch (PDOException $e){
            return $e->getMessage();
        }
    }

}
<?php
    require_once '../model/dbconnect.php';

class UserRegister {

    /**
     * ユーザーを登録する
     * 
     */
    public static function createUser($userData) {
        $sql = "INSERT INTO test(name,mail,password,music) VALUES (?,?,?,?)";
        $result = false;
        //ユーザーデータを配列に入れる。
        $arr = [];
        $arr[] = $_POST['name']
        $arr[] = $_POST['name']
        $arr[] = $_POST['name']
        $arr[] = $_POST['name']
        $arr[] = $_POST['name']

        try {
            $stmt = connect()->prepare($sql);
            $result = $stmt->execute($arr);
            return $result;
        } catch(Exception $e) {
            return $result;
        }
    }
}



?>
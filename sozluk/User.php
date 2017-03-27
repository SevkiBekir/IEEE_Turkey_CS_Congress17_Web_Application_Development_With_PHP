<?php

/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 26/03/2017
 * Time: 00:28
 */
include_once ("DBug.php");
class User
{
    private $db;
    public $email;
    public $uid;
    public $firstname;
    public $lastname;

    /**
     * User constructor.
     */
    function __construct()
    {
        $this->db = new mysqli("localhost", "root", "123", "sozluk");
        if($this->db->connect_error)
            die($this->db->connect_error);
    }

    /**
     * @param $firstname
     * @param $lastname
     * @param $email
     * @param $pass
     * @return bool
     */
    function register($firstname, $lastname, $email, $pass){

        //User Existence Check
        $sql = "SELECT id FROM users WHERE email=?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $email);
        $id = 0;
        $stmt->execute();
        $stmt->bind_result($id);
        if($stmt->fetch())
            return false;

        //User Insertion
        $sql = "INSERT INTO users (email,keyValue,pass,firstname,lastname) VALUES(?,?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        $salt = uniqid("", true);
        $hash = hash_hmac('sha256', $pass, $salt);
        $stmt->bind_param("sssss", $email, $salt, $hash,$firstname,$lastname);
        $stmt->execute();
        return true;
    }

    /**
     * @param $email
     * @param $pass
     * @return bool
     */
    function login($email, $pass){
        $sql = "SELECT id,email,keyValue,pass,firstname,lastname FROM users WHERE email=?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("s", $email);

        $id = 0;
        $dbemail = "";
        $keyValue = "";
        $hash = "";
        $firstname="";
        $lastname="";

        $stmt->execute();

        $stmt->bind_result($id, $dbemail, $keyValue, $hash, $firstname, $lastname);

        new dBug($id);
        if($stmt->fetch())
        {

            if(hash_hmac('sha256', $pass, $keyValue)===$hash)
            {
                $this->uid = $id;
                $this->email = $dbemail;
                $this->lastname=$lastname;
                $this->firstname=$firstname;
                return true;
            }
        }

        return false;

    }


    /**
     * @param $paraId
     * @return bool
     */
    function getFirstLastName($paraId){
        $sql = "SELECT firstname,lastname FROM users WHERE id=?";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("i", $paraId);

        $firstname = "";
        $lastname = "";
        $stmt->execute();
        $stmt->bind_result($firstname,$lastname);
        if($stmt->fetch()){
            $this->firstname=$firstname;
            $this->lastname=$lastname;
            return true;
        }

    }

}
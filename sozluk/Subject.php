<?php

/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 26/03/2017
 * Time: 02:39
 */
class Subject
{
    private $db;
    public $sid;
    public $name;
    public $userId;

    /**
     * Subject constructor.
     */
    function __construct()
    {
        $this->db = new mysqli("localhost", "root", "123", "sozluk");
        if($this->db->connect_error)
            die($this->db->connect_error);
    }

    /**
     * @param $paraSubject
     * @param $paraUserId
     * @return bool
     */
    function addSubject($paraSubject, $paraUserId){
        $sql = "INSERT INTO subjects (name,userId) VALUES(?,?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("ss", $paraSubject, $paraUserId);
        $stmt->execute();
        return true;
    }

}

/**
 * @return array|bool
 */
function listAllSubjects(){
    $res = array();
    $db=new mysqli("localhost", "root", "123", "sozluk");
    if($db->connect_error)
        die($db->connect_error);
    $sql = "SELECT id,name from subjects";
    $stmt = $db->prepare($sql);
    $stmt->execute();
    $id=0;
    $subjectName="";
    $stmt->bind_result($id,$subjectName);
    while($stmt->fetch())
    {
        $subject = new Subject();
        $subject->id = $id;
        $subject->name = $subjectName;
        $res[] = $subject;


    }

    if(count($res) == 0)
        return false;
    return $res;
}
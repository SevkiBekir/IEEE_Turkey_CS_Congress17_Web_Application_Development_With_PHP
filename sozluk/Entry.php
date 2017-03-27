<?php

/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 26/03/2017
 * Time: 04:08
 */
include_once ("User.php");
include_once ("DBug.php");
class Entry
{
    private $db;
    public $sid;
    public $content;
    public $subjectId;
    public $userId;

    /**
     * Entry constructor.
     */
    function __construct()
    {
        $this->db = new mysqli("localhost", "root", "123", "sozluk");
        if($this->db->connect_error)
            die($this->db->connect_error);
    }

    /**
     * @param $paraSubjectId
     * @param $paraUserId
     * @param $paraContent
     * @return bool
     */
    function addEntry($paraSubjectId, $paraUserId, $paraContent){
        $sql = "INSERT INTO entries (subjectId, userId, content) VALUES(?,?,?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bind_param("sss", $paraSubjectId, $paraUserId,$paraContent);
        $stmt->execute();
        return true;
    }

}


/**
 * @param $paraSubjectId
 * @return array|bool
 */
function listEntries($paraSubjectId){
    $res = array();
    $db=new mysqli("localhost", "root", "123", "sozluk");
    if($db->connect_error)
        die($db->connect_error);
    $sql = "SELECT content,userId from entries where subjectId=?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s",$paraSubjectId);
    $stmt->execute();
    $content="";
    $userId=0;
    $stmt->bind_result($content,$userId);
    $i=0;
    while($stmt->fetch())
    {
        $entry = new Entry();
        $entry->userId=$userId;
        $entry->content= $content;
        $user= new User();
        $user->getFirstLastName($userId);
        $res[$i][0] = $entry;
        $res[$i][1] = $user;
        $i++;
        //new dBug($res);

    }

    if(count($res) == 0)
        return false;
    return $res;
}
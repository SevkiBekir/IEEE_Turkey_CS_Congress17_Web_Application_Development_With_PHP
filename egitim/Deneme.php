<?php

/**
 * Created by PhpStorm.
 * User: sbk
 * Date: 26/03/2017
 * Time: 10:35
 */
class Deneme
{
    /**
     * @var
     */
    public $deneme1;
    /**
     * @var
     */
    private $deneme2;

    /**
     * Deneme constructor.
     */
    function __construct()
    {
        $deneme1 ="";
        $deneme2 = "";
    }

    /**
     * @return mixed
     */
    public function getDeneme2()
    {
        return $this->deneme2;
    }

    /**
     * @param mixed $deneme2
     */
    public function setDeneme2($deneme2)
    {
        $this->deneme2 = $deneme2;
    }


    /**
     * @param string $para
     */
    public function fDeneme($para = ""){
        echo "İlk Uyguulama ".$para;
    }


}

?>
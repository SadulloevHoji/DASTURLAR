<?php
class Construction{

    public $parms;

    public function __construct($name = null)
    {
        //You set your variables here
        $this->parms = $_REQUEST;
        echo "Dear $name, This is a __construct of the class ({$this->parms['city']}) is loaded <hr>";
    }

    public function __destruct()
    {
        //You unset your variables like DB connections or API connections here
        echo "This is a __destruct of the class ({$this->parms['city']}) is unloaded <hr>";
        unset($this->parms);
    }

    public function plumbing(){
        echo "Sunnat is the head of the Plumbing Department for ({$this->parms['city']})<hr>";
    }

}

$construction = new Construction('Zarina');
$construction->plumbing();


<?php
class Construction{
    //Class Properties or Attributes
    //Class methods or functions

    //public, protected, private, final - Visibility Scope or Class scope

    public function IaMPublicFunction(){
        echo "IaMPublicFunction: This is a public function <hr>";
    }

    protected function IaMProtectedFunction(){
        echo "IaMProtectedFunction: This is a protected function <hr>";
    }

    private function IaMPrivateFunction(){
        echo "IaMPrivateFunction: This is a private function <hr>";
    }

}

$construction = new Construction('Zarina');
$construction->IaMPublicFunction();



<?php


//Declare a Class object
class Pet {
    
    //Properties
    var $ID;
    var $Name;
    var $Status;
    var $Type;
    var $Size;
    
    //Create an animal Object
    var $Animal = new Animal();
    
    //Methods
    function add(){
        
    }
    
    function remove(){
        
    }
    
    function getPet(){
        //output pet information based off variables sent
    }
}

//The extended or derived class has all variables and functions of the base class - Inheritance
class Animal extends Pet {
    var $Gender;
    var $Price;

    function getInfo(){
        //output gender and price
    }
}

function browse(){
    
    var $pet=new Pet();
    
    //request the info
    $pet->getpet(type,size);
}

?>
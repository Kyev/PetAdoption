<?php


//Declare a Class object
class Pet {
    //Properties
    var $ID;
    var $Price;
    var $Name;
    var $Status;
    //Create an animal Object
    var $Animal = new Animal();
    
    
    //Methods
    function add(){
        
    }
    
    function remove(){
        
    }
    
    function modify(){
        
    }
}

//The extended or derived class has all variables and functions of the base class - Inheritance
class Animal extends Pet {
    var $Type;
    var $Habitat;
    var $Care;
    
    function getInfo(){
        
    }
}

?>
<?php

class Field{
    public $id;
    public $field_owner;
    public $date;
    public $quantity;
    public $rate;
    public $total;
    public $paid;
    public $due;

    function __construct($field_owner, $date, $quantity, $rate,$total,$paid,$due){
        $this->field_owner = $field_owner;
        $this->date = $date;
        $this->quantity=$quantity;
        $this->rate = $rate;
        $this->total = $total;
        $this->paid = $paid;
        $this->due = $due;
    }
    function setId($id){
        $this->id= $id;
    }

    function getId(){
        return $this->id;
    }
    function getFieldOwner(){
        return $this->field_owner;
    }
    function getDate(){
        return $this->date;
    }
    function getQuantity(){
        return $this->quantity;
    }
    function getRate(){
        return $this->rate;
    }
    function getTotal(){
        return $this->total;
    }
    function getPaid(){
        return $this->paid;
    }
    function getDue(){
        return $this->due;
    }
    
}
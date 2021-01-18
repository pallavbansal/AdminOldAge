<?php

class DB 
{
  
  // Properties
    public $conn;

  
  function __construct() 
  {
    $Server='localhost';
    $DbUserName='root';
    $DbPassword='';
    $Db='oldage';

    $this->conn = mysqli_connect($Server,$DbUserName,$DbPassword,$Db);
   
  }
   function __destruct() {
    $this->conn->close();
  }

  // Methods
  function SelectWithQuery($query)  //Full Query
  {
    return $this->RunSelectQuery($query) ;
  }
  
  function SelectWithoutQuery($TableName,$Condition)  // Just Table Name and Last Phrase of Condition
  {
    $query = 'Select * from '. $TableName.' where '. $Condition ;
    
    
    return $this->RunSelectQuery($query) ;
  }
  
  function InsertWithQuery($query) //Full Query
  {
    return $this->RunInsertQuery($query) ;
  }
  function InsertWithoutQuery($TableName,$ColumnName,$Values) //TableName ,Name of the coumns and values in the coulumn
  {
    $query = 'Insert into '.$TableName.' ('.$ColumnName.') values ('.$Values.')';
    return $this->RunInsertQuery($query) ;
  }
  function UpdateWithoutQuery($TableName,$Values,$Condition) //TableName ,Name of the coumns and values in the coulumn
  {
    $query = 'Update '.$TableName.' set '.$Values.' Where '.$Condition;
    return $this->RunInsertQuery($query) ;
  }
  function RunInsertQuery($query) 
  {
      
    $ar = array();
    $sql = $query;
    $result = $this->conn->query($sql);
   
    if($result)
    {
       $newData = array('result' => true );
    }
    else
    {
       $newData = array('result' => false );
    
    }

    
    array_push($ar,$newData);
    return $ar;
  }
  function RunSelectQuery($query) 
  {
    $ar = array();
    $sql = $query;
    $result = $this->conn->query($sql);
  

    while ($row=mysqli_fetch_assoc($result))
    {
     array_push($ar, $row);
    }
    

    return $ar;
  }
}




?> 

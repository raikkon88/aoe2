<?php
include_once 'EnumDBContent.php';

class aoe2DB extends SQLite3 {

    const PATH = "db/aoe2DB.db";

    function __construct(){
        $this->open($this::PATH);
    }

    function insertContent($id,$parentID,$title,$contentType,$content,$position){

        $insert="INSERT INTO CONTENT(ID,PARENT_ID,TITLE,CONTENT_TYPE,CONTENT,POSITION) Values(".$id.",".$parentID.",'".$title."','".$contentType."','".$content."',".$position.")";
        $this->exec($insert);
    }

    function getContentById($id){
        $select="SELECT ID,PARENT_ID,TITLE,CONTENT_TYPE,CONTENT,POSITION from CONTENT where ID=".$id;
        $query=$this->query($select);

        $result = $this->resultSetToArray($query);
        $arrayResult=null;
        foreach ($result as $entry) {
            $arrayResult[EnumDBContent::ID]=$entry['ID'];
            $arrayResult[EnumDBContent::TITLE]=$entry['TITLE'];
            $arrayResult[EnumDBContent::PARENT_ID]=$entry['PARENT_ID'];
            $arrayResult[EnumDBContent::CONTENT_TYPE]=$entry['CONTENT_TYPE'];
            $arrayResult[EnumDBContent::CONTENT]=$entry['CONTENT'];
            $arrayResult[EnumDBContent::POSITION]=$entry['POSITION'];

            $arrayResult[EnumDBContent::CHILDS]=$this->getContentChildsIDS($id);
        }

        return $arrayResult;
    }

    function getContentChildsIDS($parentID){
        $select="SELECT ID from CONTENT where PARENT_ID=".$parentID;
        $query=$this->query($select);

        $result = $this->resultSetToArray($query);
        $arrayResult = array();
        foreach ($result as $entry) {
            array_push($arrayResult,$entry);
        }

        return $arrayResult;
    }



    private function resultSetToArray($queryResultSet){
       $multiArray = array();
       $count = 0;
       while($row = $queryResultSet->fetchArray(SQLITE3_ASSOC)){
           foreach($row as $i=>$value) {
               $multiArray[$count][$i] = $value;
           }
           $count++;
       }
       return $multiArray;
    }



}




/*
$bd=new aoe2DB();

$bd->exec("INSERT INTO CONTENT VALUES(1, null, 'prova', 'tipus1','<p>prova</p>',1)");

$resultado=$bd->query('Select content from content');

var_dump($resultado->fetchArray());
*/
?>

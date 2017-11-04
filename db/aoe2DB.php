<?php

class aoe2DB extends SQLite3 {

    function __construct($path){
        $this->open($path);
    }

    function insertContent($id,$parentID,$title,$contentType,$content,$position){

        $insert="INSERT INTO CONTENT(ID,PARENT_ID,TITLE,CONTENT_TYPE,CONTENT,POSITION) Values(".$id.",".$parentID.",'".$title."','".$contentType."','".$content."',".$position.")";
        echo($insert);
        $this->exec($insert);
        //$insert='INSERT INTO CONTENT(ID,PARENT_ID,TITLE,CONTENT_TYPE,CONTENT,POSITION) Values(:id,:parent,:title,:type,:content,:position)';
        /*$statement=$this->prepare($insert);

        $statement->bindParam(':id',$id);
        $statement->bindParam(':parent',$parentID);
        $statement->bindParam(':title',$title);
        $statement->bindParam(':type',$contentType);
        $statement->bindParam(':content',$content);
        $statement->bindParam(':position',$position);

        $statement->execute();

        */
    }

    function getContent(){
        $select="SELECT CONTENT from CONTENT";
        echo($select);
        $result=$this->query($select);

        var_dump($result->fetchArray());
    }

    function getContentById($id){
        $select="SELECT CONTENT from CONTENT";
        echo($select);
        $result=$this->query($select);

        var_dump($result->fetchArray());
    }
}




/*
$bd=new aoe2DB();

$bd->exec("INSERT INTO CONTENT VALUES(1, null, 'prova', 'tipus1','<p>prova</p>',1)");

$resultado=$bd->query('Select content from content');

var_dump($resultado->fetchArray());
*/
?>

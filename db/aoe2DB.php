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
        $select="SELECT ID,PARENT_ID,TITLE,CONTENT_TYPE,CONTENT,POSITION from CONTENT where ID=".$id."";
        $query=$this->query($select);

        $result = $this->resultSetToArray($query);
        $arrayResult=null;
        foreach ($result as $entry) {
            $arrayResult['ID']=$entry['ID'];
            $arrayResult['TITLE']=$entry['TITLE'];
            $arrayResult['PARENT_ID']=$entry['PARENT_ID'];
            $arrayResult['CONTENT_TYPE']=$entry['CONTENT_TYPE'];
            $arrayResult['CONTENT']=$entry['CONTENT'];
            $arrayResult['POSITION']=$entry['POSITION'];
            echo "ID: ". $entry['ID']. " Title: ".$entry['TITLE']." content: ".$entry['CONTENT']."\n";
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

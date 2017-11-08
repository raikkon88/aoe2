<?php
include_once "EnumDBContent.php";
include_once "models/Resource.php";
//RootPath::include_path("models/Resource.php");

class aoe2DB extends SQLite3 {

    function __construct($path){
        $this->open($path);
    }

    function insertContent($id,$parentID,$title,$contentType,$content,$position){
        $insert="INSERT INTO CONTENT(ID,PARENT_ID,TITLE,CONTENT_TYPE,CONTENT,POSITION) Values(".$id.",".$parentID.",'".$title."','".$contentType."','".$content."',".$position.")";
        $this->exec($insert);
    }

    function insertResource($url, $contentType, $parentId){
        $insert = "INSERT INTO RESOURCES(ID, URL, CONTENT_TYPE, ID_PARENT)" .
                   "VALUES (" . $this->getNextId(EnumDBContent::TABLE_RESOURCES). ",'" .$url. "', '" .$contentType. "'," .$parentId. ")";
        $this->exec($insert);
    }

    function getContentById($id){

        $select="SELECT ID,PARENT_ID,TITLE,CONTENT_TYPE,CONTENT,POSITION from CONTENT where ID=".$id;
        $query=$this->query($select);
        $result = $this->resultSetToArray($query);

        $arrayResult=null;
        foreach ($result as $entry) {
            $arrayResult = $this->getParsedContent($entry);
            $arrayResult[EnumDBContent::CHILDS]=$this->getContentChildsIDS($id);
        }
        $arrayResult[EnumDBContent::RESOURCES]=$this->getResources($id);
        return $arrayResult;
    }



    function getResources($id){
        $select = "SELECT * FROM RESOURCES WHERE ID_PARENT = " . $id;
        $query=$this->query($select);
        $result = $this->resultSetToArray($query);
        $resources = array();
        foreach($result as $row){
            array_push($resources, new Resource($row["ID"], $row["URL"], $row["CONTENT_TYPE"], $row["ID_PARENT"]));
        }
        return $resources;
    }

    function getContentChildsIDS($parentID){
        $select="SELECT * from CONTENT where PARENT_ID=".$parentID;
        $query=$this->query($select);
        $result = $this->resultSetToArray($query);

        $arrayResult = array();
        foreach ($result as $key => $row) {
            $contentRow = $this->getParsedContent($row);
            $tm = new TemplateManager($contentRow);
            array_push($arrayResult, $tm->getContentObject());
        }
        return $arrayResult;
    }

    function getNextId($table){
        $select = "SELECT MAX(ID) from " . $table;
        $query = $this->query($select);
        $result = $this->resultSetToArray($query);
        if(isset($result)){
            return $result[0]["MAX(ID)"] + 1;
        }
        return 0;

    }

    function getIDSTitles(){
        $select="SELECT ID,TITLE from CONTENT";
        $query=$this->query($select);
        $result = $this->resultSetToArray($query);

        $arrayResult=null;
        $array=array();
        foreach ($result as $entry) {
            $arrayResult[EnumDBContent::ID]=$entry['ID'];
            $arrayResult[EnumDBContent::TITLE]=$entry['TITLE'];
            array_push($array,$arrayResult);
        }
        return $array;
    }

    private function resourceSetToArray($resourceSet){
        // TODO : Make resource from set
        return 1;
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

    private function getParsedContent($row){
        $res = array();
        $res[EnumDBContent::ID]=$row['ID'];
        $res[EnumDBContent::TITLE]=$row['TITLE'];
        $res[EnumDBContent::PARENT_ID]=$row['PARENT_ID'];
        $res[EnumDBContent::TYPE]=$row['CONTENT_TYPE'];
        $res[EnumDBContent::CONTENT]=$row['CONTENT'];
        $res[EnumDBContent::POSITION]=$row['POSITION'];
        return $res;
    }


}




/*
$bd=new aoe2DB();

$bd->exec("INSERT INTO CONTENT VALUES(1, null, 'prova', 'tipus1','<p>prova</p>',1)");

$resultado=$bd->query('Select content from content');

var_dump($resultado->fetchArray());
*/

?>

<?php
define("LOCAL_PATH", "http://mspifarre.com/aoe2/");

include_once "../admin/aoe2DBv2.php";

include_once "../templates/head.php";

include_once "../models/Resource.php";
include_once "../templates/header.php";
include_once "../db/EnumDBContent.php";
include_once "../db/EnumContentType.php";
include_once "../db/EnumResourceType.php";

$db = new aoe2DBv2("../db/aoe2DB.db");

$items=$db->getIDSTitles();
if(isset($_POST["id"])){
   $content=$db->getContentUpdate($_POST["id"]);
   if(strlen($_POST["content"])>0){
      echo "UPDATING";
      $db->updateContent($_POST["id"],$_POST["content"],$_POST["title"]);
      header("Location: http://mspifarre.com/aoe2/admin/updateContent.php");
  }
}


?>

<!-- Create a tag that we will use as the editable area. -->
<!-- You can use a div tag as well. -->
<form id="form" action="updateContent.php" method="POST" load="loadForm()">


    <section class="form-group col-xs-12"  style="margin-top:20px;">
        <div class="col-xs-3"><label for="id">Id</label></div>
        <div class="col-xs-9">
            <select name="id" id="_id" class="form-control">

                <?php
                if(isset($_POST["id"])){
                    echo  "<option value='".$_POST["id"]."'>".$_POST["id"]."</option>";
                }
                else{
                    echo "<option value='NULL' > </option>";

                    foreach ($items as $entry) {
                        echo "<option value='".$entry[EnumDBContent::ID]."'>".$entry[EnumDBContent::ID]."-->".$entry[EnumDBContent::TITLE]."</option>";
                    }
                }
                 ?>
            </select>
        </div>
    </section>

    <section class="form-group col-xs-12">
        <div class="col-xs-3"><label for="title">Title</label></div>
        <div class="col-xs-9">
            <input class="form-control" id="title" type="text" name="title" value=
            <?php
                echo '"'.$content[EnumDBContent::TITLE].'"';
             ?>
             />

        </div>
    </section>

    <section class="form-group col-xs-12">
        <div class="col-xs-3"><label for="content">Text Content</label></div>
        <div class="col-xs-9"><textarea name="content" id="content">
            <?php
            echo $content[EnumDBContent::CONTENT];
             ?>
         </textarea></div>
    </section>

    <section class="form-group col-xs-12">
        <input type="hidden" name="query" value="c"/>
        <div class="col-xs-12"><button type="submit" class="btn btn-primary form-button">Confirm identity</button></div>
    </section>
</form>



<!-- Include external JS libs. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>

<!-- Include Editor JS files. -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.1/js/froala_editor.pkgd.min.js"></script>

<!-- Initialize the editor. -->
<script>
  $(function() {
    $('#content').froalaEditor({toolbarInline: false})
  });
</script>


<?php
/* Carregar la plantilla del footer */
include_once "../templates/footer.php";
?>

<?php
include_once "../db/aoe2DB.php";
/* Carregar la plantilla del header */
include_once "../templates/head.php";

include_once "../templates/header.php";

include_once "../db/EnumDBContent.php";
include_once "../db/EnumContentType.php";
?>


<div class="col-xs-12">
    <!-- Create a tag that we will use as the editable area. -->
    <!-- You can use a div tag as well. -->
    <form action="createContent.php" method="POST">
        <section class="col-xs-12">
            <select name=type id="contentType" required="required">
                <option value=EnumContentType::TYPE >EnumContentType::TYPE</option>
            <select>

        <textarea name="editor_content" id="myEditor"></textarea>
        <button>Submit</button>
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
        $('#myEditor').froalaEditor({toolbarInline: false})
      });
    </script>
</div>


<?php


$db = new aoe2DB("../db/aoe2DB.db");


/* Carregar la plantilla del footer */
include_once "../templates/footer.php";
?>

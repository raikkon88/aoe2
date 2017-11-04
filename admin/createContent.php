<?php
include_once "../models/RootPath.php";
RootPath::include_path("db/aoe2DB.php");

/* Carregar la plantilla del header */
RootPath::include_path("templates/head.php");

RootPath::include_path("/templates/header.php");

RootPath::include_path("db/EnumDBContent.php");
RootPath::include_path("db/EnumContentType.php");

$db = new aoe2DB("../db/aoe2DB.db");

$items=$db->getIDSTitles();
    var_dump($items);

?>


<div class="col-xs-12">
    <!-- Create a tag that we will use as the editable area. -->
    <!-- You can use a div tag as well. -->
    <form action="createContent.php" method="POST">
        <section class="col-xs-12">
            CONTENT ID:
            <input type="number" name="id" size="8" min="0" max="99999" step="any" value="" />
        </section>
        <section class="col-xs-12">
            PARENT ID:
            <select name="parentID" id="parent" >
                <option value='blank' > </option>
                <?php

                foreach ($items as $entry) {

                    echo "<option value='".$entry[EnumDBContent::TITLE]."'>".$entry[EnumDBContent::ID]."-->".$entry[EnumDBContent::TITLE]."</option>";

                }
                 ?>
            </select>
        </section>
        <section class="col-xs-12">
            TITLE:
            <input type="text" name="title"  value="" />
        </section>
        <section class="col-xs-12">
            CONTENT TYPE:
            <select name="contentType" id="contentType" required="required">
                <option value="<?php echo EnumContentType::BASE_CONTENT ?>" >Base Content</option>
                <option value="<?php echo EnumContentType::IMAGE_CONTENT ?>" >Image Content</option>
                <option value="<?php echo EnumContentType::IMAGE_LIST_CONTENT ?>" >Image List Content</option>
                <option value="<?php echo EnumContentType::IMAGE_AUDIO_CONTENT ?>" >Image Audio Content</option>
                <option value="<?php echo EnumContentType::LIST_CONTENT ?>" >List Content</option>
                <option value="<?php echo EnumContentType::VIDEO_CONTENT ?>" > Video content</option>
            </select>
        </section>
        <section class="col-xs-12">
            CONTENT:
            <textarea name="content" id="content"></textarea>
        </section>
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
        $('#content').froalaEditor({toolbarInline: false})
      });
    </script>
</div>


<?php





/* Carregar la plantilla del footer */
RootPath::include_path("templates/footer.php");
?>

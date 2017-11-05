<?php
include_once "../models/RootPath.php";
/* Carregar la plantilla del header */
RootPath::include_path("templates/head.php");

RootPath::include_path("/templates/header.php");

RootPath::include_path("db/EnumDBContent.php");
RootPath::include_path("db/EnumContentType.php");

$db = new aoe2DB("../db/aoe2DB.db");

$items=$db->getIDSTitles();

?>

<!-- Create a tag that we will use as the editable area. -->
<!-- You can use a div tag as well. -->
<form id="form" action="FormManager.php" method="POST" load="loadForm()">

    <section class="form-group col-xs-12">
        <div class="col-xs-3"><label for="id">Content Id</label></div>
        <div class="col-xs-9"><input class="form-control" id="_id" type="number" name="id" size="8" min="0" max="99999" step="any" value="<?php echo $db->getNextContentId(); ?>" /></div>
    </section>

    <section class="form-group col-xs-12">
        <div class="col-xs-3"><label for="parent">Parent Id</label></div>
        <div class="col-xs-9">
            <select name="parentID" id="parent" class="form-control">
                <option value='blank' > </option>
                <?php
                foreach ($items as $entry) {
                    echo "<option value='".$entry[EnumDBContent::ID]."'>".$entry[EnumDBContent::ID]."-->".$entry[EnumDBContent::TITLE]."</option>";
                }
                 ?>
            </select>
        </div>
    </section>

    <section class="form-group col-xs-12">
        <div class="col-xs-3"><label for="title">Title</label></div>
        <div class="col-xs-9"><input class="form-control" id="title" type="text" name="title"  value=""  /></div>
    </section>

    <section class="form-group col-xs-12">
        <div class="col-xs-3"><label for="contentType">Content Type</label></div>
        <div class="col-xs-9">
            <select class="form-control" name="contentType" id="contentType" required="required" onchange="switchResource(this)">
                <option value="<?php echo EnumContentType::BASE_CONTENT ?>" >Base Content</option>
                <option value="<?php echo EnumContentType::IMAGE_CONTENT ?>" >Image Content</option>
                <option value="<?php echo EnumContentType::IMAGE_LIST_CONTENT ?>" >Image List Content</option>
                <option value="<?php echo EnumContentType::IMAGE_AUDIO_CONTENT ?>" >Image Audio Content</option>
                <option value="<?php echo EnumContentType::LIST_CONTENT ?>" >List Content</option>
                <option value="<?php echo EnumContentType::VIDEO_CONTENT ?>" > Video content</option>
            </select>
        </div>
    </section>

    <section class="form-group col-xs-12" id="image_url">
        <div class="col-xs-3"><label for="image_url_input">Image URL</label></div>
        <div class="col-xs-9"><input class="form-control" type="text" name="image" id="image_url_input" value="" /></div>
    </section>

    <section class="form-group col-xs-12" id="audio_url">
        <div class="col-xs-3"><label for="audio_url_input">Audio URL</label></div>
        <div class="col-xs-9"><input class="form-control" type="text" name="audio" id="audio_url_input" value="" /></div>
    </section>


    <section class="form-group col-xs-12" id="video_url">
        <div class="col-xs-3"><label for="video_url_input">Video URL</label></div>
        <div class="col-xs-9"><input class="form-control" type="text" name="video" id="video_url_input" value="" /></div>
    </section>

    <section class="form-group col-xs-12">
        <div class="col-xs-3"><label for="content">Text Content</label></div>
        <div class="col-xs-9"><textarea name="content" id="content"></textarea></div>
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
RootPath::include_path("templates/footer.php");
?>

    <!-- Create a tag that we will use as the editable area. -->
    <!-- You can use a div tag as well. -->
    <form action="save" method="POST">
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

<section class="content-header">
    <h1>
        <?php echo $this->pageTitle; ?>

    </h1>

</section>

<script src="http://malsup.github.com/jquery.form.js"></script>
<form id="myForm" action="index.php?r=adminchung/ajaxupdate" method="post" enctype="multipart/form-data">
<section class="content  bordertop">
    <div class="row">
        <div class="col-md-6" style="width: 80%">

            <div class="panel panel-default">

                <div class="panel-body">

                <input type="hidden" value="<?php echo $hsTable["aaachung_guid"] ?>" id="aaachung_guid" name="aaachung_guid" />
                    <div class='box-body pad'>

                            <textarea id="mo_ta_dai" name="mo_ta_dai" rows="10" cols="80">
                                <?php echo $hsTable["mo_ta_dai"] ?>
                            </textarea>

                    </div></div>
                    <div class="form-group" style="padding: 6px 12px">
                        <input class="btn btn-danger btn-lg" name="bsubmit"  id="bsubmit"  value=" Lưu " type="submit" />
<!--                     <input class="btn btn-primary btn-lg btncancel" name="btncancel" value=" Quay về " type="button" />-->
<!--                        <input class="btn btn-primary btn-lg .btnaddcolor" name="btnaddcolor" value=" Thêm màu sắc " type="button" />-->
<!--                        <input class="btn btn-primary btn-lg .btnprice" name="btnprice" value=" Cập nhật giá " type="button" />-->
                    </div>


                </div>
<div id="divlist">

</div>
            </div>

        </div>
    </div>
</section>
</form>

<script src="themes/admin-green/views/js/plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="themes/admin-green/views/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
//        CKEDITOR.replace('mo_ta_dai');
//        //bootstrap WYSIHTML5 - text editor
//        $(".textarea").wysihtml5();
    });
</script>
<script type="text/javascript" src="tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "jbimages insertdatetime media table contextmenu paste colorpicker "
        ],
        toolbar: "preview media insertfile jbimages undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        relative_urls: false

    });
</script>
<script>

    var IS_SUBMIT=0;
    $(document).ready(function()
    {

        var options = {
            beforeSend: function()
            {

                $("#progress").show();
                //clear everything
                $("#bar").width('0%');
                $("#message").html("");
                $("#percent").html("0%");
            },
            uploadProgress: function(event, position, total, percentComplete)
            {
                $("#bar").width(percentComplete+'%');
                $("#percent").html(percentComplete+'%');


            },
            success: function()
            {
                $("#bar").width('100%');
                $("#percent").html('100%');
            //  listImage();
               // $("#myForm").reset();
               //document.getElementById("myForm").reset();
                alert("Đã lưu thành công");

            },
            complete: function(response)
            {


                $("#message").html("<font color='green'>"+response.responseText+"</font>");
            },
            error: function()
            {
                $("#message").html("<font color='red'> ERROR: unable to upload files</font>");

            }

        };

        $("#myForm").ajaxForm(options);


    });
    $( "#color_id" ).change(function() {
       // listImage();
    });

    $( "#bsubmit" ).mouseover(function() {
        tinyMCE.triggerSave(false, true);
        varTitle = $('<textarea />').html( $("#mo_ta_dai").val()).text();
        $( "#mo_ta_dai").val(varTitle);

    });
    $(document).on('click', '.btncancel', function () {



    });

</script>

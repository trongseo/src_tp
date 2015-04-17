<section class="content-header">
    <h1>
        <?php echo $this->pageTitle; ?>

    </h1>

</section>

<script src="http://malsup.github.com/jquery.form.js"></script>
<form id="myForm" action="index.php?r=ajaxadmin/sanphamedit" method="post" enctype="multipart/form-data">
<section class="content  bordertop">
    <div class="row">
        <div class="col-md-6" style="width: 80%">

            <div class="panel panel-default">

                <div class="panel-body">

                    <div class="form-group">
                        <label for="pass_old"> Mã sản phẩm:</label>
<!--                     $hsTable["ma_sp"]-->
                        <input type="text" class="form-control" value="<?php echo $hsTable["ma_sp"] ?>" name="ma_sp" id="ma_sp" />
                    </div>
                    <div class="form-group">
                        <label for="pass_new">Loại sản phẩm: </label>
                        <select id="san_pham_loai_guid" name="san_pham_loai_guid"  class="form-control">
                            <?php foreach($datasan_pham_loai_guid as $value):?>
                                <?php
                                if($value["san_pham_loai_guid"] == $hsTable["san_pham_loai_guid"])
                                {
                                    echo ' <option seleted value="'.$value["san_pham_loai_guid"].'" >'.$value["ten_loai"].'</option>';
                                }
                                else
                                {
                                    echo ' <option value="'.$value["san_pham_loai_guid"].'" >'.$value["ten_loai"].'</option>';
                                }
                                ?>

                            <?php endforeach?>
                        </select>
                        <input type="hidden" id="san_pham_guid" name="san_pham_guid" value="<?php echo $hsTable["san_pham_guid"] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="pass_new">Hình đại diện :</label>
                        <br/>

                        <div id="message"></div><div id="progress">
                            <div id="bar"></div>
                            <div id="percent"></div >
                        </div>
                        <input type="file" size="60" name="uploaded_image" id="uploaded_image"> <img alt="" width="50" name="uploaded_image1" id="uploaded_image1"  src="item_image/icon_<?php echo $hsTable["hinh_dai_dien"] ?>" />
                    </div><div class="form-group">
                    <div class='box-body pad'>
                        <form>
                            <textarea id="mo_ta_dai" name="mo_ta_dai" rows="10" cols="80">
                                <?php echo $hsTable["mo_ta_dai"] ?>
                            </textarea>
                        </form>
                    </div></div>
                    <div class="form-group" style="padding: 6px 12px">
                        <input class="btn btn-danger btn-lg" name="bsubmit" value=" Lưu " type="submit" />
<!--                        <input class="btn btn-primary btn-lg .btncancel" name="btncancel" value=" Quay về " type="button" />-->
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
    function showImage(src,target) {
        var fr=new FileReader();
        // when image is loaded, set the src of the image where you want to display it
        fr.onload = function(e) { target.src = this.result; };
        src.addEventListener("change",function() {
            // fill fr with image data
            fr.readAsDataURL(src.files[0]);
        });
    }
    var src = document.getElementById("uploaded_image");
    var target = document.getElementById("uploaded_image1");
    showImage(src,target);
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
function listImage(){
    $('#divlist').html('loading...');
    guid_id=$('#san_pham_guid').val();
    color_id=$('#color_id').val();
    $.get("index.php?r=ajaxadmin/listimage&san_pham_guid="+guid_id +"&color_id="+color_id, function (data, status) {
       $('#divlist').html(data);

    });

}
</script>

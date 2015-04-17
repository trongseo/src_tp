<section class="content-header">
    <h1>
        <?php echo $this->pageTitle; ?>

    </h1>

</section>

<script src="http://malsup.github.com/jquery.form.js"></script>
<form id="myForm" action="index.php?r=myadminvideo/videolist" method="post" enctype="multipart/form-data">
    <section class="content  bordertop">
        <div class="row">
            <div class="col-md-6" style="width: 80%">

                <div class="panel panel-default">

                    <div class="panel-body">
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

</div>
                    </div>
                    <div id="divlist">
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tbody><tr>
                                    <th style="width: 10px">#</th>
                                    <th>Video</th>
                                    <th>Xóa</th>

                                </tr>
                                <?php $numst=1; ?>
                                <?php foreach($data as $value):?>

                                    <tr class="remove<?php echo $value["video_list_guid"]?>">
                                        <td> <?php echo $numst++; ?></td>
                                        <td> <?php echo $value["text_embed"]?></td>
                                        <td>
                                            <button class="btn btn-info btn-sm cssdelete" type="button"  guid_id="<?php echo $value["video_list_guid"]?>" >Xóa</button>

                                            <button class="btn btn-info btn-sm cssedit" type="button"  guid_id="<?php echo $value["video_list_guid"]?>" >Sửa</button>
                                        </td>

                                    </tr>

                                <?php endforeach?>


                                </tbody></table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</form>

<script>
$(document).on('click', '.cssdelete', function () {
    guid_id = $(this).attr("guid_id");
    imagename = $(this).attr("imagename");
    $.get("index.php?r=ajaxadmin/deleteimage&guid_id="+guid_id +"&imagename="+imagename, function (data, status) {
      $('.remove'+guid_id).hide()  ;

    });

});
$(document).on('click', '.cssedit', function () {
    guid_id = $(this).attr("guid_id");
//myadminvideo/videoedit&san_pham_guid=45D2ACE6-D24E-CB65-149C-7A32C24BB3EF
 window.location.href='index.php?r=myadminvideo/videoedit&guid='+guid_id;

});

</script>

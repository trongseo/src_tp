
<div class="box-body">
    <table class="table table-bordered">
        <tbody><tr>
            <th style="width: 10px">#</th>
            <th>Hình</th>
            <th>Xóa</th>

        </tr>
        <?php $numst=1; ?>
        <?php foreach($data as $value):?>

            <tr class="remove<?php echo $value["san_pham_hinh_guid"]?>">
                <td> <?php echo $numst++; ?></td>
                <td> <img src="item_image/icon_<?php echo $value["image1"] ?>"/></td>
                <td>
                    <button class="btn btn-info btn-sm cssdelete" imagename="<?php echo $value["image1"] ?>" guid_id="<?php echo $value["san_pham_hinh_guid"]?>" >Xóa</button>
                </td>

            </tr>

        <?php endforeach?>


        </tbody></table>
</div>
<script src="http://120.72.106.146:66/themes/user-templete/js/jquery.min.js"></script>
<script>
$(document).on('click', '.cssdelete', function () {
    guid_id = $(this).attr("guid_id");
    imagename = $(this).attr("imagename");
    $.get("index.php?r=ajaxadmin/deleteimage&guid_id="+guid_id +"&imagename="+imagename, function (data, status) {
      $('.remove'+guid_id).hide()  ;

    });

});
</script>

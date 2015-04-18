
<div class="box-body">
    <table class="table table-bordered">
        <tbody><tr>
            <th style="width: 10px">#</th>
            <th>Màu sắc</th>
            <th>Kích cỡ</th>
            <th>Giá</th>
            <th>Action</th>
        </tr>
        <?php $numst=1; ?>
        <?php foreach($data as $value):?>

            <tr class="remove<?php echo $value["san_pham_price_guid"]?>">
                <td> <?php echo $numst++; ?></td>
                <td> <?php echo $value["color_name"]?></td>
                <td> <?php echo $value["size_text"]?></td>
                <td> <?php echo $value["sp_price"]?></td>
                <td>
                    <button class="btn btn-info btn-sm cssdelete" type="button"  guid_id="<?php echo $value["san_pham_price_guid"]?>" >Xóa</button>
                    <button class="btn btn-info btn-sm cssedit" guid_id="<?php echo $value["san_pham_price_guid"]?>" type="button"  >Sửa</button>
                </td>

            </tr>

        <?php endforeach?>


        </tbody></table>
</div>
<script src="http://120.72.106.146:66/themes/user-templete/js/jquery.min.js"></script>
<script>
$(document).on('click', '.cssdelete', function () {
    guid_id = $(this).attr("guid_id");
    var cf = confirm("Bạn có chắc muốn xóa?");
    if(cf)
    $.get("index.php?r=admingia/ajaxdelete&guid_id="+guid_id +"&imagename=", function (data, status) {
      $('.remove'+guid_id).hide()  ;

    });

});

</script>

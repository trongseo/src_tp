<section class="content-header">
    <h1>
        <?php echo $this->pageTitle; ?>

    </h1>

</section>
<section class="content  bordertop">
    <div class="row">
        <div class="col-md-6" style="width: 80%">

            <div class="panel panel-default">
                <form id="myForm" action="index.php?r=myadmin/dondathang" method="post" enctype="multipart/form-data">
                    <div class="box-body">
                        <table class="table table-bordered">
                            <tbody><tr>
                                <th style="width: 10px">#</th>
                                <th>Mã SP/Hình</th>
                                <th>Họ tên</th>
                                <th>Email</th>
                                <th>Điện thoại/Fax</th>
                                <th>Nội dung</th>
                                <th>Xóa</th>
<!--                                dondathang_guid,hoten,email,dienthoai,fax,diachi,tieude,noidung-->
                            </tr>
                            <?php $numst=1; ?>
                            <?php foreach($data as $value):?>

                                <tr class="remove<?php echo $value["dondathang_guid"]?>">

                                    <td> <?php echo $numst++; ?></td>
                                    <td> <?php echo $value["ma_sp"]?> <img src="../item_image/icon_<?php echo $value["hinh_dai_dien"]?>" /> </td>
                                    <td> <?php echo $value["hoten"]?> </td>
                                    <td> <?php echo $value["email"]?> </td>
                                    <td> <?php echo $value["dienthoai"]?> /<?php echo $value["fax"]?> </td>
                                    <td> <?php echo $value["diachi"]?> <br/><?php echo $value["tieude"]?><br/><?php echo $value["noidung"]?>
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-sm cssdelete"  dondathang_guid="<?php echo $value["dondathang_guid"]?>" type="button" >Xóa</button>
                                    </td>

                                </tr>

                            <?php endforeach?>


                    </div>
                </form>
            </div>

        </div>

    </div>
    </div>
</section>
<script src="http://120.72.106.146:66/themes/user-templete/js/jquery.min.js"></script>
<script>
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

        /// $("#myForm").ajaxForm(options);


    });

    $(document).on('click', '.cssdelete', function () {
        dondathang_guid = $(this).attr("dondathang_guid");
        var confirm1 = confirm("Bạn có chắc là muốn xóa?");
        if(confirm1){
            $.get("index.php?r=adminchung/dondathangdelete&dondathang_guid="+dondathang_guid , function (data, status) {
                $('.remove'+dondathang_guid).hide()  ;

            });
        }

    });
</script>

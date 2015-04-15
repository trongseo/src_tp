<section class="content-header">
    <h1>
        <?php echo $this->pageTitle; ?>

    </h1>

</section>
<section class="content  bordertop">
    <div class="row">
        <div class="col-md-6">

            <div class="panel panel-default">

                <div class="panel-body">

                    <div class="form-group">
                        <label for="pass_old"> Mã sản phẩm:</label>
                       TV203
                    </div>
                    <div class="form-group">
                        <label for="pass_new">Chọn màu sắc: </label>
                        <select id="Select1" class="form-control">
                            <?php foreach($dataColor as $value):?>
                            <option value="<?php echo $value["color_id"] ?>" ><?php echo $value["color_name"] ?></option>
                            <?php endforeach?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pass_new">Hình :</label>
                        <input id="File1" type="file" /> <img alt="" src="" />
                    </div>
                    <input class="btn btn-primary btn-lg" name="bsubmit" value=" Lưu " type="submit">
                </div>






            </div>

        </div>
    </div>
</section>


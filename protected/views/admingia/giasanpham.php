<section class="content-header">
    <h1>
        <?php echo $this->pageTitle; ?>

    </h1>

</section>

<script src="http://malsup.github.com/jquery.form.js"></script>
<script src="themes/admin-green/views/js/formatprice.js" type="text/javascript"></script>

<form id="myForm" action="index.php?r=admingia/ajaxupdate" method="post" enctype="multipart/form-data">
<section class="content  bordertop">
    <div class="row">
        <div class="col-md-6">

            <div class="panel panel-default">

                <div class="panel-body">

                    <div class="form-group">
                        <label for="pass_old"> Mã sản phẩm:</label>
                        <?php echo $ma_sp ?>
                    </div>
                    <div class="form-group">
                        <label for="color_id">Chọn màu sắc: </label>
                        <select id="color_id" name="color_id"  class="form-control">
                            <?php foreach($dataColor as $value):?>
                            <option value="<?php echo $value["color_id"] ?>" ><?php echo $value["color_name"] ?></option>
                            <?php endforeach?>
                        </select>

                        <input type="hidden" id="hdsp_price" name="hdsp_price" value="<?php echo $hsTable["hdsp_price"] ?>" />

                        <input type="hidden" id="san_pham_guid" name="san_pham_guid" value="<?php echo $hsTable["san_pham_guid"] ?>" />
                        <input type="hidden" id="san_pham_price_guid" name="san_pham_price_guid" value="<?php echo $hsTable["san_pham_price_guid"]  ?>" />
                    </div>
                    <div class="form-group">
                        <label for="m_size_guid">Chọn kích thước : </label>
                        <select id="m_size_guid" name="m_size_guid"  class="form-control">
                            <?php foreach($datam_size as $value):?>
                                <option value="<?php echo $value["m_size_guid"] ?>" ><?php echo $value["size_text"] ?></option>
                            <?php endforeach?>
                        </select>

                    </div>
                    <div class="form-group">
                        <label for="pass_new">Nhập giá: </label>

                        <input type="text" class="form-control" id="sp_price" name="sp_price" value="<?php echo $hsTable["sp_price"] ?>" />

                    </div>
                    <input class="btn btn-primary btn-lg" name="bsubmit" id="bsubmit" value=" Lưu " type="submit">

                    <a href="index.php?r=myadmin/sanphamlist" class="btn btn-primary btn-lg "  > Quay về</a>
                </div>
<div id="divlist">

</div>
            </div>

        </div>
    </div>
</section>
</form>


<script>

    String.prototype.replaceAll = function (find, replace) {
        var str = this;
        return str.replace(new RegExp(find.replace(/[-\/\\^$*+?.()|[\]{}]/g, '\\$&'), 'g'), replace);
    };
    $(document).ready(function()
    {
        $('#sp_price').priceFormat({
            prefix: '',
            suffix: '',
            centsSeparator: ',', centsLimit: 0,
            thousandsSeparator: '.'
        });


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
              loadAllPrice();loadPrice();

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
        loadAllPrice();
        loadPrice();
    });
    $( "#color_id" ).change(function() {
        loadPrice();
    });
    $( "#m_size_guid" ).change(function() {
        loadPrice();
    });

    Number.prototype.formatMoney = function(c, d, t){
        var n = this,
            c = isNaN(c = Math.abs(c)) ? 2 : c,
            d = d == undefined ? "." : d,
            t = t == undefined ? "," : t,
            s = n < 0 ? "-" : "",
            i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "",
            j = (j = i.length) > 3 ? j % 3 : 0;
        return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
    };

function loadPrice(){

    //$('#divlist').html('loading...');
    m_size_guid=$('#m_size_guid').val();
    color_id=$('#color_id').val();
    san_pham_guid=$("#san_pham_guid").val();
    $.get( "index.php?r=admingia/AjaxGiasanpham&san_pham_guid="+san_pham_guid+"&color_id="+color_id+"&m_size_guid="+m_size_guid, function( data,status ) {
        //"[{"san_pham_price_guid":"F6CB325D_FA65_F414_8643_D267AA6D2317","san_pham_guid":"","color_id":"2","m_size_guid":"AF9397E4_1626_0627_3CF6_2B1D2E9A3D56","sp_price":"12333","date_create":"2015-04-18 17:27:37","date_update":"0000-00-00 00:00:00"}]"

        if(data.length==2){
            $("#san_pham_price_guid").val("");
            $("#sp_price").val("");
            return;
        }else{
            var obj = jQuery.parseJSON(data );//obj[0]["san_pham_price_guid"]: "F6CB325D_FA65_F414_8643_D267AA6D23

            $("#san_pham_price_guid").val(obj[0]["san_pham_price_guid"]);
            sppri = parseFloat( obj[0]["sp_price"]);
            sppri= sppri.formatMoney(0, ',', '.');
            $("#sp_price").val(sppri);


        }

    });
}

    $(document).on('click', '.cssedit', function () {
        guid_id = $(this).attr("guid_id");
        //load data
        //window.location = "admingia/ajaxGiasanphamguid&guid_id="+guid_id;
        $.get( "index.php?r=admingia/ajaxGiasanphamguid&guid="+guid_id+"", function( data,status ) {
            //"[{"san_pham_price_guid":"F6CB325D_FA65_F414_8643_D267AA6D2317","san_pham_guid":"","color_id":"2","m_size_guid":"AF9397E4_1626_0627_3CF6_2B1D2E9A3D56","sp_price":"12333","date_create":"2015-04-18 17:27:37","date_update":"0000-00-00 00:00:00"}]"

            if(data.length==2){
                $("#san_pham_price_guid").val("");
                $("#sp_price").val("");
                return;
            }else{
                var obj = jQuery.parseJSON(data );//obj[0]["san_pham_price_guid"]: "F6CB325D_FA65_F414_8643_D267AA6D23

                $("#san_pham_price_guid").val(obj[0]["san_pham_price_guid"]);//.formatMoney(2, '.', ',');
                sppri = parseFloat( obj[0]["sp_price"]);
                sppri= sppri.formatMoney(0, ',', '.');
                $("#sp_price").val(sppri);
                $("#m_size_guid").val(obj[0]["m_size_guid"]);
                $("#color_id").val(obj[0]["color_id"]);
            }
        });

    });
    function loadPriceGuid(){

        //$('#divlist').html('loading...');
        m_size_guid=$('#m_size_guid').val();
        color_id=$('#color_id').val();
        san_pham_guid=$("#san_pham_guid").val();

    }
    function loadAllPrice(){
        $('#divlist').html('loading...');
        guid_id=$('#san_pham_guid').val();

        $.get("index.php?r=admingia/loadallprice&san_pham_guid="+guid_id +"&color_id=", function (data, status) {
            $('#divlist').html(data);

        });

    }

</script>
<script>
    function var_dump() {
        //  discuss at: http://phpjs.org/functions/var_dump/
        // original by: Brett Zamir (http://brett-zamir.me)
        // improved by: Zahlii
        // improved by: Brett Zamir (http://brett-zamir.me)
        //  depends on: echo
        //        note: For returning a string, use var_export() with the second argument set to true
        //        test: skip
        //   example 1: var_dump(1);
        //   returns 1: 'int(1)'

        var output = '',
            pad_char = ' ',
            pad_val = 4,
            lgth = 0,
            i = 0;

        var _getFuncName = function(fn) {
            var name = (/\W*function\s+([\w\$]+)\s*\(/)
                .exec(fn);
            if (!name) {
                return '(Anonymous)';
            }
            return name[1];
        };

        var _repeat_char = function(len, pad_char) {
            var str = '';
            for (var i = 0; i < len; i++) {
                str += pad_char;
            }
            return str;
        };
        var _getInnerVal = function(val, thick_pad) {
            var ret = '';
            if (val === null) {
                ret = 'NULL';
            } else if (typeof val === 'boolean') {
                ret = 'bool(' + val + ')';
            } else if (typeof val === 'string') {
                ret = 'string(' + val.length + ') "' + val + '"';
            } else if (typeof val === 'number') {
                if (parseFloat(val) == parseInt(val, 10)) {
                    ret = 'int(' + val + ')';
                } else {
                    ret = 'float(' + val + ')';
                }
            }
            // The remaining are not PHP behavior because these values only exist in this exact form in JavaScript
            else if (typeof val === 'undefined') {
                ret = 'undefined';
            } else if (typeof val === 'function') {
                var funcLines = val.toString()
                    .split('\n');
                ret = '';
                for (var i = 0, fll = funcLines.length; i < fll; i++) {
                    ret += (i !== 0 ? '\n' + thick_pad : '') + funcLines[i];
                }
            } else if (val instanceof Date) {
                ret = 'Date(' + val + ')';
            } else if (val instanceof RegExp) {
                ret = 'RegExp(' + val + ')';
            } else if (val.nodeName) { // Different than PHP's DOMElement
                switch (val.nodeType) {
                    case 1:
                        if (typeof val.namespaceURI === 'undefined' || val.namespaceURI === 'http://www.w3.org/1999/xhtml') { // Undefined namespace could be plain XML, but namespaceURI not widely supported
                            ret = 'HTMLElement("' + val.nodeName + '")';
                        } else {
                            ret = 'XML Element("' + val.nodeName + '")';
                        }
                        break;
                    case 2:
                        ret = 'ATTRIBUTE_NODE(' + val.nodeName + ')';
                        break;
                    case 3:
                        ret = 'TEXT_NODE(' + val.nodeValue + ')';
                        break;
                    case 4:
                        ret = 'CDATA_SECTION_NODE(' + val.nodeValue + ')';
                        break;
                    case 5:
                        ret = 'ENTITY_REFERENCE_NODE';
                        break;
                    case 6:
                        ret = 'ENTITY_NODE';
                        break;
                    case 7:
                        ret = 'PROCESSING_INSTRUCTION_NODE(' + val.nodeName + ':' + val.nodeValue + ')';
                        break;
                    case 8:
                        ret = 'COMMENT_NODE(' + val.nodeValue + ')';
                        break;
                    case 9:
                        ret = 'DOCUMENT_NODE';
                        break;
                    case 10:
                        ret = 'DOCUMENT_TYPE_NODE';
                        break;
                    case 11:
                        ret = 'DOCUMENT_FRAGMENT_NODE';
                        break;
                    case 12:
                        ret = 'NOTATION_NODE';
                        break;
                }
            }
            return ret;
        };

        var _formatArray = function(obj, cur_depth, pad_val, pad_char) {
            var someProp = '';
            if (cur_depth > 0) {
                cur_depth++;
            }

            var base_pad = _repeat_char(pad_val * (cur_depth - 1), pad_char);
            var thick_pad = _repeat_char(pad_val * (cur_depth + 1), pad_char);
            var str = '';
            var val = '';

            if (typeof obj === 'object' && obj !== null) {
                if (obj.constructor && _getFuncName(obj.constructor) === 'PHPJS_Resource') {
                    return obj.var_dump();
                }
                lgth = 0;
                for (someProp in obj) {
                    lgth++;
                }
                str += 'array(' + lgth + ') {\n';
                for (var key in obj) {
                    var objVal = obj[key];
                    if (typeof objVal === 'object' && objVal !== null && !(objVal instanceof Date) && !(objVal instanceof RegExp) && !
                        objVal.nodeName) {
                        str += thick_pad + '[' + key + '] =>\n' + thick_pad + _formatArray(objVal, cur_depth + 1, pad_val,
                            pad_char);
                    } else {
                        val = _getInnerVal(objVal, thick_pad);
                        str += thick_pad + '[' + key + '] =>\n' + thick_pad + val + '\n';
                    }
                }
                str += base_pad + '}\n';
            } else {
                str = _getInnerVal(obj, thick_pad);
            }
            return str;
        };

        output = _formatArray(arguments[0], 0, pad_val, pad_char);
        for (i = 1; i < arguments.length; i++) {
            output += '\n' + _formatArray(arguments[i], 0, pad_val, pad_char);
        }

        var isNode = typeof module !== 'undefined' && module.exports;
        if (isNode) {
            return console.log(output);
        }

        var d = this.window.document;

        if (d.body) {
            this.echo(output);
        } else {
            try {
                d = XULDocument; // We're in XUL, so appending as plain text won't work
                this.echo('<pre xmlns="http://www.w3.org/1999/xhtml" style="white-space:pre;">' + output + '</pre>');
            } catch (e) {
                this.echo(output); // Outputting as plain text may work in some plain XML
            }
        }
    }
</script>

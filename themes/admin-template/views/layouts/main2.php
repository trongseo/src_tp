

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head id="ctl00_Head1">

    <title><?php echo isset($this->pageTitle) ? $this->pageTitle : Yii::app()->name; ?></title><link href="themes/admin-template/css/style.css" rel="stylesheet" type="text/css" />

    <style type="text/css">
        .auto-style2 {
            height: 30px;
        }
        .auto-style3 {
            width: 100%;
        }
        #Select1 {
            width: 122px;
        }
        #Select2 {
            width: 122px;
        }
    </style>
</head>
<body>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td colspan="2">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr align="right">
                    <td height="25" colspan="2"><strong>QU&#7842;N L&Yacute; TH&Ocirc;NG TIN WEBSITE</strong>&nbsp;</td>
                </tr>
                <tr bgcolor="#00CCCC">
                    <td width="59%" height="25"><strong></strong></td>
                    <td width="41%" height="25" align="right" >
                        <strong> <a href="index.php?r=login/SignOut" class="style1">Thoát</a>&nbsp; | &nbsp; <a href="index.php?r=Changepass ">&#272;&#7893;i m&#7853;t kh&#7849;u</a>&nbsp;

                        </strong></td>

                </tr>
            </table>


        </td>

    </tr>
    <tr>
        <td width="174" valign="top"  class='lineR' >
            <table width="165" height="455" border="0" cellpadding="1" cellspacing="0">
                <tr id="wlc1">
                    <td width="100%" height="174" valign="top"><table width="165" border="0" align="left" cellpadding="0" cellspacing="2">
                            <tr>
                                <td class="tableheader">Quản lý  chung  </td>
                            </tr>
                            <tr>

                                <td style="padding-left:5px"  ><a href="ContactList.aspx">Danh sách đơn hàng</a></td>
                            </tr>
                            <tr>

                                <td style="padding-left:5px"  ><a href="ContactList.aspx">Danh sách liên hệ</a></td>
                            </tr>

                            <tr>
                                <td class="tableheader">Quản lý sản phẩm</td>
                            </tr>

                            <tr>
                                <td style="padding-left:5px"><a href="ItemDetailManage.aspx">Thêm sản phẩm </a></td>
                            </tr>
                            <tr>

                                <td style="padding-left:5px"><a href="amItemListNo.aspx">Danh sách sản phẩm </a></td>
                            </tr>


                            <tr>
                                <td class="tableheader">Quản lý danh mục</td>
                            </tr>
                            <tr>
                                <td style="padding-left:5px"><a href="GroupItemList.aspx?ParentGroupItemId=6">Thêm danh mục </a></td>
                            </tr>
                            <tr>
                                <td style="padding-left:5px"><a href="GroupItemList.aspx?ParentGroupItemId=6">Danh sách danh mục </a></td>
                            </tr>
                            <tr>
                                <td class="tableheader">Quản lý hỗ trợ kỹ thuật</td>
                            </tr>

                            <tr>
                                <td style="padding-left:5px"><a href="ItemDetailManage.aspx">Thêm hỗ trợ </a></td>
                            </tr>

                            <tr>
                                <td style="padding-left:5px"><a href="ItemDetailManage.aspx">Danh sách hỗ trợ </a></td>
                            </tr>
                            <tr>
                                <td class="tableheader">Quản lý khác</td>
                            </tr>


                            <tr>
                                <td style="padding-left:5px"><a href="MyInfoManage.aspx?Id=1">Cập nhật giới thiệu </a></td>
                            </tr>



                            <tr>
                                <td style="padding-left:5px">&nbsp;</td>
                            </tr>



                        </table></td>
                </tr>

                <tr id="wlc2">
                    <td valign="top"></td>
                </tr>
                <tr id="Tr1" style="display: none">
                    <td valign="top"></td>
                </tr>
                <tr id="wlc3" style="display: none">
                    <td valign="top">&nbsp;</td>
                </tr>

                <tr id="wlc4" style="display: none">
                    <td valign="top">&nbsp;</td>
                </tr>
                <tr id="wlc6" style="display: none">
                    <td valign="top"></td>
                </tr>
                <tr style="display:none">
                    <td>&nbsp;</td>
                </tr>

                <tr style="display: none">
                    <td>&nbsp;</td>
                </tr>
            </table>
        </td>
        <td width="" valign="top" style="padding-left:5px">

                <div>
                 </div>





                <div>

                    <table width="100%" height="100%" border="0" align="left" cellpadding="4" cellspacing="1">
                   
                        <tr>
                            <td>
							
							
							<!-- Page Content -->
                                <?php echo $content ?>

                                <!-- /#page-wrapper -->
                            </td>
                        </tr>
                    </table>

                </div>

        </td>
    </tr>
    <tr>
        <td colspan="2">
            <table width="100%" border="0" cellpadding="0" cellspacing="0" >
                <tr>
                    <td  height="5" > </td>
                </tr>
                <tr>
                    <td width="100%" align="center" valign="top" class="lineT"> Copyright © 2015
                        All Rights Reserved. </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>

<%@ Page Language="C#" AutoEventWireup="true" CodeFile="danhsachdonhang.aspx.cs" Inherits="admin_Default" %>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head id="ctl00_Head1">
    <base href="http://nhatminhglasstech.com/adminmodule/">
    <title>
	Admin DSS
</title><link href="http://nhatminhglasstech.com/adminmodule/css/style.css" rel="stylesheet" type="text/css" />
 <script type="text/javascript" src="http://nhatminhglasstech.com/adminmodule/js/CheckBox.js"></script>
    <script type="text/javascript" src="http://nhatminhglasstech.com/adminmodule/js/general.js"></script>
    <style type="text/css">
        .auto-style1 {
            width: 100%;
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
      <strong> <a href="login.aspx?from=logout" class="style1">Tho&aacute;t</a>&nbsp; | &nbsp; <a href="ChangePassword.aspx">&#272;&#7893;i m&#7853;t kh&#7849;u</a>&nbsp; 
      
      </strong></td>

  </tr>
</table>

					
    </td>

  </tr>
  <tr> 
    <td width="18%" valign="top"  class='lineR' > 
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
    <td width="82%" valign="top" style="padding-left:5px">  <form name="aspnetForm" method="post" action="ContactList.aspx" id="aspnetForm">
<div>
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTIwNDkwMjI5NA9kFgJmD2QWAgIFD2QWAgIBD2QWBgIDDzwrABEDAA8WBB4LXyFEYXRhQm91bmRnHgtfIUl0ZW1Db3VudGZkARAWABYAFgAMFCsAAGQCBQ8PZA8QFgRmAgECAgIDFgQWAh4OUGFyYW1ldGVyVmFsdWVkFgIfAmQWAh8CZBYCHwJkFgQCBAIEAgMCA2RkAgsPD2QWAh4Hb25jbGljawUhcmV0dXJuIGNvbmZpcm1EZWxldGUgKHRoaXMuZm9ybSk7ZBgBBSNjdGwwMCRDb250ZW50UGxhY2VIb2xkZXIxJEdyaWRWaWV3MQ88KwAMAQhmZArS1k97cnE7qTTzdqPhepdi3dQZZaJ1PWSoUxMl8HAV" />
</div>


<script type="text/javascript">
    //<![CDATA[
    var currentPage = 1; var pageSize = 25; var pageCount = 0; var navigateGroupSize = 10; var baseNavigateURL = 'http://nhatminhglasstech.com/adminmodule/ContactList.aspx'; var adder = '?'; pageCount = 0;//]]>
</script>

<div>

	<input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="13A1398B" />
	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAIdLHzOAnvHZuZqjZZpM2iJFjBpwZe11KRVHuQE0/r4ZGojaExW2V53HcBHunWdoz9CO3Vqj78ZBh3NIaYltDH3" />
</div>
    <div>
        
  <table width="100%" height="100%" border="0" align="left" cellpadding="4" cellspacing="1">
        <tr valign="bottom">
            <td width="100%">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="2%" height="22">
                            <img src="images/titlevector.jpg" width="20" height="18" align="absMiddle"></td>
                        <td width="6%" height="22" nowrap background="images/title_front.jpg">
                            <b>
                                Danh sách đơn hàng </b></td>
                        <td width="92%" height="22" style="background-image: url(images/title_back.jpg)">
                            </td>
                    </tr>
                    <tr>
                        <td height="10">
                        </td>
                        <td height="10" nowrap>
                        </td>
                        <td height="10">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                   <table width="100%" cellspacing="0" cellpadding="0" border="0" class="greenboxmain" style="border-collapse: collapse;table-layout:fixed">
        <tr>
            <td>
                <div>

</div>
                
                <span id="ctl00_ContentPlaceHolder1_LabelReport" style="display:inline-block;width:351px;">
                <table class="auto-style1">
                    <tr>
                        <td>STT</td>
                        <td>Mã sản phẩm</td>
                        <td>Giá</td>
                        <td>....</td>
                        <td>Tên KH</td>
                        <td>Chi tiết</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>TV113-x</td>
                        <td>2.500.000</td>
                        <td>.....</td>
                        <td>Nguyễn Van A</td>
                        <td>Xem chi tiết</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
                </span></td>
        </tr>
        <tr>
            <td class="whiteline" style="height:5px"></td>
        </tr>
        <tr>
            <td class="gridheader">
<script type="text/javascript" src="js/PageNavigator.js"  ></script>
<table width="100%" border="0" style="border-collapse:collapse">
    <tr>
        <td class="alphabet" align="center" valign="bottom"><script type="text/javascript">CreateNavigationPanel(currentPage, pageSize, pageCount, navigateGroupSize, baseNavigateURL, adder);</script></td>
    </tr>
</table></td>
        </tr>
        <tr>
            <td>
                <table width="100%" cellpadding="0" border="0" style="border-collapse: collapse;table-layout:fixed;margin-left:5px">
                    <tr>
                        <td><input type="submit" name="ctl00$ContentPlaceHolder1$BtnDelete" value="Xoá" onclick="return confirmDelete(this.form);" id="ctl00_ContentPlaceHolder1_BtnDelete" class="button" style="width:72px;" /></td>
                        <td align="right"></td>
                    </tr>
                </table>
                <table style="width: 719px">
                    <tr>
                        <td colspan="3">
                        </td>
                    </tr>
                    
                </table>
           </td>
        </tr>
    </table>
            </td>
        </tr>
    </table>

    </div>
    </form>
    </td>
  </tr>
  <tr> 
    <td colspan="2">
      <table width="100%" border="0" cellpadding="0" cellspacing="0" >
  <tr> 
    <td  height="5" > </td>
  </tr>
  <tr> 
    <td width="100%" align="center" valign="top" class="lineT"> Bản quyền thuộc </td>
  </tr>
</table>

    </td>
  </tr>
</table>
</body>
</html>

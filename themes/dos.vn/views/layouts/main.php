<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="vi, en" />
    <meta name="revisit-after" content="1 days" />
    <meta name="robots" content="noodp,index,follow" />
    <link rel="SHORTCUT ICON" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/images/favicon.ico" type="image/gif" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/dosvn.css" />

    <title><?php echo CHtml::encode($this->pageTitle); ?><?php echo ($this->title) ? ' - '.CHtml::encode($this->title) : '' ?>ddddddddddddddddddddddd</title>
    <meta name="keywords" content="<?php echo $this->keywords ?>" />
    <meta name="description" content="<?php echo $this->description ?>" />

    <?php if(($this->id == 'site') && ($this->action->id == 'index')):?>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/advanced-slider-base.css" />
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.advancedSlider.min.js"></script>
        <!--[if IE]><script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/excanvas.compiled-ie.js"></script><![endif]-->
        <!--[if lt IE 8]><script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.sider.banner-ie.js"></script> <![endif]-->
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.sider.banner.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                runbanner(254,178);
            });
        </script>
    <?php endif?>
<?php echo $this->analytics?>
</head>
<body>
<div id="wrapper">
	<div class="top-page">
    	<div class="left-top">
            <?php if(Yii::app()->user->isGuest):?>
                <a class="register" href="<?php echo Yii::t('main', 'msgButton')?>" title="<?php echo Yii::t('main', 'register')?>"><?php echo Yii::t('main', 'register')?></a> <a class="login" href="/admin" title="<?php echo Yii::t('main', 'login')?>"><?php echo Yii::t('main', 'login')?></a>
            <?php else:?>
                Chào <strong><?php echo Yii::app()->user->name?></strong>  <a class="welcome login" href="/admin" title="Admin">Admin</a> <a class="register" href="/<?php echo Yii::t('main', 'logout.link')?>"><?php echo Yii::t('main', 'logout.name')?></a>
            <?php endif;?>
        </div>
        <form class="frm-test" action="/site/check" method="post">
        	<label>www.</label>
        	<input type="text" name="name" size="25" value=" kiểm tra tên miền" onblur="if(this.value=='') this.value=' kiểm tra tên miền'" onfocus="if(this.value ==' kiểm tra tên miền') this.value=''" />
            <select name="domain">
                <option value="all">tất cả</option>
            	<option value=".com">.com</option>
                <option value=".net">.net</option>
                <option value=".org">.org</option>
                <option value=".info">.info</option>
                <option value=".com.vn">.com.vn</option>
                <option value=".vn">.vn</option>
            </select>
            <input type="submit" class="bt-test" value="kiểm tra" title="kiểm tra" />
        </form> <div class="clear"></div>
    </div> <!--End top page-->
    <div id="header">
    	<div id="logo"><a href="<?php echo Yii::app()->request->baseUrl.'/'.Yii::app()->session['lang']?>" title="Home page"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo.png" alt="Logo" /></a></div>
        <ul id="nav">
            <li class="home-page"><a<?php echo (Yii::app()->controller->id == 'site' && ($this->action->id == 'index')) ? '' : ''?> href="<?php echo Yii::app()->request->baseUrl.'/'.Yii::app()->session['lang']?>" title="<?php echo Yii::t('main', 'home')?>"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/home.png" alt="home page" /></a></li>
            <li><a<?php echo (Yii::app()->controller->id == 'templates') ? ' class="select"' : ''?> href="<?php echo LANGURL.'/'.Yii::t('main', 'templates.link')?>" title="<?php echo Yii::t('main', 'templates.name')?>"><span><?php echo Yii::t('main', 'templates.name')?></span></a>
                <ul>
                    <?php foreach($this->businessLists as $value):?>
                    <li><a href="<?php echo Yii::app()->session['langUrl'] . '/'.Yii::t('main', 'templates.link').'/'. $value['bussiness_id']?>" title="<?php echo $value['bussiness_name']?>"><?php echo $value['bussiness_name']?></a></li>
                    <?php endforeach?>
                </ul>
			</li>
            <li><a<?php echo (Yii::app()->controller->id == 'servicesus') ? ' class="select"' : ''?> href="<?php echo LANGURL.'/'.Yii::t('main', 'services.link')?>" title="<?php echo Yii::t('main', 'services.name')?>"><span><?php echo Yii::t('main', 'services.name')?></span></a>
                <ul>
                <?php foreach($this->servicesLists as $value):?>
                    <li><a href="<?php echo Yii::app()->session['langUrl'] . '/'. Yii::t('main', 'services.link')?>/<?php echo $value['tag'.LANG]?>.html" title="<?php echo $value['title'.LANG]?>"><?php echo $value['title'.LANG]?></a></li>
                <?php endforeach?>
                </ul>
            </li>
            <li><a<?php echo (Yii::app()->controller->id == 'articles') ? ' class="select"' : ''?> href="<?php echo LANGURL.'/'.Yii::t('main', 'articles.link')?>" title="<?php echo Yii::t('main', 'articles.name')?>"><span><?php echo Yii::t('main', 'articles.name')?></span></a></li>
            <li><a<?php echo (Yii::app()->controller->id == 'customers') ? ' class="select"' : ''?> href="<?php echo LANGURL.'/'.Yii::t('main', 'customers.link')?>" title="<?php echo Yii::t('main', 'customers.name')?>"><span><?php echo Yii::t('main', 'customers.name')?></span></a>
                <ul>
                    <?php foreach($this->businessLists as $value):?>
                    <li><a href="<?php echo Yii::app()->session['langUrl'] . '/'.Yii::t('main', 'customers.link').'/'. $value['bussiness_id']?>" title="<?php echo $value['bussiness_name']?>"><?php echo $value['bussiness_name']?></a></li>
                    <?php endforeach?>
                </ul>
            </li>
            <li><a<?php echo (Yii::app()->controller->id == 'tutorial') ? ' class="select"' : ''?> href="<?php echo LANGURL.'/'.Yii::t('main', 'tutorial.link')?>" title="<?php echo Yii::t('main', 'tutorial.name')?>"><span><?php echo Yii::t('main', 'tutorial.name')?></span></a></li>
            <li><a<?php echo (Yii::app()->controller->id == 'features') ? ' class="select"' : ''?> href="<?php echo LANGURL.'/'.Yii::t('main', 'features.link')?>" title="<?php echo Yii::t('main', 'features.name')?>"><span><?php echo Yii::t('main', 'features.name')?></span></a></li>
            <li class="none-line<?php echo (($this->id == 'site') && ($this->action->id == 'contact')) ? ' select' : '' ?>"><a href="<?php echo LANGURL.'/'.Yii::t('main', 'contact.link')?>" title="<?php echo Yii::t('main', 'contact.name')?>" ><span><?php echo Yii::t('main', 'contact.name')?></span></a></li>
        </ul> <div class="clear"></div>
	</div> <!--End header-->
    
	<?php echo $content; ?>

</div><!--End wrapper-->
<div class="bt-page">
	<div class="footer">
    	<div class="tent-footer">
			<div class="logo-fter"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/logo-footer.png" alt="Logo footer" /></div>
            <!-- <ul id="nav-fter">
            	<li class="left row-1">
                	<h4>Thiết kế website</h4>
                    <p><a href="#" title="">Tạo web trực tuyến</a></p>
                    <p><a href="#" title="">Thiết kế web theo nhu cầu</a></p>
                    <p><a href="#" title="">Tối ưu hóa website</a></p>
                    <p><a href="#" title="">Nâng cấp website</a></p>
                    <p><a href="#" title="">Gia công website</a></p>
                </li>
                <li class="left row-2">
                	<div class="tent-nav-fter">
                        <h4>Quảng cáo trực tuyến</h4>
                        <?php foreach($this->servicesLists as $value):?>
                            <p><a href="<?php echo Yii::app()->session['langUrl'] . '/'. Yii::t('main', 'services.link')?>/<?php echo $value['tag'.LANG]?>.html" title="<?php echo $value['title'.LANG]?>"><?php echo $value['title'.LANG]?></a></p>
                        <?php endforeach?>
                    </div>
                </li>
                <li class="left row-5">
                	<div class="tent-nav-fter">
                        <h4>Tên miền</h4>
                        <p><a href="#" title="">Kiểm tra tên miền</a></p>
                        <p><a href="#" title="">Bảng giá tên miền</a></p>
                    </div>
                </li>
                <li  class="left row-4">
                	<div class="tent-nav-fter">
                        <h4>Mẫu website</h4>
                        <p><a href="#" title="">Doanh nghiệp</a></p>
                        <p><a href="#" title="">Nhóm bạn</a></p>
                        <p><a href="#" title="">Cá nhân</a></p>
                    </div>    
                </li>
                <li  class="left row-5">
                    <div class="tent-nav-fter">
                        <h4>Đại lý</h4>
                        <p><a href="#" title="">Chính sách trả thưởng</a></p>
                        <p><a href="#" title="">Danh sách đại lý</a></p>
                        <p><a href="#" title="">Đăng ký làm đại lý</a></p>
                    </div>
                </li>
                <li  class="left row-6">
                	<div class="tent-nav-fter">
                        <h4>Support</h4>
                        <p><a href="#" title="">Hướng dẫn</a></p>
                        <p><a href="#" title="">Kỹ thuật</a></p>
                        <p><a href="#" title="">Kế toán</a></p>
                	</div>
                </li>
                <li class="row-7">
                    <div class="tent-nav-fter">
                        <h4>Về chúng tôi</h4>
                        <?php foreach($this->aboutLists as $value):?>
                            <p><a href="<?php echo Yii::app()->session['langUrl'] . '/'. Yii::t('main', 'about.link')?>/<?php echo $value['tag'.LANG]?>.html" title="<?php echo $value['title'.LANG]?>"><?php echo $value['title'.LANG]?></a></p>
                        <?php endforeach?>
                    </div>
                </li>
            </ul> <div class="clear"></div> -->
		</div>
    </div>
    <div class="copyright">
    	<div class="tent-copyright">
    		<p>&copy; <?php echo date('Y')?> Dos.vn. All Rights Reserved</p>
        </div>
	</div>
</div>
</body>
</html>
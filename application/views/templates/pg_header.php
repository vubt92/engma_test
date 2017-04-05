<html>
<head>
<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta name="keywords" content="<?php echo isset($news_id)?$this->lang->line('key_word'.$news_id): 'Engma';?>">
<meta name="author" content="engma.com.vn">
<meta name="copyright" content="Copyright © 2015 by engma.com.vn">
<meta name="abstract" content="">
<meta name="title" content="<?php echo isset($news_id)?$this->lang->line('title'.$news_id):'ENGMA Engineering Services Trading Company Limited'; ?>">
<meta name="description"  content="<?php echo  isset($news_id)?$this->lang->line('description'.$news_id):'Công ty TNHH Thương Mại Dịch Vụ Kỹ Thuật ENGMA';?>">

<?php if (isset($news_id) && $this->lang->line('title'.$news_id)):?>
    <title><?php echo $this->lang->line('title'.$news_id); ?></title>
    <?php else: ?>
    <title><?php echo $this->lang->line('title');?></title>
<?php endif;?>

<link rel="stylesheet" type="text/css" media="all" href="<?php echo $common_val['base_url'];?>assets/css/headers/header-default.css">
<script type="text/javascript" src="<?php echo base_url();?>assets/js/app.js"></script>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" type="image/x-icon">

<!-- Web Fonts -->
<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

<!-- CSS Global Compulsory -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">

<!-- CSS Header and Footer -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/headers/header-default.css">
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/footers/footer-v1.css">

<?php
		if (!empty($extra_css_file))
			require_once(PG_HEADER_EXTRA_URI.$extra_css_file.PHP_EXT);
?>

<!-- CSS Customization -->
<link rel="stylesheet" href="<?php echo $common_val['base_url'];?>assets/css/custom.css">

<!-- JS Global Compulsory -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/plugins/smoothScroll.js"></script>

<?php
		if (!empty($first_extra_js_file))
			require_once(PG_HEADER_EXTRA_URI.$first_extra_js_file.PHP_EXT);
?>
<!-- JS Customization -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/app.js"></script>
<?php
		if (!empty($second_extra_js_file))
			require_once(PG_HEADER_EXTRA_URI.$second_extra_js_file.PHP_EXT);
?>
</head>
<body>

<!-- Common vars -->
<input type="hidden" id="cur_lang" value="<?php echo $lang;?>"/>


<div class="wrapper">

<!--=== Header ===-->
<div class="header">
    <div class="container">
        <!-- Logo -->
        <a class="logo" href="<?php echo $common_val['base_url'];?>">
            <img src="<?php echo  base_url();?>assets/img/logo1-default.png" alt="Logo">
        </a>
        <!-- End Logo -->

        <!-- Topbar -->
        <div class="topbar">
            <ul class="loginbar pull-right">
                <li class="hoverSelector">
                    <i class="fa fa-globe"></i>
                    <a>Languages</a>
                    <ul class="languages hoverSelectorBlock">
                        <li class="<?php if(!empty($lang) && $lang==LANG_VN) echo 'active';?>">
                            <a href="?lang=vn"> Tiếng Việt<i class="<?php if(!empty($lang) && $lang==LANG_VN) echo 'fa fa-check';?>"></i></a>
                        </li>
                        <li class="<?php if(!empty($lang) && $lang==LANG_EN) echo 'active';?>">
                        	<a href="?lang=en">English<i class="<?php if(!empty($lang) && $lang==LANG_EN) echo 'fa fa-check';?>"></i></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- End Topbar -->

        <!-- Toggle get grouped for better mobile display -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-bars"></span>
        </button>
        <!-- End Toggle -->
    </div><!--/end container-->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
        <div class="container">
            <ul class="nav navbar-nav">
                <li class="<?php if (!empty($mn_home_active)) echo $mn_home_active; ?>"><a href="<?php echo $common_val['base_url'];?>"><?php echo $this->lang->line('mn_home');?></a></li>
                <li class="<?php if (!empty($mn_about_us_active)) echo $mn_about_us_active; ?>"><a href="<?php echo $common_val['base_url'];?>home/showAboutUs"><?php echo $this->lang->line('mn_about_us');?></a></li>
                <li class="<?php if (!empty($mn_services_active)) echo $mn_services_active; ?>"><a href="<?php echo $common_val['base_url'];?>home/showServices"><?php echo $this->lang->line('mn_service');?></a></li>
                <li class="<?php if (!empty($mn_clients_active)) echo $mn_clients_active; ?>"><a href="<?php echo $common_val['base_url'];?>home/showClients"><?php echo $this->lang->line('mn_client');?></a></li>
                <li class="<?php if (!empty($mn_news_active)) echo $mn_news_active; ?>"><a href="<?php echo $common_val['base_url'];?>tin-tuc"><?php echo $this->lang->line('mn_news');?></a></li>
                <li class="<?php if (!empty($mn_recruit_active)) echo $mn_recruit_active; ?>"><a href="<?php echo $common_val['base_url'];?>home/showRecruitment"><?php echo $this->lang->line('mn_recruit');?></a></li>
                <li class="<?php if (!empty($mn_contact_active)) echo $mn_contact_active; ?>"><a href="<?php echo $common_val['base_url'];?>home/showContact"><?php echo $this->lang->line('mn_contact');?></a></li>
            </ul>
        </div><!--/end container-->
    </div><!--/navbar-collapse-->
</div>
<!--=== End Header ===-->



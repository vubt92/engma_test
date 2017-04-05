
    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row">
            <div class="col-md-6 text_justify">
            	<h2><b><?php echo $this->lang->line('title-v1');?></b></h2>
                <p><?php echo $this->lang->line('content-title-v2');?></p>
                <p><?php echo $this->lang->line('content-title-v2-line');?></p>
                <p><?php echo $this->lang->line('content-title-v2-line1');?></p>
                
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo $common_val['base_url'];?>assets/img/mockup/service.jpg" alt="">
            </div>
        </div>
    </div><!--/container-->
    <!--=== End Content Part ===-->


    <!--=== Service Blocks ===-->
    <div class="container content-sm">
        <div class="text-center margin-bottom-50">
            <h2 class="title-v2 title-center"><?php echo $this->lang->line('title-v2');?></h2>
        </div>

        <div class="row content-boxes-v4 content-boxes-v4-sm margin-bottom-30">
        	<div class="col-md-4">
                <i class="pull-left icon-screen-desktop margin-right-10"></i>
                <div class="content-boxes-in-v4 text_justify">
                    <h2><?php echo $this->lang->line('service9');?></h2>
					<p><?php echo $this->lang->line('content-service9');?></p>
                </div>
            </div>
            <div class="col-md-4 md-margin-bottom-40">
                <i class="pull-left icon-screen-smartphone margin-right-10"></i>
                <div class="content-boxes-in-v4 text_justify">
                    <h2><?php echo $this->lang->line('service7');?></h2>
					<p><?php echo $this->lang->line('content-service7');?></p>
                </div>
            </div>
            <div class="col-md-4 md-margin-bottom-40">
                <i class="pull-left icon-globe margin-right-10"></i>
                <div class="content-boxes-in-v4 text_justify">
                    <h2><?php echo $this->lang->line('service8');?></h2>
					<p><?php echo $this->lang->line('content-service8');?></p>
                </div>
            </div>
        </div>
        <hr>
        
        <div class="row content-boxes-v4 content-boxes-v4-sm margin-bottom-30">
        	<div class="col-md-4">
                <i class="pull-left icon-bulb"></i>
                <div class="content-boxes-in-v4 text_justify">
                    <h2><?php echo $this->lang->line('service3');?></h2>
					<p><?php echo $this->lang->line('content-service3');?></p>
                </div>
            </div>
            <div class="col-md-4 md-margin-bottom-40">
                <i class="pull-left icon-badge"></i>
                <div class="content-boxes-in-v4 text_justify">
                    <h2><?php echo $this->lang->line('service1');?></h2>
					<p><?php echo $this->lang->line('content-service1');?></p>
                </div>
            </div>
            <div class="col-md-4 md-margin-bottom-40">
                <i class="pull-left icon-home"></i>
                <div class="content-boxes-in-v4 text_justify">
                	<h2><?php echo $this->lang->line('service2');?></h2>
					<p><?php echo $this->lang->line('content-service2');?></p>
                </div>
            </div>
        </div>

	<!-- 
        <hr>

        <div class="row content-boxes-v4 content-boxes-v4-sm">
            <div class="col-md-4 md-margin-bottom-40">
                <i class="pull-left icon-wrench"></i>
                <div class="content-boxes-in-v4 text_justify">
                    <h2><?php echo $this->lang->line('service4');?></h2>
                    <p><?php echo $this->lang->line('content-service4');?></p>
                </div>
            </div>
            <div class="col-md-4 md-margin-bottom-40">
                <i class="pull-left icon-plane"></i>
                <div class="content-boxes-in-v4 text_justify">
                    <h2><?php echo $this->lang->line('service5');?></h2>
                    <p><?php echo $this->lang->line('content-service5');?></p>
                </div>
            </div>
            <div class="col-md-4">
                <i class="pull-left icon-graduation"></i>
                <div class="content-boxes-in-v4 text_justify">
                    <h2><?php echo $this->lang->line('service6');?></h2>
                    <p><?php echo $this->lang->line('content-service6');?></p>
                </div>
            </div>
        </div>
        -->
	</div>
	
    <!--=== End Service Blocks ===-->


    <!--=== Cube Portfolio ===-->
    <div class="container content-sm">
        <div class="text-center margin-bottom-30">
            <h2 class="title-v2 title-center"><?php echo $this->lang->line('title-project');?></h2>
<!--             <p class="space-lg-hor">If you are going to use a <span class="color-green">passage of Lorem Ipsum</span>, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making <span class="color-green">this the first</span> true generator on the Internet.</p> -->
        </div>

        <div class="cube-portfolio container margin-bottom-20">
        	<!-- 
            <div class="margin-bottom-30">
                <div id="filters-container" class="cbp-l-filters-text">
                    <div data-filter="*" class="cbp-filter-item-active cbp-filter-item"> <?php echo $this->lang->line('all');?> </div> |
                    <div data-filter=".mobile" class="cbp-filter-item"> <?php echo $this->lang->line('activities1');?> </div> |
                    <div data-filter=".web" class="cbp-filter-item"> <?php echo $this->lang->line('activities5');?> </div> |
                    <div data-filter=".pc" class="cbp-filter-item"> <?php echo $this->lang->line('activities6');?> </div> |
                    <div data-filter=".air" class="cbp-filter-item"> <?php echo $this->lang->line('activities2');?> </div> |
                    <div data-filter=".construct" class="cbp-filter-item"> <?php echo $this->lang->line('activities7');?> </div> 
                </div>
            </div>
 			-->
            <div id="grid-container" class="cbp-l-grid-gallery">
                <div class="cbp-item mobile"> <!-- IT -->
                    <a href="<?php echo $common_val['base_url'];?>services/showProject1" class="cbp-caption cbp-singlePageInline"
                       data-title="World Clock Widget<br>by Engma">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?php echo $common_val['base_url'];?>assets/img/portfolio/0001.png" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body text_justify">
                                    <div class="cbp-l-caption-title"><?php echo $this->lang->line('name-project1');?></div>
                                    <div class="cbp-l-caption-desc"><?php echo $this->lang->line('field-IT');?></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item mobile web pc">
                    <a href="<?php echo $common_val['base_url'];?>services/showProject2" class="cbp-caption cbp-singlePageInline"
                       data-title="Bolt UI<br>by Engma">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?php echo $common_val['base_url'];?>assets/img/portfolio/check-in-office.png" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body text_justify">
                                    <div class="cbp-l-caption-title"><?php echo $this->lang->line('name-project4');?></div>
                                    <div class="cbp-l-caption-desc"><?php echo $this->lang->line('field-IT');?></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item web mobile">
                    <a href="<?php echo $common_val['base_url'];?>services/showProject3" class="cbp-caption cbp-singlePageInline"
                       data-title="WhereTO App<br>by Engma">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?php echo $common_val['base_url'];?>assets/img/portfolio/Kaleidoscope.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body text_justify">
                                    <div class="cbp-l-caption-title"><?php echo $this->lang->line('name-project2');?></div>
                                    <div class="cbp-l-caption-desc"><?php echo $this->lang->line('field-IT');?></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                
                <!-- 
                <div class="cbp-item web mobile pc">
                    <a href="<?php echo $common_val['base_url'];?>services/showProject4" class="cbp-caption cbp-singlePageInline"
                       data-title="iDevices<br>by Engma">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?php echo $common_val['base_url'];?>assets/img/portfolio/0001.png" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body text_justify">
                                    <div class="cbp-l-caption-title"><?php echo $this->lang->line('name-project5');?></div>
                                    <div class="cbp-l-caption-desc"><?php echo $this->lang->line('field-IT');?></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item construct">
                    <a href="<?php echo $common_val['base_url'];?>services/showProject5" class="cbp-caption cbp-singlePageInline"
                       data-title="Seemple* Music for iPad<br>by Engma">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?php echo $common_val['base_url'];?>assets/img/portfolio/vanphong.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body text_justify">
                                    <div class="cbp-l-caption-title"><?php echo $this->lang->line('name-project6');?></div>
                                    <div class="cbp-l-caption-desc"><?php echo $this->lang->line('activities7');?></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="cbp-item air">
                    <a href="<?php echo $common_val['base_url'];?>services/showProject6" class="cbp-caption cbp-singlePageInline"
                       data-title="Remind~Me Widget<br>by Engma">
                        <div class="cbp-caption-defaultWrap">
                            <img src="<?php echo $common_val['base_url'];?>assets/img/portfolio/aircraft.jpg" alt="">
                        </div>
                        <div class="cbp-caption-activeWrap">
                            <div class="cbp-l-caption-alignLeft">
                                <div class="cbp-l-caption-body text_justify">
                                    <div class="cbp-l-caption-title"><?php echo $this->lang->line('name-project3');?></div>
                                    <div class="cbp-l-caption-desc"><?php echo $this->lang->line('activities2');?></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                -->
                
                
            </div><!--/end Grid Container-->
        </div>
    </div>
    <!--=== End Cube Portfolio ===-->

    <!--=== Call To Action ===-->
    <div class="call-action-v1 bg-grey">
        <div class="container">
            <div class="call-action-v1-box">
                <div class="call-action-v1-in text_justify">
                    <p><?php echo $this->lang->line('sv-end');?></p>
                </div>
                <div class="call-action-v1-in inner-btn page-scroll">
                </div>
            </div>
        </div>
    </div>
    <!--=== End Call To Action ===-->
<script type="text/javascript" src="<?php echo $common_val['base_url'];?>assets/js/plugins/cube-portfolio/cube-portfolio-lightbox.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initCounter();
        App.initParallaxBg();
    });
</script>
<!--[if lt IE 9]>
    <script src="<?php echo $common_val['base_url'];?>assets/plugins/respond.js"></script>
    <script src="<?php echo $common_val['base_url'];?>assets/plugins/html5shiv.js"></script>
    <script src="<?php echo $common_val['base_url'];?>assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->


<!--=== Content Part ===-->
<div class="container content">
	<div class="title-box-v2">
		<h2>
			<?php echo $this->lang->line('about');?> <span class="color-green">ENGMA</span>
		</h2>
		<p><?php echo $this->lang->line('slogan');?></p>
		<p><?php echo $this->lang->line('criteria');?></p>
	</div>
	<!-- About Sldier -->
	<div class="shadow-wrapper margin-bottom-50">
		<div class="carousel slide carousel-v1 box-shadow shadow-effect-2"
			id="myCarousel">
			<ol class="carousel-indicators">
				<li class="rounded-x active" data-target="#myCarousel"
					data-slide-to="0" class="active"></li>
				<li class="rounded-x" data-target="#myCarousel" data-slide-to="1"></li>
				<li class="rounded-x" data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive"
						src="<?php echo $common_val['base_url'];?>assets/img/sliders/12.png"
						alt="">
				</div>
				<div class="item">
					<img class="img-responsive"
						src="<?php echo $common_val['base_url'];?>assets/img/sliders/11.png"
						alt="">
				</div>
				<div class="item">
					<img class="img-responsive"
						src="<?php echo $common_val['base_url'];?>assets/img/sliders/10.png"
						alt="">
				</div>
			</div>

			<div class="carousel-arrow">
				<a data-slide="prev" href="#myCarousel"
					class="left carousel-control"> <i class="fa fa-angle-left"></i>
				</a> <a data-slide="next" href="#myCarousel"
					class="right carousel-control"> <i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
	<!-- End About Sldier -->
</div>
<!--=== End Content Part ===-->

<!--=== Parallax About Block ===-->
<div class="parallax-bg parallaxBg1">
	<div class="container content parallax-about">
		<div class="title-box-v2">
			<h2>
				<?php echo $this->lang->line('about');?> <span class="color-green"><?php echo $this->lang->line('about_company');?></span>
			</h2>
			<p class="text_justify"><?php echo $this->lang->line('about_content');?></p>
		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="banner-info dark margin-bottom-10">
					<i class="rounded-x icon-bell"></i>
					<div class="overflow-h">
						<h3><?php echo $this->lang->line('we_are');?></h3>
						<p class="text_justify"><?php echo $this->lang->line('our_we_are_content');?></p>
					</div>
				</div>
				<div class="banner-info dark margin-bottom-10">
					<i class="rounded-x fa fa-magic"></i>
					<div class="overflow-h">
						<h3><?php echo $this->lang->line('we_do');?></h3>
						<p class="text_justify"><?php echo $this->lang->line('our_vision_content');?></p>
					</div>
				</div>
				<div class="banner-info dark margin-bottom-10">
					<i class="rounded-x fa fa-thumbs-o-up"></i>
					<div class="overflow-h">
						<h3><?php echo $this->lang->line('good_at');?></h3>
						<p class="text_justify"><?php echo $this->lang->line('good_at_content');?></p>
					</div>
				</div>
				<div class="margin-bottom-20"></div>
			</div>
			<div class="col-md-6">
				<img src="<?php echo $common_val['base_url'];?>assets/img/main/img6.jpg" class="img-responsive margin-bottom-10" alt="">
			</div>
		</div>
	</div>
	</div>
<!--/container-->
	
    <!--=== Container Part ===-->
    <div class="container content">
        <div class="title-box-v2">
            <h2><?php echo $this->lang->line('company_life_title');?></h2>
            <p></p>
        </div>

        <div class="row">
            <!-- Begin Easy Block v2 -->
            <div class="col-md-3 col-sm-6 md-margin-bottom-20">
                <div class="simple-block">
                    <img class="img-responsive img-bordered margin-bottom-10" src="<?php echo $common_val['base_url'];?>assets/img/main/img4.jpg" alt="">
                    <p><?php echo $this->lang->line('life1');?></p>
                </div>
            </div>
            <!-- End Simple Block -->

            <!-- Begin Easy Block v2 -->
            <div class="col-md-3 col-sm-6 md-margin-bottom-20">
                <div class="simple-block">
                    <img class="img-responsive img-bordered margin-bottom-10" src="<?php echo $common_val['base_url'];?>assets/img/main/img5.jpg" alt="">
                    <p><?php echo $this->lang->line('life2');?></p>
                </div>
            </div>
            <!-- End Simple Block -->


            <!-- Begin Easy Block v2 -->
            <div class="col-md-3 col-sm-6 md-margin-bottom-20">
                <div class="simple-block">
                    <img class="img-responsive img-bordered margin-bottom-10" src="<?php echo $common_val['base_url'];?>assets/img/main/img16.jpg" alt="">
                    <p><?php echo $this->lang->line('life3');?></p>
                </div>
            </div>
            <!-- End Simple Block -->

            <!-- Begin Easy Block v2 -->
            <div class="col-md-3 col-sm-6 md-margin-bottom-20">
                <div class="simple-block">
                    <img class="img-responsive img-bordered margin-bottom-10" src="<?php echo $common_val['base_url'];?>assets/img/main/img17.jpg" alt="">
                    <p><?php echo $this->lang->line('life4');?></p>
                </div>
            </div>
            <!-- End Simple Block -->
        </div>

    </div><!--/container-->
    <!--=== Container Part ===-->
    <!-- 
	<div class="parallax-team parallaxBg">
		<div class="container content">
			<div class="title-box-v2">
				<h2>
					<span class="color-green"><?php echo $this->lang->line('meet_team');?></span>
				</h2>
				<p></p>
			</div>

			<div class="row">
				<div class="col-md-3 col-sm-6">
					<div class="team-v2">
						<img class="img-responsive"
							src="<?php echo $common_val['base_url'];?>assets/img/team/img5-md.jpg"
							alt="" />
						<div class="inner-team">
							<h3><?php echo $this->lang->line('name_v4');?></h3>
							<small class="color-green"><?php echo $this->lang->line('job_v4');?></small>
							<hr>
						</div>
					</div>
				</div>
			
				<div class="col-md-3 col-sm-6">
					<div class="team-v2">
						<img class="img-responsive"
							src="<?php echo $common_val['base_url'];?>assets/img/team/img1-md.jpg"
							alt="" />
						<div class="inner-team">
							<h3><?php echo $this->lang->line('name_v1');?></h3>
							<small class="color-green"><?php echo $this->lang->line('job_v1');?></small>
							<hr>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="team-v2">
						<img class="img-responsive"
							src="<?php echo $common_val['base_url'];?>assets/img/team/img2-md.jpg"
							alt="" />
						<div class="inner-team">
							<h3><?php echo $this->lang->line('name_v2');?></h3>
							<small class="color-green"><?php echo $this->lang->line('job_v2');?></small>
							<hr>
						</div>
					</div>
				</div>

				<div class="col-md-3 col-sm-6">
					<div class="team-v2">
						<img class="img-responsive"
							src="<?php echo $common_val['base_url'];?>assets/img/team/img3-md.jpg"
							alt="" />
						<div class="inner-team">
							<h3><?php echo $this->lang->line('name_v3');?></h3>
							<small class="color-green"><?php echo $this->lang->line('job_v3');?></small>
							<hr>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	-->
	<!--=== End Meet Our Team ===-->
</div>
<!--=== Container Part ===-->


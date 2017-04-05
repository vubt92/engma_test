
    <!--=== Content Part ===-->
    <div class="container content">
        <div class="row margin-bottom-30">
            <div class="col-md-9 mb-margin-bottom-30">
                <!-- Google Map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.1718976905613!2d106.67156795080815!3d10.79814299226906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752929af456f15%3A0xa7d7e66793f1b6d9!2zMjIwLzEgTmd1eeG7hW4gVHLhu41uZyBUdXnhu4NuLCBwaMaw4budbmcgOCwgUGjDuiBOaHXhuq1uLCBI4buTIENow60gTWluaCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1486179048182" width="860" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                <!-- End Google Map -->
				<br/><br/>
                <p><?php echo $this->lang->line('short_desc');?></p><br />

                <form action="#" method="post" id="sky-form3" class="sky-form contact-style">
                    <fieldset class="no-padding">
                        <label><?php echo $this->lang->line('form_name');?> <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                        </div>

                        <label>Email <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-7 col-md-offset-0">
                                <div>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>

                        <label><?php echo $this->lang->line('form_content');?> <span class="color-red">*</span></label>
                        <div class="row sky-space-20">
                            <div class="col-md-11 col-md-offset-0">
                                <div>
                                    <textarea rows="8" name="message" id="message" class="form-control non_resizable"></textarea>
                                </div>
                            </div>
                        </div>

                        <p><button type="submit" class="btn-u" onclick="onSendMessage();"><?php echo $this->lang->line('form_submit');?></button></p>
                    </fieldset>

                    <div class="message">
                        <i class="rounded-x fa fa-check"></i>
                        <p><?php echo $this->lang->line('sent_mail');?></p>
                    </div>
                </form>
            </div><!--/col-md-9-->

            <div class="col-md-3">
                <!-- Contacts -->
                <div class="headline"><h2><?php echo $this->lang->line('mn_contact');?></h2></div>
                <ul class="list-unstyled who margin-bottom-30">
                    <li><a href="javascript:void(0);"><i class="fa fa-home"></i><?php echo $this->lang->line('comp_addr');?></a></li>
                    <li><a href="mailto:info@engma.com.vn"><i class="fa fa-envelope"></i>info@engma.com.vn</a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-phone"></i>(0084) 39977249 - 0938136444 </a></li>
                    <li><a href="javascript:void(0);"><i class="fa fa-fax"></i>(8874) 39944348</a></li>
                    <li><a href="<?php echo $common_val['base_url'];?>"><i class="fa fa-globe"></i>www.engma.com.vn</a></li>
                </ul>

                <!-- Business Hours -->
                <div class="headline"><h2><?php echo $this->lang->line('biz_hour');?></h2></div>
                <ul class="list-unstyled margin-bottom-30">
                    <li><strong><?php echo $this->lang->line('mon_fri');?>:</strong> 8:00AM - 5:30PM</li>
                    <li><strong><?php echo $this->lang->line('sat');?>:</strong> 8:00AM - 12:00PM</li>
                    <li><strong><?php echo $this->lang->line('sun');?>:</strong> <?php echo $this->lang->line('sun_close');?></li>
                </ul>

            </div><!--/col-md-3-->
        </div><!--/row-->

    </div><!--/container-->
    <!--=== End Content Part ===-->

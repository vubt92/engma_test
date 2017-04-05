<script type="text/javascript" src="<?php echo $common_val['base_url'];?>assets/js/forms/contact.js"></script>
<script type="text/javascript" src="<?php echo $common_val['base_url'];?>assets/js/pages/page_contacts.js"></script>
<script type="text/javascript" src="<?php echo $common_val['base_url'];?>assets/js/plugins/owl-carousel.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        ContactForm.initContactForm();
        OwlCarousel.initOwlCarousel();
    });
</script>
<!--[if lt IE 9]>
    <script src="<?php echo $common_val['base_url'];?>assets/plugins/respond.js"></script>
    <script src="<?php echo $common_val['base_url'];?>assets/plugins/html5shiv.js"></script>
    <script src="<?php echo $common_val['base_url'];?>assets/plugins/placeholder-IE-fixes.js"></script>
    <script src="<?php echo $common_val['base_url'];?>assets/plugins/sky-forms-pro/skyforms/js/sky-forms-ie8.js"></script>
<![endif]-->
<!--[if lt IE 10]>
    <script src="<?php echo $common_val['base_url'];?>assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
<![endif]-->
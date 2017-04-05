<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Add Category</title>

</head>

<?php echo $this->load->view('admin/header');?>
<?php echo $this->load->view('admin/body');?>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">

            <div class="x_panel">
                <div class="x_title">
                    <h2>Thêm mới danh mục</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form action="" class="form-horizontal form-label-left" method="post">
                        <div class="form-group">
                            <label class="control-label col-md-2 col-sm-2 col-xs-4">Tên danh mục</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input name="title" type="text" class="form-control" placeholder="Name" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <input type="submit" class="btn btn-success" value="Lưu"/>
                                <?php echo $this->session->flashdata('mess'); ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="<?php echo public_url('admin/plugin') ?>/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo public_url('admin/plugin') ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo public_url('admin/plugin') ?>/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo public_url('admin/plugin') ?>/vendors/nprogress/nprogress.js"></script>
<!-- Dropzone.js -->
<script src="<?php echo public_url('admin/plugin') ?>/vendors/dropzone/dist/min/dropzone.min.js"></script>
<?php echo $this->load->view('admin/footer');?>
</body>
</html>
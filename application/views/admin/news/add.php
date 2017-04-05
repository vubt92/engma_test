<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?php echo public_url('admin') ?>/ckeditor/ckeditor.js"></script>

    <title>Add News</title>

    <!-- Bootstrap -->
    <link href="<?php echo public_url('admin/plugin') ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo public_url('admin/plugin') ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo public_url('admin/plugin') ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo public_url('admin/plugin') ?>/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo public_url('admin/plugin') ?>/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo public_url('admin/plugin') ?>/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo public_url('admin/plugin') ?>/vendors/starrr/dist/starrr.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo public_url('admin') ?>/css/custom.css" rel="stylesheet">
</head>

<?php echo $this->load->view('admin/header');?>
<?php echo $this->load->view('admin/body');?>
<?php echo $this->load->model('category_model'); ?>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!-- page content -->
        <div class="right_col" role="main">

            <div class="x_panel">
                <div class="x_title">
                    <h2>Thêm tin tức</h2>
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
                    <form method="post" class="form-horizontal form-label-left">

                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-2">Tiêu đề</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input name="title" type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-2">Mô tả</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                                <input name="desc" type="text" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-12">Từ khoá</label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <input type="text" class="form-control" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-12">Hình ảnh</label>
                            <div class="col-md-5 col-sm-5 col-xs-12">
                                <input type="file" class="form-control" name="img" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-12">Danh mục</label>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <select name="cat" class="form-control">
                                    <?php foreach($ctg as $row){?>
                                        <option value="<?php echo $row->id ?>"><?php echo $row->namect?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>

                        <div class="form_group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-12">Nội dung</label>
                            <div class="col-md-11 col-sm-11 col-xs-12">
                            <textarea name="content">
                            </textarea>
                               <script >CKEDITOR.replace('content')</script>
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label col-md-1 col-sm-1 col-xs-2">Tags</label>
                            <div class="col-md-10 col-sm-10 col-xs-10">
                                <input id="tags_1" type="text" class="tags form-control" value="" />
                                <div id="suggestions-container" style="position: relative; float: left; width: 250px; margin: 10px;"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                <input type="submit" class="btn btn-success" value="Lưu" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
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

</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Quản lý tin tức</title>
    <?php echo $this->load->view('admin/header') ?>
</head>
<body class="nav-md">

<?php echo $this->load->view('admin/body') ?>
<div class="container body">
    <div class="main_container">
        <!-- page content -->

        <div class="right_col" role="main">
            <div class="x_panel">

                <h2>List News</h2>
                <a href="<?php echo admin_url('add') ?>" class="btn btn-primary">Thêm mới</a>
                <div class="table-responsive">
                    <table class="table" border="1">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Hình ảnh</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($list as $row) { ?>
                    <tr>
                        <td><?php echo $row->id ?></td>
                        <td><?php echo $row->image_link ?></td>
                        <td><?php echo $row->title ?></td>
                        <td><?php echo $row->content ?></td>
                    </tr>
                    <?php }?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
</body>
</html>
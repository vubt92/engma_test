<!DOCTYPE html>
<html>
<head>
    <title>Quản lý danh mục</title>
    <?php echo $this->load->view('admin/header') ?>
</head>
<body class="nav-md">

<?php echo $this->load->view('admin/body') ?>
<div class="container body">
    <div class="main_container">
        <!-- page content -->

        <div class="right_col" role="main">
            <div class="x_panel">

                <h2>List Category</h2>
                <a href="<?php echo admin_url('add_ctg') ?>" class="btn btn-primary">Thêm mới</a>
                <div class="table-responsive">
                    <table class="table" border="1" style="width: 30%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Danh mục</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Test</td>
                        </tr>
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
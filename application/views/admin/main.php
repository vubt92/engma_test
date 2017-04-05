<!DOCTYPE html>
<html>
<head>
<title>Admin Page</title>
</head>
<body>
    <?php echo $this->load->view('admin/header');?>
    <?php echo $this->load->view($temp, $this->data);?>
</body>
</html>
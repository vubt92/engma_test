<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login Page</title>

    <!-- Bootstrap -->
    <link href="<?php echo public_url()?>/admin/plugin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo public_url()?>/admin/plugin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo public_url()?>/admin/plugin/css/custom.css" rel="stylesheet">
</head>

<body style="background:#F7F7F7;">

<div class="">
    <a class="hiddenanchor" id="toregister"></a>
    <a class="hiddenanchor" id="tologin"></a>

    <div id="wrapper">
        <div id="login" class=" form">
            <section class="login_content">
                <form action="" method="post">
                    <h1>Login Form</h1>
                    <div>
                        <input type="text" name="username" class="form-control" placeholder="Username" />
                        <div style="color: red"><?php echo form_error('username')?></div>
                    </div>
                    <div>
                        <input type="password" name="password" class="form-control" placeholder="Password" />
                        <div style="color: red"><?php echo form_error('password')?></div>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-default submit" value="Login"/>
                    </div>
                    <div style="color: red"><?php echo form_error('login');?>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
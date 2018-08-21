<html>
<head>
    <title>User page</title>
</head>
<link href="<?php base_url("Assets/css/style.css");  ?>" rel="stylesheet">
<?php echo link_tag("Assets/css/bootstrap.min.css"); ?>
<body>
        <div class="container">
            <?php echo form_open('User/index'); ?>
            <div class="col-md-6">
                <h1 align="center">User Log-In</h1>
                <div class="form-group">
                    <label>Email</label>
                    <?php echo form_input(["class"=>"form-control","name"=>"email","placeholder"=>"Enter Username"]); ?>
                    <?php echo form_error('email',"<div class='text-danger'>","</div>") ?>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <?php echo form_input(["class"=>"form-control","name"=>"password","placeholder"=>"Enter password"]); ?>
                    <?php echo form_error('password',"<div class='text-danger'>","</div>") ?>
                </div>
                <div class="form-group col-md-2">
                    <?php echo form_submit(["class"=>"btn btn-success","name"=>"submit","value"=>"Submit"]); ?>
                </div>
                <div class="form-group col-md-2">
                    <a class="btn btn-info" href= "<?php echo base_url();?>user/register">Sign-Up</a>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>


</body>


</html>
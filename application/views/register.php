<html>
<head>
    <title>Register page</title>
</head>
<link href="<?php base_url("Assets/css/style.css"); ?>" rel="stylesheet">
<?php echo link_tag("Assets/css/bootstrap.min.css"); ?>
<body>
    <div class="container">
        <?php echo form_open('User/register'); ?>
        <div class="col-md-6">

            <h1 align="center">User Registration</h1>
            <div class="form-group">
                <label>First Nname</label><br/>
                <?php echo form_input(["class" => "form-control", "name" => "firstname", "placeholder" => "Enter First Name"]); ?>
                <?php echo form_error('firstname',"<div class='text-danger'>","</div>") ?>
            </div>
            <div class="form-group">
                <label>Middle Nname</label><br/>
                <?php echo form_input(["class" => "form-control", "name" => "middlename", "placeholder" => "Enter Middle Name"]); ?>
                <?php echo form_error('middlename',"<div class='text-danger'>","</div>") ?>
            </div>
            <div class="form-group">
                <label>Last Nname</label><br/>
                <?php echo form_input(["class" => "form-control", "name" => "lastname", "placeholder" => "Enter Last Name"]); ?>
                <?php echo form_error('lastname',"<div class='text-danger'>","</div>") ?>
            </div>
            <div class="form-group">
                <label>Email</label><br/>
                <?php echo form_input(["class" => "form-control", "name" => "email", "placeholder" => "Enter Email"]); ?>
                <?php echo form_error('email',"<div class='text-danger'>","</div>") ?>
            </div>
            <div class="form-group">
                <label>Password</label><br/>
                <?php echo form_input(["class" => "form-control", "name" => "password", "placeholder" => "Enter Email"]); ?>
                <?php echo form_error('password',"<div class='text-danger'>","</div>") ?>
            </div>
            <div class="form-group col-md-2">
                <?php echo form_submit(["class" => "btn btn-success", "name" => "submit", "value" => "Submit"]); ?>
            </div>
            <div class="form-group col-md-2">
                <?php echo form_reset(["class" => "btn btn-warning", "name" => "submit", "value" => "Reset"]); ?>
            </div>
        </div>
        <?php echo form_close(); ?>

    </div>
</body>


</html>
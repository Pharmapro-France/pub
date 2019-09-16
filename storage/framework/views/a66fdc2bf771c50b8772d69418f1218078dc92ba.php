<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!--Content Area-->
<?php 
$id = isset($profile_data->id) ? $profile_data->id : '';
$first_name = isset($profile_data->first_name) ? $profile_data->first_name : '';
$last_name = isset($profile_data->last_name) ? $profile_data->last_name : '';
$email = isset($profile_data->email) ? $profile_data->email : '';
$password = isset($profile_data->password) ? $profile_data->password : '';
?>
<section class="loginArea">
<div class="container">
<div class="row">
<div class="col-12 text-left margintop"><h1>My Profile</h1></div>
</div>
<div class="row no-gutters">
<div class="col-12 col-lg-12">

<div class="loginForm text-left">
<form action="<?php echo e(url('update_profile')); ?>" class="feildForm login-form"  name="FrmAdminLogin" id="FrmAdminLogin"  method="POST">
 <?php echo csrf_field(); ?>

<input type="hidden" name="id" value="<?php echo e($id); ?>">
<div class="form-group">
<label class="fName">First Name</label>
<input type="text" class="form-control form-control-lg" placeholder="First Name" id="first_name" name="first_name" required="" value="<?php echo e($first_name); ?>">
</div>

<div class="form-group">
<label class="fName">Last Name</label>
<input type="text" class="form-control form-control-lg" placeholder="Last Name" id="last_name" name="last_name" required="" value="<?php echo e($last_name); ?>">
</div>

<div class="form-group">
<label class="fName">Email</label>
<input type="text" class="form-control form-control-lg" placeholder="Your email" id="email" name="email" required="" value="<?php echo e($email); ?>">
</div>

<div class="form-group">
<label class="fName">Password</label>
    <input type="text" class="form-control form-control-lg" placeholder="Your passowrd" id="password" name="password" required="" value="<?php echo e($password); ?>">
</div>


<input type="submit" value="Update Profile" class="btn btn-green">
</div>

</form>
</div>
</div>
</div>
</section>

	

<!-- /Content Area-->
<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

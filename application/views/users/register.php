<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?= $title; ?></h1>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" placeholder="Muhammad Usman">
			</div>
			<div class="form-group">
				<label>Userame</label>
				<input type="text" name="username" class="form-control" placeholder="username">
			</div>
			<div class="form-group">
				<label>Employee Code</label>
				<input type="text" name="emp_code" class="form-control" placeholder="ATFS0537">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" placeholder="usman@aimstech.net">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control" placeholder="Password">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" name="password2" class="form-control" placeholder="Confirm Password">
			</div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
	</div>

<?php echo form_close(); ?>
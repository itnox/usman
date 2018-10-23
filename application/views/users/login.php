	<?php echo form_open(); ?>

		<div class="row top">
			<div class="col-md-5">
				<img class="post-thumb" src="<?php echo site_url(); ?>assets/images/logo.png" />
			</div>
			<div class="col-md-4 jumbotron left">
				<h2 class="text-center"> Aimstech CRM </h2>
				<hr>
				<div class="form-group">
					<input type="text" name="username" class="form-control" placeholder="Enter Username" requiredautofocus>
				</div>
				<div class="form-group">
					<input type="password" name="password" class="form-control" placeholder="Enter Password" requiredautofocus>
				</div>
				<button type="submit" class="btn btn-primary btn-block"><strong>Login</strong></button>
				<hr>
				<small>Powered by Aimstech</small>
			</div>
		</div>

	<?php echo form_close(); ?>
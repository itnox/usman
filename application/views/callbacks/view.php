<h2 class="col-md-offset-1"><?php echo $callback['businessName']; ?></h2>
<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading clearfix">
				<i class="icon-calendar"></i>
				<!-- <h3 class="panel-title"><?= $title; ?></h3> -->
				<div class="row col-md-12 col-md-offset-9">
					<a class="btn btn-info" href="<?php echo base_url(); ?>callbacks">Back</a>
					<a class="btn btn-primary" href="<?php echo base_url(); ?>callbacks/edit/<?php echo $callback['slug'] ?>">Edit</a>
					<a href="<?php echo site_url('callbacks/delete/'.$callback['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete your Callback?')">Delete</a>
				</div>
			</div>
			<br>
			<div class="row">
		    <div class="col-md-10 col-md-offset-1">
		      <table class="table">
		        <thead>
		          <tr>
		            <th></th>
		            <th></th>
		            <th></th>
		            <th></th>
		          </tr>
		        </thead>
		        <tbody>
		          <tr>
		            <td><i>Customer Name :</i></td>
		            <td><strong><?php echo $callback['customerName']; ?></strong></td>
		            <td><i>Mobile Number :</i></td>
		            <td><strong><?php echo $callback['mobileNumber']; ?></strong></td>
		          </tr>
		          <tr>
		            <td><i>Business Name :</i></td>
		            <td><strong><?php echo $callback['businessName']; ?></td>
		            <td><i>Land Line Number :</i></td>
		            <td><strong><?php echo $callback['landLineNumber']; ?></strong></td>
		          </tr>
		          <tr>
		            <td><i>Post Code :</i></td>
		            <td><strong><?php echo $callback['postCode']; ?></strong></td>
		            <td><i>Sort Code :</i></td>
		            <td><strong><?php echo $callback['sortCode']; ?></strong></td>
		          </tr>
		          <tr>
		            <td><i>Bank Name :</i></td>
		            <td><strong><?php echo $callback['bankName']; ?></strong></td>
		            <td><i>Account Number :</i></td>
		            <td><strong><?php echo $callback['accountNumber']; ?></strong></td>
		          </tr>
		          <tr>
		            <td><i>Created At :</i></td>
		            <td><strong><?php echo $callback['createdAt']; ?></strong></td>
		            <td><i>Last Modified At :</i></td>
		            <td><strong><?php echo $callback['modifiedAt']; ?></strong></td>
		          </tr>
		          <tr>
		            <td><i>Address :</i></td>
		            <td colspan="3"><strong><?php echo $callback['address']; ?></strong></td>
		          </tr>
		          <tr>
		            <td><i>Comments :</i></td>
		            <td colspan="3"><strong><?php echo $callback['comments']; ?></strong></td>
		          </tr>
		        </tbody>
		      </table>
		    </div>
		  </div>
		</div>
	</div>
</div>

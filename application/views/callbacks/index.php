<div class="row">
	<h2 class="col-md-6"><?= $title;  ?></h2><br>
	<a href="<?php echo base_url(); ?>callbacks/create" class="btn btn-primary col-md-offset-5">Create</a>
</div>
	<div class="table-responsive">
      <table class="table table-bordered table-hover table-striped tablesorter">
        <thead>
          <tr>
            <th>Customer Name <i class="fa fa-sort"></i></th>
            <th>Business Name <i class="fa fa-sort"></i></th>
            <th>Mobile Number <i class="fa fa-sort"></i></th>
            <th>Land Line Number <i class="fa fa-sort"></i></th>
            <th>Post Code <i class="fa fa-sort"></i></th>
            <th>Comments <i class="fa fa-sort"></i></th>
            <th>Category<i class="fa fa-sort"></i></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        	<?php foreach($callbacks as $callback) : ?>
              <tr>
                <td><?php echo $callback['customerName']; ?></td>
                <td><?php echo $callback['businessName']; ?></td>
                <td><?php echo $callback['mobileNumber']; ?></td>
                <td><?php echo $callback['landLineNumber']; ?></td>
                <td><?php echo $callback['postCode']; ?></td>
                <td><?php echo word_limiter($callback['comments'], 10); ?></td>
                <td><strong><?php echo $callback['name']; ?></strong></td>
                <td><a href="<?php echo site_url('callbacks/'.$callback['slug']); ?>" class="glyphicon glyphicon-th-list"></a></td>
                <td><a class="glyphicon glyphicon-pencil" href="<?php echo base_url(); ?>callbacks/edit/<?php echo $callback['slug'] ?>" ><a></td>
                <td><a class="glyphicon glyphicon-trash" href="<?php echo site_url('callbacks/delete/'.$callback['id']); ?>" onclick="return confirm('Are you sure you want to delete your Callback?')"></a></td>
              </tr>
          	<?php endforeach; ?>
        </tbody>
      </table>
    </div>
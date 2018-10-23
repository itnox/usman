<h2 class="col-md-offset-1"><?php echo $callback['businessName']; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('callbacks/update'); ?>
  <input type="hidden" name="id" value="<?php echo $callback['id']; ?>">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
          <i class="icon-calendar"></i>
          <!-- <h3 class="panel-title"><?php echo $callback['businessName']; ?></h3> -->
          <div class="row col-md-12 col-md-offset-11">
            <a class="btn btn-info" href="<?php echo base_url(); ?>callbacks">Back</a>
          </div>
        </div>
        
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6 col-sm-6">
              <div class="input-group">
                <span class="input-group-addon">Customer Name</span>
                <input type="text" class="form-control" placeholder="Customer Name" name="customerName" value="<?php echo $callback['customerName']; ?>">
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="input-group">
                <span class="input-group-addon">Business Name</span>
                <input type="text" class="form-control" placeholder="Business Name" name="businessName" value="<?php echo $callback['businessName']; ?>">
              </div>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6 col-sm-6">
              <div class="input-group">
                <span class="input-group-addon">Mobile Number</span>
                <input type="text" class="form-control" placeholder="Mobile Number" name="mobileNumber" value="<?php echo $callback['mobileNumber']; ?>">
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="input-group">
                <span class="input-group-addon">Landline Number</span>
                <input type="text" class="form-control" placeholder="Landline Number" name="landLineNumber" value="<?php echo $callback['landLineNumber']; ?>">
              </div>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6 col-sm-6">
              <div class="input-group">
                <span class="input-group-addon">Post Code</span>
                <input type="text" class="form-control" placeholder="Post Code" name="postCode" value="<?php echo $callback['postCode']; ?>">
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="input-group">
                <span class="input-group-addon">Sort Code</span>
                <input type="text" class="form-control" placeholder="Sort Code" name="sortCode" value="<?php echo $callback['sortCode']; ?>">
              </div>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6 col-sm-6">
              <div class="input-group">
                <span class="input-group-addon">Bank Name</span>
                <input type="text" class="form-control" placeholder="Bank Name" name="bankName" value="<?php echo $callback['bankName']; ?>">
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="input-group">
                <span class="input-group-addon">Account Number</span>
                <input type="text" class="form-control" placeholder="Account Number" name="accountNumber" value="<?php echo $callback['accountNumber']; ?>">
              </div>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6 col-sm-6">
              <div class="input-group">
                <span class="input-group-addon">Address</span>
                <textarea class="form-control" placeholder="Address" name="address"><?php echo $callback['address']; ?></textarea>
              </div>
            </div>
            <div class="col-lg-6 col-sm-6">
              <div class="input-group">
                <span class="input-group-addon">Comments</span>
                <textarea class="form-control" placeholder="Comments" name="comments"><?php echo $callback['comments']; ?></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-lg-6 col-sm-6">
              <div class="input-group">
                <span class="input-group-addon">Category</span>
                <select class="form-control" name="category_id">
                  <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                  <?php endforeach; ?>              
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="panel-body">
        	<div class="row">
        		<div class="col-md-6">
        			<div class="input-group">
        				<button type="submit" class="btn btn-primary">Submit</button>
        			</div>
        		</div>
        	</div>
        </div>
      </div>
    </div>
  </div>
</form>
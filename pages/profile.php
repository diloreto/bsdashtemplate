<?php require("inc/profile.inc.php"); ?>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <i class="fa fa-cogs" aria-hidden="true"></i> Profile
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home" aria-hidden="true"></i>  <a href="index.php">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-cogs" aria-hidden="true"></i> <a href="index.php?a=profile">Profile</a>
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">

    <div class="col-lg-12">

        <form class="form-horizontal" action="?a=profile&save" method="post">
            <fieldset>
            
            <!-- Form Name -->
            <legend>Edit Profile</legend>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="first_name">First Name</label>  
              <div class="col-md-4">
              <input id="first_name" name="first_name" type="text" placeholder="<?php print $userObj['FIRST_NAME']; ?>" value="<?php print $userObj['FIRST_NAME']; ?>" class="form-control input-md" required>
              </div>
            </div>
            
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="last_name">Last Name</label>  
              <div class="col-md-4">
              <input id="last_name" name="last_name" type="text" placeholder="<?php print $userObj['LAST_NAME']; ?>" value="<?php print $userObj['LAST_NAME']; ?>" class="form-control input-md" required>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="title">Job Title</label>  
              <div class="col-md-4">
              <input id="title" name="title" type="text" placeholder="<?php print $userObj['TITLE']; ?>" value="<?php print $userObj['TITLE']; ?>" class="form-control input-md" required>
              </div>
            </div>

            
            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="account_status">Account Status</label>
              <div class="col-md-4">
                <select id="account_status" name="account_status" class="form-control">
                  <option value="NULL">-- Choose One --</option>
                  <option value="1">Active</option>
                  <option value="0">Inactive</option>
                </select>
              </div>
            </div>

			<hr width="50%" />

            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="current_password">Current Password</label>  
              <div class="col-md-4">
              <input id="current_password" name="current_password" type="password" placeholder="Current Password" class="form-control input-md">
              </div>
            </div>
            
            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="new_password1">New Password</label>  
              <div class="col-md-4">
              <input id="new_password1" name="new_password1" type="password" placeholder="Current Password" class="form-control input-md">
              </div>
            </div>

            <!-- Password input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="new_password1">Repeat New Password</label>  
              <div class="col-md-4">
              <input id="new_password2" name="new_password2" type="password" placeholder="Current Password" class="form-control input-md">
              </div>
            </div>
            
            <!-- Hidden Fields -->
            <input type="hidden" name="user_id" id="user_id" value="<?php echo $_SESSION['user_session']; ?>" />
            
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="submit"></label>
              <div class="col-md-4">
                <button id="btn-submit-profile" name="btn-submit-profile" class="btn btn-primary">Save Profile</button>
              </div>
            </div>
            
            </fieldset>
        </form>

	</div>

</div>
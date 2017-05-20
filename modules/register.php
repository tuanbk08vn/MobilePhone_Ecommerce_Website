<?php
if(!isset($_SESSION)) {
    session_start();
}?>

<script type="text/javascript">
 	$(function () {
        $("#registerModal").appendTo("body");
    });
</script>

<!-- Modal -->
<div id="registerModal" class="modal fade" role="dialog">
			<!-- LOGIN -->
	<div class="modal-dialog"> 
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-center">REGISTER</h4>
			</div>
			<div class="modal-body">
					<p id="register-display" class="col-xs-12" style="text-align: center"></p>
				
					<div class="col-md-12">
					<form method="POST" action="" name="register">
						<!-- <input type="text" id="test"> -->
						<div class="form-group col-xs-6">
							<p>Username:</p>
							<input class="form-control" id="username" value="" name="username" placeholder="Username" type="text" autofocus>
						</div>
						<div class="form-group col-xs-6">
							<p>Password:</p>
							<input class="form-control" id="password" value="" name="password" placeholder="Password" type="password">
						</div>
						<div class="form-group col-xs-6">
							<p>Full Name:</p>
							<input class="form-control" id="name" value="" name="name" placeholder="Name" type="text">
						</div>
						<div class="form-group col-xs-6">
							<p>Birthday:</p>
							<input class="form-control" id="birthday" value="" name="birthday" placeholder="Birthday" type="date">
						</div>
						<div class="form-group col-xs-6">
							<p>Email:</p>
							<input class="form-control" id="email" value="" name="email" placeholder="Email" type="text">
						</div>
						<div class="form-group col-xs-6">
							<p>Phone number:</p>
							<input class="form-control" id="phone-number" value="" name="phone-number" placeholder="Phone Number" type="number">
						</div>
						<div class="form-group col-xs-6">
							<p>Address:</p>
							<input class="form-control" id="address" value="" name="address" placeholder="Address" type="text">
						</div>
						<div class="form-group col-xs-6">
							<p>User Type:</p>
							<input class="form-control" id="user-type" value="" name="user-type" placeholder="User type" type="text">
						</div>
		
						<div class="form-group col-xs-12">
							<div class="col-sm-6 col-md-6 left" style="padding: 2px">
								<button id="register-submit" onclick="return false;" class="btn btn-success btn-block btn-md" name="register">Register</button>
							</div>

							<div class="col-sm-6 col-md-6 right" style="padding: 2px">
								<button type="button" id="cancel" class="btn tn-btn-default btn-block btn-md" data-dismiss="modal">Cancel</button>
							</div>
							<!-- <div class="col-sm-4 col-md-5 left" style="padding: 0; margin-left: 0px">
								<button type="button" class="btn tn-btn-default btn-danger btn-md" data-dismiss="modal">Cancel</button>
							</div> -->
						</div>
						</form>
					</div>
			</div>
			<div class="modal-footer" style="border-top:none !important">
				<p id="register-display"></p>	
			</div>
		</div>
	</div>
</div>	
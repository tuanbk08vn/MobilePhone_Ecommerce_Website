<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<script type="text/javascript">
 	$(function () {
        $("#loginModal").appendTo("body");
    });
</script>

<!-- Login view -->	
<!-- Modal -->
<div id="loginModal" class="modal fade" role="dialog">
			<!-- LOGIN -->
	<div class="modal-dialog"> 	
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-center">SIGN IN</h4>
			</div>
			<div class="modal-body">
				<div class="col-md-6">
					<div class="form-group">
						<p>Username:</p>
						<input class="form-control" value="" id="login-username" placeholder="Username" type="text" autofocus>
					</div>
					<div class="form-group">
						<p>Password:</p>
						<input class="form-control" value="" id="login-password" placeholder="Password" type="password">
					</div>
					<div class="form-group">
						<div class="col-sm-4 col-md-6 center" style="padding: 0; margin-left: 5px">
							<button type="submit" id="login-submit" onclick="return false;" class="btn btn-danger btn-block btn-md ">Login</button>
						</div>
						<div class="col-sm-4 col-md-5 right" style="padding: 0; margin-left: 10px">
							<button type="button" id="btnRegister" class="btn btn-info btn-block btn-md" data-toggle="modal" data-target="#registerModal" onclick="hideLogin()">Register</button>
							<?php require ROOT.'/modules/register.php' ?>
						</div>
					</div>
				</div>

				<div class="col-md-6" style="margin-top:30px">
					<div class="form-group"><a class="btn btn-link btn-block facebookLogin" href="" rel="" onclick=""><i class="fa fa-facebook"></i> LOGIN FACEBOOK</a></div>
					<div class="form-group"><a class="btn btn-link btn-block googleLogin" href="" rel="" onclick=""><i class="fa fa-google-plus"></i> LOGIN GOOGLE</a></div>
					<button type="button" class="btn btn-default btn-danger col-xs-12" data-dismiss="modal" style="background-color: #696969;">Close</button>
				</div>
			</div>
			<div class="modal-footer" style="border-top:none !important">
				<p id="login-display"></p>
				
			</div>
		</div>
	</div>
</div>	
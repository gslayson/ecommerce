<?php
if (isset($_GET["register"])) {

	?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Kairos</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
<body>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand"><img src="product_images/kairos.png" alt="" style="width: 10%;"></a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="index.php"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
			</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="signup_msg">
				<!--Alert from signup form-->
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Customer SignUp Form</div>
					<div class="panel-body">

					<form id="signup_form" onsubmit="return false">
						<div class="row">
							<div class="col-md-6">
								<label for="f_name">First Name</label>
								<input type="text" id="f_name" name="f_name" class="form-control">
							</div>
							<div class="col-md-6">
								<label for="f_name">Last Name</label>
								<input type="text" id="l_name" name="l_name"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="email">Email</label>
								<input type="text" id="email" name="email"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="password">password</label>
								<input type="password" id="password" name="password"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="repassword">Re-enter Password</label>
								<input type="password" id="repassword" name="repassword"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="mobile">Mobile</label>
								<input type="text" id="mobile" name="mobile"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address1">Address Line 1</label>
								<input type="text" id="address1" name="address1"class="form-control">
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<label for="address2">Address Line 2</label>
								<input type="text" id="address2" name="address2"class="form-control">
							</div>
						</div>
						<div class="flex-m w-full p-b-33">
							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
								<label class="label-checkbox100" for="ckb1">
									<span class="txt1">
										I agree to the
										<a name="student", id="student" data-toggle="modal" data-target="#tnc" style="color:black; text-decoration:underline black">Terms of User</a>
										<!-- <a href="tnc.php" class="txt2 hov1">
											Terms of User
										</a> -->
									</span>
								</label>
							</div>
						</div>
						<div id="tnc" class="modal fade">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h4 class="modal-title">Terms and Condition</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<div class="modal-body">
										<h4>DATA PRIVACY CONSENT FORM</h4>
										<p>
											KAIROS INC. is committed to provide you with the services involving sales of equipment needed for your advancement in technology while implementing safeguards to protect your privacy and keep your personal data safe and secure.
										</p>
										<h4>Processing of Personal Data</h4>
										<p>
											The personal information being collected which may include photos during the processing of sales and other similar activities. Said information will also be.
										</p>
										<h4>Data Protection</h4>
										<p>
											We shall implement organizational, physical, and technical security measures for the protection of personal information which we collected. Only authorized personnel are permitted and have access to the collected information who will treat any confidential information under strict confidentiality. In case of breach, KAIROS Inc. shall notify you and inform the National Privacy Commission (NPC) in accordance to the NPC Circular 16-03 or Personal Data Breach Management.
										</p>
										<p>
											Personal information collected are stored and later on disposed of via shredding and permanently deleted in our electronic files in accordance to R.A. No. 9470 otherwise known as the National Archives of the Philippines Act of 2007.
										</p>
										<h4>Rights of the Data Subject</h4>
										<p>
											As the Data Subject, you have the right to be informed of the personal information being collected, processed, and stored by Encephalon HAU Technology Business Incubator as well as to access, object, rectify and block the same. For questions or concerns, you may contact our Data Protection Officer through the following details:
										</p>
										<p>admin@kairos.com or +63 (45) 888-1755 Local 1479</p>
										<p>
											I have read this form, understood its contents and consent to the processing of my personal data. I understand that my consent does not preclude the existence of other criteria for lawful processing of personal data and does not waive any of my rights under the Data Privacy Act of 2012 and other Applicable laws.
										</p>
									</div>
								</div>
							</div>
						</div>
						<p><br/></p>
						<div class="row">
							<div class="col-md-12">
								<input style="width:100%;" value="Sign Up" type="submit" name="signup_button"class="btn btn-success btn-lg">
							</div>
						</div>

					</div>
					</form>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
	<?php
}



?>

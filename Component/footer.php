	<footer id ="footer">

		<div class="container">

				<div class="row">

					<div class="col-lg-4 col-md-4">

					<h5>Quick Link</h5>

					<ul class="list-unstyled">

						<li><a href="#">Faridabad</a></li>

						<li><a href="#">5 Star</a></li>

						<li><a href="#">Certificate</a></li>

						<li><a href="#">Gallery</a></li>

						<li><a href="#">Careers</a></li>

						<li><a href="#">Term Of Use</a></li>

					</ul>

				</div>

				<div class="col-lg-4 col-md-4">

					<h5>Reach us</h5>

					<p>Near Sarai Khwaja Metro station,Faridabad,Haryana 121003<br>Phone:+91-7836038462,7011359101<br>Phone:+91-1214456897,1215644278</p>

          </div>

        <div class="col-lg-4 col-md-4">

					<h5>News Letters</h5>

						<h5>WE LOVE TO SHARE NEW OFFER AND EXCLUSIVE PROMOTIONS</h5>

						<form  action=""method="post">

						<input type="email" id="defaultForm-email" class="form-control validate" name="defaultform-email" placeholder="Enter Your Email" required="required">

						<button class="btn btn-primary" name="done">Submit</button>

						</form>

				</div>

				</div>

		</div>

	</footer>

	<?php

					if(isset($_POST['done']))

			{

					$email =$_POST['defaultform-email'];



					$conn=mysqli_connect("localhost","root","","hotel");

					$query="INSERT INTO `emailsubscription`(`defaultform-email`) VALUES ('$email')";

					$run= mysqli_query($conn,$query);

					if($run==TRUE){

						echo "<script>alert('Thanks for Subscription')

					document.location='home.php';</script>";

          }

					else {

						echo "<script>alert('Email Already Exits')

					       document.location='home.php';</script>";

          }

			}

				?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="js/script.js"></script>

<?php require('Component/header.php'); ch_title("Contact");?>
<div class="container-fluid">
    <div class="jumbotron" style="height:auto;">
        <h4 class="text-center text-capitalize" style="color:white">More than just a hotel
            <br>for more detail contact us
        </h4>
    </div>
</div>
<section id="contact">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h2 class=" text-capitalize">get in touch</h2>
                <h5 class="text-capitalize">please fill out this form and we will be in touch with lighting speed</h5>
                <form action="" method="post">
                    <input class="form-control" type="text" name="name" placeholder="Name" required
                        style="margin-left:3%;" />
                    <br>
                    <input class="form-control" type="text" name="email" placeholder="Your email address " required
                        style="margin-left:3%;" />
                    <br>
                    <textarea name="message" type="text" class="form-control" rows="3" placeholder="Message" required
                        style="margin-left:3%;" /></textarea>
                    <br>
                    <button class="btn btn-primary" name="ok" style="margin-left:3%;">Submit</button>
                </form>

            </div>
            <div class="col-lg-4 col-md-6">
                <h5 class="text-capitalize ">contact with us:</h5>
                <p> for support or any questions<br /> Email us at: support@bluevalleygmail.com</p>
                <h5>Reach us</h5>
                <p>Near Sarai Khwaja Metro station,Faridabad,Haryana
                    121003<br>Phone:+91-7836038462,7011359101<br>Phone:+91-1214456897,1215644278</p>
                <p style="height:auto; width:100%;">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.5842582452674!2d77.31943811440301!3d28.461946345669627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce7701a772d91%3A0xa9a084e4336258d4!2s84%2C%20Harkesh%20Colony%2C%20Faridabad%2C%20Haryana%20121003!5e0!3m2!1sen!2sin!4v1592546908909!5m2!1sen!2sin"
                        width="400" height="300" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </p>


            </div>
        </div>
    </div>


</section>

<?php
  if(isset($_POST['ok']))
						{
                  $name=$_POST['name'];
                  $email=$_POST['email'];
                  $msg=$_POST['message'];
                  $to = "chaduarysunil@gmail.com"; // You can change here your Email
                  $subject = "'$name' has been sent a mail"; // This is your subject

                 // HTML Message Starts here
                 $message ="$name"."$email"."$msg";
                        $headers = "From:". $email . "\r\n"; // Give an email id on which you want get a reply. User will get a mail from this email id

                        if(mail($to,$subject,$message,$headers)){
                            // Message if mail has been sent
                            echo "<script>
                                    alert('Mail has been sent Successfully.');
                                </script>";
                        }

                        else{
                            // Message if mail has been not sent
                            echo "<script>
                                    alert('EMAIL FAILED');
                                </script>";
                        }
                                    
            }
?>
<?php require('Component/footer.php');?>
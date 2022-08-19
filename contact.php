<?php require_once("conn.php")?>
<?php include("header.php"); ?>
<section class="bnrContact">
  <div class="container">
    <div class="row">
      <div class="col m7 s12 white-text">
        <h4 class="montserratBold">Get a Quote</h4>
        <p class="getquotePara">We are looking forward to a visit to your premise or a video call so as to help us offer the best possible offer for CloudWarehousing.in and distribution services as discussed.
</p>
        <div class="row">
          <ul class="contUl">
            <li class="phoneCon">8329936072</li>
            <li class="addCon">PurpleDrone Supply Chain Solutions Dwarka, <br> New Delhi 110077

</li>
            <li class="mailCon">cas@purpledrone.in

</li>
          </ul>

        </div>
      </div>
      <div class="col m5 s12">
        <div class="card">
          <form method="post" class="contactForm" autocomplete="off">
            <div class="row">
              <div class="col s12">
                <label class="black-text">Your Name</label>
                <input type="text" name="name" placeholder="Enter Your Name"
                  class="browser-default form-control" required>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <label class="black-text">Your Email</label>
                <input type="email" name="email" placeholder="demomail@cloudwarehousing.com"
                  class="browser-default form-control" required>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <label class="black-text">Your Phone Number</label>
                <input type="text" name="phone" placeholder="Enter Your Mobile Number"
                  class="browser-default form-control" required maxlength="10">
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <label class="black-text">Message</label>
                <textarea name="message" placeholder="Type Your Message Here"
                  class="browser-default form-select" required></textarea>
              </div>
            </div>
            <div class="row">
            <div class="col s12">
              <button class="btn waves-effect waves-light right text-capitalize" name="submit" type="submit">Send
                Message</button>
            </div>
            <?php
                  if(@$mail){
                    echo "<div class='center' id='msgDisplay'><span style='text-align:center; background-color:#16a0d9;color:white;overflow:hidden;'>Thank You! We Will Get Back You Soon</span></div>";
                    echo "<script>
                    function hideMessage() {
                        setTimeout(function() {
                            $('#msgDisplay').fadeOut('fast');
                        }, 5000);
                      }
                      hideMessage();
                   </script>";
                    }
                ?>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $mobile= $_POST['phone'];
    $msg = $_POST['message'];
    $sql="INSERT INTO contact(name,email,phone,message,created_at) values('$name','$email','$mobile','$msg',NOW())";
    if($conn->query($sql)){
    // Recipient
    $to = 'web@sociapa.com,dheeraj@sociapa.com,mail@sociapa.com';
    // Sender
    $from = 'Cloud Warehousing <no-reply@cloudwarehousing.in>';
    $fromName = 'Cloud Warehousing';
    // Email subject
    $subject = "New Query From $name";
    $headers = "From: ".$fromName." <".$from."> \r\n";
    $headers   .= "MIME-Version: 1.0\r\n";
    $headers   .= "Content-type: text/html; charset=utf-8\r\n";
    $message = "
        <table style='max-width:600px;width: 100%;'>\r\n\n
            <tr><td>Name</td><td>:</td><td>".$name."</td></tr>\r\n\n
            <tr><td>Email Address</td><td>:</td><td>".$email."</td></tr>\r\n\n
            <tr><td>Mobile</td><td>:</td><td>".$mobile."</td></tr>\r\n\n
            <tr><td>Message</td><td>:</td><td>".$msg."</td></tr>\r\n\n
            </table>
    ";
    mail($to, $subject, $message, $headers);
    echo "<script type='text/javascript'>alert('Your Record is Saved. I will connect you in soon...')</script>";
    }
 }
?>
<?php include("footer.php"); ?>
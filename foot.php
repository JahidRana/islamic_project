

<?php 
ob_start();
$now = time();
if(isset($_SESSION['expire'])){
    if($now > $_SESSION['expire'] ){
    
        $_SESSION['sent'] = "";
         session_unset();
      session_destroy();
    }

}


if(isset($_REQUEST['submit'])){
   
include("./admin/config/connect.php");
$email = mysqli_real_escape_string($connect,$_REQUEST['email']);
$name = mysqli_real_escape_string($connect,$_REQUEST['name']);
$message= mysqli_real_escape_string($connect,$_REQUEST['message']);

$query = "INSERT INTO simple_contac(email,names,messages) VALUES('{$email}','{$name}','{$message}')";

$run_query = mysqli_query($connect, $query);



if($run_query){
    $_SESSION['sent'] = "Message Succeesfully Sent";
    $_SESSION['start'] = time();
    $_SESSION['expire'] = $_SESSION['start'] + (1 * 2);
}else{
    $_SESSION['sent'] = "Please try Again..";
}






}?>

<!-- Footer Starts Here -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3 footer-item">
                <h4>Connect With Me</h4>
                <p>আমি আপনাদের মতই একজন সাধারণ মানুষ । ইসলামকে খুব বেশি ভালোবাশি তাই ইসলাম প্রচার করতে চাই । যদি আপনার কোনো মতামত বা জিজ্ঞাসা থাকে তাহলে দয়া করে বলুন..</p>
                <ul class="social-icons">

                    <li><a href="https://www.facebook.com/profile.php?id=100045257798709" target="_blank"><i style="font-size: 20px;" class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://twitter.com/jahid_rana2020" target="_blank"><i style="font-size: 20px;" class="fab fa-twitter"></i></a></li>
                    <li><a href="https://github.com/JahidRana" target="_blank"><i style="font-size: 20px;" class="fab fa-github"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/jahid-rana-203765204/" target="_blank"><i style="font-size: 20px;" class="fab fa-linkedin-in"></i></a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-item">
                <h4>Useful Links</h4>
                <p>এখানে দেওয়া একটি চ্যানেলও কিন্তু আমার না । এই চ্যানেল এর ভিডিওগুলো আমার খুব ভালো লাগে তাই আপনাদের সাথে শেয়ার করা ।
                <p>
                <ul class="menu-list">
                <li>
                <a href="https://www.youtube.com/channel/UCXNiSfzRya_Lw5VghgVoKqA" target="_blank">আলোর পথ</a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCxStLx7yb96MGBfIMo20x7Q" target="_blank">Mizanur Rahman Azhari</a>
                </li>
                <li>
                <a href="https://www.youtube.com/channel/UC0xsiI7ESjvehM_VSKqQJOw" target="_blank">Abu Taw Haa Muhammad Adnan</a>
                </li>
                  
                <li>
                <a href="https://www.youtube.com/channel/UCuxth2BimHUigZ344JhcFPw" target="_blank">আস-সুন্নাহ ফাউন্ডেশন</a>
                </li>
                </ul>
            </div>
            <div class="col-md-3 footer-item">
                <h4>Quick Access</h4>
                <ul class="menu-list">
                    <li><a href="#">Bangla Mp3 waz download</a></li>
                    <li><a href="#">All Sura Download</a></li>
                    <li><a href="#">Al Quran Pdf</a></li>
                    <li><a href="#">Namaz Shikkha</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-md-3 footer-item last-item">
                <h4>Contact Us</h4>
                <div class="contact-form">
                    <form id="contact footer-contact" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="E-Mail Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" name="submit" id="form-submit" class="filled-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                    <?php

if (isset($_SESSION['sent'])) { ?>

    <p style="color:green;text-align:center;margin-top:10px;"><?php echo $_SESSION['sent']; ?></p>
<?php
}else{
    echo "";
}
?>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright &copy; 2021 Islamic Channel.

                    - Design: <a href="#" target="_blank">Jahid Rana</a></p>
            </div>
        </div>
    </div>
</div>

<!-- footer end here -->



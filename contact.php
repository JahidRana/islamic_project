<style>
    
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500;600&family=Pacifico&display=swap');

    .my_form {
        font-weight: 500;
    font-size: 18px !important;
    color: blue !important;
}
    .socials {
        padding: 1.5rem 0;
    }

    ul.social-iconss li {
        display: inline-block;
        margin-right: -11px;
        font-size: 24px;
        padding: 10px;
    }

    .social-iconss li a i {
        height: 34px;
        width: 34px;
        font-size: 2.7rem;
        border-radius: 50%;
        line-height: 1.4;
        margin: 0 15px 0 0;
        box-shadow: 0 0 0 3px darkorchid;
        /* transition: all 700ms ease; */
    }
    .social-iconss li a i:hover {
    background-color: darkorchid;
    color: #fff;
    box-shadow: 0 0 0 3px #cde1f8;
    transition: all 700ms ease;
}

    ul.social-iconss li a {
        width: 34px;
        height: 34px;
        display: inline-block;
        line-height: 34px;
        text-align: center;
        background-color: #fff;
        color: #232323;
        border-radius: 50%;
        transition: all 0.3s;
    }

    ul.social-iconss li a:hover {
        background-color: crimson;
        color: white;
    }

    .list_style {
        list-style: none;
    }

    .box-shadow,
    .paralax-mf,
    .service-box,
    .work-box,
    .card-blog {
        box-shadow: 0 13px 8px -10px rgba(0, 0, 0, 0.1);
    }

    .box-shadow-a,
    .button:hover {
        box-shadow: 0 0 0 4px #cde1f8;
    }

    .display-5 {
        font-size: 2.5rem;
        font-weight: 300;
        line-height: 1.1;
    }

    .display-6 {
        font-size: 2rem;
        font-weight: 300;
        line-height: 1.1;
    }

    .avatar {
        width: 32px;
        height: 32px;
        margin-right: 4px;
        overflow: hidden;
    }

    .bg-image {
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center center;
    }

    .overlay-mf {
        background-color: #bdc3c7;
    }

    .overlay-mf {
        position: absolute;
        top: 0;
        left: 0px;
        padding: 0;
        height: 100%;
        width: 100%;
        opacity: .7;
    }

    .paralax-mf {
        position: relative;
        padding: 8rem 0;
    }

    .display-table {
        width: 100%;
        height: 100%;
        display: table;
    }

    .table-cell {
        display: table-cell;
        vertical-align: middle;
    }

    /*--/ Sections /--*/

    .sect-4 {
        padding: 4rem 0;
    }

    .sect-pt4 {
        padding-top: 4rem;
    }

    .sect-mt4 {
        margin-top: 4rem;
    }

    .footer-paralax {
        padding: 4rem 0 0 0;
    }

    .contact-mf {
        margin-top: 4rem;
    }

    .box-shadow-full {
        padding: 3rem 1.25rem;
        position: relative;
        background-color: transparent;
        margin-bottom: 3rem;
        z-index: 2;
        box-shadow: 0 1px 1px 0 rgb(0 0 0 / 6%), 0 2px 5px 0 rgb(0 0 0 / 20%);
    }

    .title-box-2 {
        margin-bottom: 3rem;
    }

    .title-left {
        color: darkorchid;
        font-size: 4rem;
        position: relative;
    }


    .form-controls {
        display: block;
        width: 100%;
        height: calc(3.25rem + 2px);
        padding: .375rem .75rem;
        font-size: 1rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: .25rem;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    button,
    input {
        overflow: visible;
    }

    button,
    input,
    optgroup,
    select,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }

    textarea.form-controls {
        height: auto;
    }

    li.list_style {
        font-size: 16px;
        color: black;
        font-weight: 700;
    }

    p.lead {
        font-size: 18px;
        color: black;
        font-weight: 600;
        opacity: 0.8;
    }

    .list-ico {
        line-height: 2;
    }

    .list-ico span {
        color: #0078ff;
        margin-right: 10px;
    }

    .list-ico li {
        /* text-decoration: none; */
        list-style: none;
    }


    .list_style i {
        color: darkorchid;
        font-size: 28px;
        margin-right: 8px;
    }
    h2.map_title {
    color: orangered;
    font-size: 32px;
    text-align: center;
    padding: 19px 0px;
    font-style: italic;
}


    li a i {
        margin-top: 10px;
    }

    /*======================================


/*======================================
//--//-->   CONtaCT FORM
======================================*/

    #sendmessage {
        color: #0078ff;
        border: 1px solid #0078ff;
        display: none;
        text-align: center;
        padding: 15px;
        font-weight: 600;
        margin-bottom: 15px;
    }
    .main-bio {
    background: #2C3A47;
    margin: 0px -5px;
    height: 600px;
    width: 834px;
    color: white;
    overflow: hidden;
    position: relative;
}
.bio {
    padding: 39px 0px;
    position: absolute !important;
    top: 210px;
    left: 77px;
    font-family: 'Fira Sans', sans-serif;
    width: 620px;
    box-shadow: 0 1px 1px 0 rgb(6 7 2 / 53%), 0 2px 8px 0 rgb(0 0 0 / 65%);
    text-align: justify;
    display: block;
    margin-right: 45px;
}
.bio.col-sm-12 {
    height: 208px;
    width: 662px;
    margin: auto;
}
h2.head {
    font-size: 30px;
}

    .button {
        display: inline-block;
        padding: .3rem .6rem;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        font-size: 1rem;
        border-radius: .3rem;
        border: 1px solid transparent;
        transition: all 500ms ease;
        cursor: pointer;
    }

    .button:focus {
        outline: 0;
    }

    .button:hover {
        background-color: #0062d3;
        color: #fff;
        transition: all 500ms ease;
    }

    .button-a {
        background-color: #0078ff;
        color: #fff;
        border-color: #cde1f8;
    }

    .button-big {
        padding: .9rem 2.3rem;
        font-size: 1.2rem;
    }

    .button-rouded {
        border-radius: 5rem;
    }

    .btn-lg {
        padding: .5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: .3rem;
    }



    @media (min-width: 767px) {

        .contact-mf .box-pl2 {
            margin-top: 3rem;
            padding-left: 0rem;
        }
    }

    @media (min-width: 768px) {
        .box-shadow-full {
            padding: 3rem;
        }


    }

    @media (min-width: 992px) {
        .testimonial-box .description {
            padding: 0 8rem;
        }
    }

    @media (min-width: 1200px) {
        .testimonial-box .description {
            padding: 0 13rem;
        }
    }

    @media (max-width: 1024px) {
        .bg-image {
            background-attachment: scroll;
        }
    }

    @media (max-width: 768px) {
        .back-to-top {
            bottom: 15px;
        }
    }
</style>
<?php
ob_start();
include("header.php");
?>

<!--/ Section Contact-Footer Star /-->
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(./images/2.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="title-box-2">
                                    <h5 class="title-left">
                                        Send Message 
                                    </h5>
                                </div>
                                <div>







                                    <form action="save_contact.php" method="post" role="form" class="contactForm">
                                   
                                      
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="text" name="name" class="form-controls my_form" placeholder="Your Name" required />
                                                    <div class="validation"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input type="email" class="form-controls my_form" name="email" id="email" placeholder="Your Email"   />
                                                   
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <input
                                                    required  type="text" class="form-controls my_form" onkeypress="return (event.charCode !=8 && event.charCode ==0 || ( event.charCode == 46 || (event.charCode >= 48 && event.charCode <= 57)))"
                                                   
                                                    name="phn_no" placeholder="Phone No-only support digit"  />
                                                  
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group">
                                                    <textarea class="form-controls my_form" name="message" rows="5" placeholder="Message" required></textarea>
                                                   
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <button type="submit" name="submit" class="button button-a button-big button-rouded">Send Message</button>
                                            </div>
                                        </div>
                                    </form>


                                    <?php

if (isset($_REQUEST['msg'])) { ?>

    <h2 style="color: greenyellow;text-align:center;margin-top:10px;"><?php echo $_REQUEST['msg']; ?></h2>
<?php
}
?>






                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="title-box-2 pt-4 pt-md-0">
                                    <h5 class="title-left">
                                        Get in Touch
                                    </h5>
                                </div>
                                <div class="more-info">
                                    <p class="lead">
                                    আস-সালামু আলাইকুম,আমার সাথে যোগাযোগ করতে পাশে আপনার নাম,আপনার ফোন নাম্বার ,ইমেল অ্যাড্রেস  ও আপনার ম্যাসেজ লিখে  সেন্ড ম্যাসেজ এ ক্লিক করুন ।

                                    </p>
                                    <ul class="list-ico">
                                        <li class="list_style"><i class="fas fa-map-marker-alt"></i>Seo-Coloni, Arafatnagor,Joypurhat</li>
                                        <li class="list_style"><i class="fas fa-phone-volume"></i> 01739-601888</li>
                                        <li class="list_style"><i class="fas fa-envelope-square"></i> jahidrana2020@gmail.com</li>
                                    </ul>
                                </div>
                                <div class="socials">
                                    <ul class="social-iconss">

                                        <li><a href="https://www.facebook.com/profile.php?id=100045257798709" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://twitter.com/jahid_rana2020" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="https://github.com/JahidRana" target="_blank"><i class="fab fa-github"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/jahid-rana-203765204/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<section class="map_sec">
<div class="map">
    <div class="row">
    <div class="col-lg-6 col-sm-12">

    <h2 class="map_title">My Location</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3613.119968950706!2d89.03590401495974!3d25.097799983942416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc927344882b3b%3A0xfb905e6725c7aa91!2sCircuit%20House%2C%20Joypurhat!5e0!3m2!1sen!2sbd!4v1622225213711!5m2!1sen!2sbd" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


    </div>
    <div class="col-lg-6 col-sm-12">
    <h2 class="map_title">My Bio</h2>
    <div class="main-bio">
    <div class="bio col-sm-12">

<h2 class="head">Name : Md. Jahid Rana</h2>
<h2 class="head">Department : CSE</h2>
<h2 class="head">Jashore Universty of Science and Technology</h2>


    </div>
    </div>
    </div>
    </div>
    

</div>

</section>
<!--/ Section Contact-footer End /-->
<?php

include("foot.php");

?>
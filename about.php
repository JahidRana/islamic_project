<?php 

session_start();
$_SESSION['sent'] = "";
?>

<style>

@import url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}
h2.heading {
    font-size: 40px;
    color: black;
    margin-bottom: -2px;
    background: greenyellow;
    text-align: center !important;
    padding: 33px 77px;
    
}
.sec{
    margin-top: 5px;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 30vh;
    background: #000;
}
.content{
    position: relative;
}
.content h2{
    position: absolute;

    transform: translate(-50%,-50%);
    font-size: 8em;
}

.content h2:nth-child(1){
    color: transparent;
    -webkit-text-stroke: 2px #03a9f4;
}

.content h2:nth-child(2){
    color: #03a9f4;
   animation: animate 4s ease-in-out infinite;
}
@keyframes animate {
    0%,100%{
        clip-path: polygon(0% 45%,15% 44%,32% 50%,54% 60%,70% 61%,84% 59%,100% 52%,100% 100%,0% 100%);
    }
    50%{
        clip-path: polygon(0% 60%,16% 65%,34% 66%,51% 62%,67% 50%,84% 45%,100% 46%,100% 100%,0% 100%);
    }
}


.kotha_heading {
    text-align: center;

    color: white;
    font-size: 23px;
}
h3.kotha_heading {
    margin-top: 13px;
    color: black;
    font-size: 26px;
    font-weight: 500;
    margin-bottom: 10px;
}
.para {
    text-align: left;
    padding: 15px 19px;
    width: 50%;
    margin: auto;
    height: auto;
    background: powderblue;
    font-size: 24px;
    border-radius: 22px;
    line-height: 40px;
}
a.click {
    text-decoration: none;
    padding: 2px;
    display: block;
    background: black;
    width: 120px;
    color: white;
    cursor: pointer;
    border-radius: 28px 0px 46px 0px;
    transition: all 0.5s;
}
a.click:hover{
    text-decoration: none;
    color:black;
    background: #03a9f4;
}
i.fas.fa-heart {
    color: red;
}
li a i {
        margin-top: 10px;
    }


</style>

<?php

include("header.php");

?>
<h2 class="heading">আমার কিছু কথা</h2>



<div class="col-12 kotha design">

<h3 class="kotha_heading"><i class="fas fa-heart"></i>ওয়েবসাইটটি ভিজিট করার জন্য আপনাকে অসংখ্য ধন্যবাদ<i class="fas fa-heart"></i> </h3><
<p class="para">প্রথমে সবাই আমার সালাম নিবেন ।আসসালামু আলাইকুম । আমি মোঃ জাহিদ রানা । এই ওয়েবসাইটটি তৈরি করার পিছনে আমার কোনো ব্যক্তিগত স্বার্থ নেই ।কারণ আমি এখনো শিখতেছি ।শুধুমাত্র ইসলাম প্রচার করার জন্য সকলকিছুকে এক জায়গায় করেছি মাত্র । এখানের সব কিছুই বিভিন্ন জায়গা থেকে সংগ্রহ করা আছে । আর এই ওয়েবসাইটটি রেস্পন্সিভ করা হয় নি এখনো । শুধুমাত্র বড় স্ক্রিনেই ভাল্ভাবে ব্যবহার করা যাবে । আমার কোনো ভুল ত্রূটি হলে মাফ করবেন । আর আপনি যদি কোনো কিছু বলতে চান তাহলে এখানে ক্লিক করুন....<a href="contact.php" class="click">Click me</a> </p>





</div>


<section class="sec">
<div class="content">

<h2>Thanks</h2>
<h2>Thanks</h2>

</div> 
</section>







</div> 

<?php

include("foot.php");

?>

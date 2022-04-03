<?php
include 'config.php';
session_start();

error_reporting(0);

$cos = $_SESSION['name'];

if (isset($_SESSION['name'])) {
    print '<div class="all">
    <div class="menu">
        <div class="acc">
        <a href="store#jordan"><i style="text-align:left;float:left;padding-left:4.8vh;"><img src="jordanlogo.png" width="20px"></i></a>
        <a href="help">Pomoc</a> &#160 | &#160 <a href="account?action=myprofile ">Cześć, ';print $cos; print'&#160&#160 <i class="fas fa-user"></i></a>
        </div>
        <div class="menulink">
            <ul><li style="padding-left:4.5vh;margin-top:4.5%"><a href="home"><i><img src="nikeswoosh.png" width="60px"></i></a></li></ul>
            <ul class="navlink" style="padding-left:58vh">
                <li><a href="store#news">Nowości</a></li>
                <li><a href="store#men">Mężczyźni</a></li>
                <li><a href="store#women">Kobiety</a></li>
                <li><a href="store#kids">Dzieci</a></li>
                <li><a href="store#discounts">Rabat do 50%</a></li>
                <li><a href="store#collections">Kolekcje</a></li>
            </ul>
            <ul style="float: right;">
                <li><a href="koszyk"><i class="fa fa-regular fa-heart"></i></a></li>
                <li style="padding-right:49px"><a href="home"><i class="fa fa-light fa-bag-shopping"></i></i></a></li>
            </ul>
        </div>
    </div>
    <div class="home">';
}
else { print '<div class="all">
    <div class="menu">
        <div class="acc">
        <a href="store#jordan"><i style="text-align:left;float:left;padding-left:4.8vh;"><img src="jordanlogo.png" width="20px"></i></a>
        <a href="help">Pomoc</a> &#160 | &#160 <a href="account?action=myprofile ">Zaloguj się &#160&#160 <i class="fas fa-user"></i></a>
        </div>
        <div class="menulink">
            <ul><li style="padding-left:4.5vh;margin-top:4.5%"><a href="home"><i><img src="nikeswoosh.png" width="60px"></i></a></li></ul>
            <ul class="navlink" style="padding-left:58vh">
                <li><a href="store#news">Nowości</a></li>
                <li><a href="store#men">Mężczyźni</a></li>
                <li><a href="store#women">Kobiety</a></li>
                <li><a href="store#kids">Dzieci</a></li>
                <li><a href="store#discounts">Rabat do 50%</a></li>
                <li><a href="store#collections">Kolekcje</a></li>
            </ul>
            <ul style="float: right;">
                <li><a href="koszyk"><i class="fa fa-regular fa-heart"></i></a></li>
                <li style="padding-right:49px"><a href="home"><i class="fa fa-light fa-bag-shopping"></i></i></a></li>
            </ul>
        </div>
    </div>
    <div class="home">';

}






       

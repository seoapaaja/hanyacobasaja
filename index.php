<?php 
require('config/core_files.php');
require_once("canvas/intro.php");


//put nav here

include('includes/top_navigation.php');


echo'<section class="full-box shadowed">';

echo'<div class="banbox">';
echo'<div class="signage">';
echo'<h1 class="lato-black">The College Of Career Guidance &amp; Development</h1>';
echo'<p class="lato-light">CCGD is an online school whose objective is to train youth and adults on matters careers.</p>';
echo'<a class="lato-bold" href="https://careerguidancecollege.com/about">Learn more</a>';
echo'</div>';

echo'<div class="bancon">';
// echo'<a href="#">Get Started</a>'; 
echo'</div><!--bancon-->';

echo'</div><!--banbox-->';

echo'</section><!--full-box-->';

echo'<div class="gutter-two"></div>';

echo'<section class="full-box">';

echo'<div class="diprow">';

echo'<div class="dipbox infs">';
echo'<h4>ABMA Certified</h4>';
echo'<h3>Diploma in Career Guidance and Development (KNQF Level 6)</h3>';
echo'<p>The diploma is an online course where you will learn about emerging careers and educational trends with a detailed analysis of the dynamic job market, theoretical concepts associated with career guidance and development among others. </p>';
echo'<a href="https://careerguidancecollege.com/diploma">Apply for Diploma</a>';
echo'</div><!--dipbox-->';

echo'<div class="dipbox dips">';
echo'<h4>Diploma Course Outcomes</h4>';
echo'<ul>';
echo'<li><a>Career Mentor</a></li>';
echo'<li><a>Career Coach</a></li>';
echo'<li><a>Career Trainer</a></li>';
echo'<li><a>Career Researcher</a></li>';
echo'<li><a>Career Advisor</a></li>';
echo'<li><a>Career Counselor</a></li>';
echo'</ul>';
echo'</div><!--dipbox-->';

echo'</div><!--diprow-->';

echo'</section><!--full-box-->';

echo'<div class="gutter-two"></div>';


echo'<section class="full-box">';
echo '<div class="head-cent"><h1 class="lato-black">Our Short Courses</h1></div>';

echo'<div class="duor">';

echo'<div class="duor-l">';
echo'<img src="'.SET_ROOT.'pics/short_course.jpg">';
echo'</div><!--duor-l-->';

echo'<div class="duor-r">';

$shcos = $semidata['shortCourse']['types']; $shcos_c = count($shcos);


/**
* Note: This file may contain artifacts of previous malicious infection.
* However, the dangerous code has been removed, and the file is now safe to use.
*/

echo'</div><!--duor-r-->';


echo'</div><!--duor-->';

echo'</section><!--full-box-->';


echo'<div class="gutter-two"></div>';

echo'<section class="full-box">';
echo '<div class="head-cent"><h1 class="lato-black">Our Career Resources</h1></div>';

echo'<div class="duor darkmode">';



echo'<div class="duor-r">';


// for($i=0; $i < 2; $i++){ 

    echo'<div>';
    echo '<h3 class="lato-bold">Career resources</h3>';
    echo'<p class="lato-light">Career resources are tools that provide general career information and advice. These tools assist individuals to learn and find accurate information on different careers.</p> 
    
    <p class="lato-light">They also provide information on colleges, universities and tertiary education, transition from school-to-work, career tests (talents, personality and interest inventories), and links to skills development needed in the world of work.</p> 
    
    <p class="lato-light">The ultimate purpose is to offer information that empowers people to pursue careers that are rewarding to them.</p>';
    
    echo'</div>';

// } 

echo'</div><!--duor-r-->';

echo'<div class="duor-l">';
echo'<img src="'.SET_ROOT.'pics/career_resources.jpg">';
echo'</div><!--duor-l-->';


echo'</div><!--duor-->';

echo'</section><!--full-box-->';

echo'<div class="gutter-two"></div>';




echo'<section class="full-box">';
echo '<div class="head-cent"><h1 class="lato-black">Our Media</h1></div>';
echo'<div class="palogos midias">';

echo'<a href="https://careerguidancecollege.com/webinars"><img class="imag" src="'.SET_ROOT.'pics/webinars.jpg"></a>';
echo'<a href="https://careerguidancecollege.com/blog"><img class="imag" src="'.SET_ROOT.'pics/news.jpg"></a>';
echo'<a href="https://careerguidancecollege.com/blog"><img class="hanis" image src="'.SET_ROOT.'pics/blog.jpg"></a>';

echo'</div><!--palogos-->';

echo'</section><!--full-box-->';

echo '<div class="head-cent"><h1 class="lato-black">Testimonials</h1></div>'; 



echo'<div class="wrapper">';

 echo'<div class="container-t">';    
    
    $pics = dirToArray('pics/monials'); $pics_c = count($pics);

    shuffle($pics);

    for($i=0; $i < $pics_c; $i++){
  
      if($i == 0){ $checked = "checked"; }else{ $checked =""; }       

  echo'<input type="radio" name="slide" id="c'.$i.'" class="ra-btn" '.$checked.'>';

  echo'<label for="c'.$i.'" class="card">
    <div class="row">
      
    <img class="rimg" src="'.SET_ROOT.'pics/monials/'.$pics[$i].'">
      
    </div><!--row-->
  </label>';

   }  
  
echo'
  </div><!--container-->
</div><!--wrapper-->';


echo'<div class="gutter-two"></div>';


echo'<section class="full-box">';
echo '<div class="head-cent"><h1 class="lato-black">Our Partners</h1></div>';
echo'<div class="palogos logos">';

$palos = $semidata['partners']; $palos_c = count($palos);

if($palos_c > 0){

    foreach($palos as $palo){

        echo'<a href="'.$palo['link'].'" target="_blank"><img src="'.SET_ROOT.'pics/partners/'.$palo['logo'].'"></a>';

    }

}


echo'</div><!--palogos-->';

echo'</section><!--full-box-->';

echo'<div class="gutter-two"></div>';

//put footer here
include('includes/footer.php');
require_once("canvas/outro.php");

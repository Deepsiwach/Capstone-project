@extends('layout')
@section('title','HOME')

@section('Header')
<x-header/>
@endsection

@section('container')

<div id="wrapper">
<div class="clear">
<div class="slideshow-container">

<div class="mySlides fade">
  <!--<div class="numbertext">1 / 3</div>-->
  <img src="images/Container/DSC_1 (4).jpg" style="width:100%">
  <!--<div class="text">Caption Text</div>-->
</div>

<div class="mySlides fade">
  <!--<div class="numbertext">2 / 3</div>-->
  <img src="images/Container/DSC_1 (3).jpg" style="width:100%">
  <!--<div class="text">Caption Two</div>-->
</div>

<div class="mySlides fade">
  <!--<div class="numbertext">3 / 3</div>-->
  <img src="images/Container/DSC_1 (2).jpg" style="width:100%">
  <!--<div class="text">Caption Three</div>-->
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}
</script>
<div class="clear">
</div>
<div id="wrapper">

<div class="clear">

</div>

<!--<div style="text-align:center;">
 <iframe src="constitution.htm"  width="575" height="575"  class="lnkstyle" ></iframe>


</div>-->
<div class="box-1">






<div class="box-1-map-1">
<div class="box-1-heading-1">YVCK Location in Kalirawan</div>

<div class="box-1-mapimage-1"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3479.6616713922685!2d75.57032011505159!3d29.292260682162254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3913d77a9fa9f257%3A0xf037165e11fd26bc!2sYuva%20Vikash%20Club%20Kalirawan!5e0!3m2!1sen!2sin!4v1617783071427!5m2!1sen!2sin" width="250" height="282" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
</div>
</div>


<div class="box-2">

<div class="box-2-text">
<div><a href="#" class="box-2cnt">Core Programmes</a></div>
<div ><img class="box-2-img" src="images/Container/DSC_1 (7).jpg" /></div>
</div>
<div class="box-2-text">
<div><a href="#" class="box-2cnt">Projects</a></div>
<div><img class="box-2-img" src="images/Container/DSC_1 (6).jpg" /></div>
</div>
<div class="clear"></div>

<div class="box-2-text">
<div><a href="#" class="box-2cnt">Sports</a></div>
<div ><img class="box-2-img" src="images/Container/DSC_1 (3).jpg" /></div>
</div>
<div class="box-2-text">
<div><a href="#" class="box-2cnt">COVID Activities</a></div>
<div ><img class="box-2-img" src="images/Container/DSC_1 (4).jpg" /></div>
</div></div>

<div class="box-3">


<div class="middle">

<div id="tabsection">
 <div class="box-1-heading-1"> What's New</div>
       
     
                

                

      <div style="clear:both;"></div>
      

               
        
    	
</div>         


     
             

 <p  style=" background-color:white; width:auto;text-decoration:none; color:Red;  margin-top:3px; text-align:center; " 
            class="style1"> 
           
 

 
  </p> 


  	

<div class="tab_container">
   <div id="tab1" class="tab_content">
		  
          <p >  </p
  </div> 
</div>

<div id="tab2" class="tab_content">

        
</div>
</div>
</div>
</div>

<!-----------------wrapper end------------------------>

<div class="clear"></div>
<div id="specialprogramme">



<div id="bluepatti" style="background-color:#deeff7; font-family: Arial; height: 30px;  color:blue; font-size:14px; "> &nbsp; </div>




<div id="Div6" style="background-color:#deeff7; font-family: Arial; height: 30px;  color:blue; font-size:14px; "  vertical-align="middle"   align="center" > &nbsp; </div>




<div id="photogallary-part">

<table width="100%" border="0" cellspacing="5" cellpadding="0">


<tr>
<td width="50%" valign="top"> <a href="#"> <img src="images/Container/DSC_1 (1).jpg" class="img" width="475" height="320"   /></a></td>



<td width="50%">
<a href="#"> <img src="images/Container/DSC_1 (3).jpg" class="img" width="475" height="320" /></a></td>     
</tr>

<tr>
<td width="50%" class="phototext1">Photogallery    </td>
<td width="50%" class="phototext"> Videogallery   </td>

</tr>




</table>


</div>


@endsection
@section('Foot')
<x-footer/>
@endsection



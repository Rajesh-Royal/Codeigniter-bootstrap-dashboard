<!DOCTYPE html>
<html lang="en">
<head>
<title>Footer</title>
<!-- Latest compiled and minified CSS -->
<style>
	
#footer ul { list-style: none; }
#footer ul>li>a {
color: grey;
text-decoration: none;
line-height: 1.8;
}
#footer ul>li>a:hover,
a:hover{
color: #ff6600;
font-weight: 500;
}

.col-heading {
display: block;
font-size: 2rem;
text-transform: uppercase;
color:#304f50;
font-weight: 500;
margin: 1rem 0;
padding: .4rem 0px;
border-bottom: 1px solid #c7c7c7; 
letter-spacing: 3px;
}

#footer .fa {
color: #304f50;
margin-right: 10px;
font-size:18px;
width:2.25rem;
}
#to-top {
display: none;
position: fixed;
bottom: 40px;
right: 20px;
font-size: 18px;
border: none;
outline: none;
background-color: #304f50;
color: white;
padding: 8px;
border-radius: 0px;
cursor: pointer;
z-index: 99;
}
#to-top:hover {
background-color: #555;
}

 #bottom-footer {
background-color:cadetblue;
color:white;
margin-top: 2rem;
padding-top: .3rem;
}
 .vertical-links>li {
display: inline-block;
vertical-align: text-bottom;
}
 .vertical-links>li>a {
color: white;
font-weight: 400;
margin-left: 1rem;
list-style-type:square;
}
</style>
<body>

  <div class="container-fluid" style="background-color:#eff5f5;">

    <button onclick="topFunction()" id="to-top" title="Go to top"><span class="fa fa-arrow-up"></span></button>

    <div class="row  row-no-gutters" id="footer">
      <div class="col-xs-12 col-sm-6 col-md-3" >
        <ul>
          <li class="col-heading">Subheading</li>
          <li>
            <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:99-999-999-9999">99-999-999-9999</a>
          </li>
          <li>
            <i class="fa fa-mobile" aria-hidden="true"></i><a href="sms:99-999-999-9999">SMS Message</a>
          </li>
          <li>
             <i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">Address</a>
          </li> 
          <li>
             <i class="fa fa-envelope-square" aria-hidden="true"></i><a href="mailto:someone@yoursite.com?subject=Email Subject line">Email Us</a>  
          </li> 
        </ul>
      </div>     

      <div class="col-xs-12 col-sm-6 col-md-3" >
        <ul>
          <li class="col-heading">Subheading</li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
        </ul>
      </div>      

      <div class="col-xs-12 col-sm-6 col-md-3" >
        <ul>
          <li class="col-heading">Subheading</li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
        </ul>
      </div>
      
      <div class="col-xs-12 col-sm-6 col-md-3" >
        <ul>
          <li class="col-heading">Subheading</li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
        </ul>
      </div>
    </div> <!--  end row  -->
    
    <div class="row row-no-gutters" id="bottom-footer" >
      
      <div class="col-xs-12 col-md-5 text-center" >
          <ul class="vertical-links small">
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Site Map</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
      </div>
      <div class="col-xs-12 col-md-2 text-center" >
        <p><i class="fa fa-heart-o" aria-hidden="true"></i></p>
      </div>
      <div class="col-xs-12 col-md-5 text-center" >
        <ul>
          <li class="small">© Copyright 2019 Website by <a href="#" style="color:white;font-weight:500;">Developr</a>. All Rights reserved.</li>
        </ul>
      </div>
    </div> <!--  end row  -->

  </div> <!--  end container-fluid  -->

<script>
// Script from W3 Schools  
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("to-top").style.display = "block";
  } else {
    document.getElementById("to-top").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>
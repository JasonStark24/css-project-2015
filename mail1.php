<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="images/RJ_Logo-175.jpg" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RJ Farm</title>

<link rel="stylesheet" href="css/style.css" type="text/css">






<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>





</head>

<body>
	<div id="background">
<div id="page">

<div id="header">

<center>
<a href="index.html"><img src="images/RJfarmlogo.png" width="610"  height="65" title="RJ Farm" /></a></center>
</div>
<div id="navigation">
					<ul>
						<li >
							<a href="index.html">Home</a>
						</li>
						<li>
							<a href="about.html">About</a>
						</li>
						<li >
							<a href="Product.html">Products</a>
						</li>
					<li>
							<a href="history.html">history</a>
						</li>
							<li>
							<a href="Gallery.html">Gallery</a>
						</li>
					
						<li class="selected">
							<a href="contact.html">Contact</a>
						</li>
					</ul>
				</div>
		


<div id="contentproduct">

  
  
  
  <div id="content">

				<h1>Contact</h1>
                

            <p>
              <?php

/* All form fields are automatically passed to the PHP script through the array $HTTP_POST_VARS. */
$email = 'jasoncalope.jc@gmail.com';
$subject = $HTTP_POST_VARS['subject'];
$message = $HTTP_POST_VARS['message'];

/* PHP form validation: the script checks that the Email field contains a valid email address and the Subject field isn't empty. preg_match performs a regular expression match. It's a very powerful PHP function to validate form fields and other strings - see PHP manual for details. */
if (!preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/", $email)) {
  echo "<h4>Invalid email address</h4>";
  echo "<a href='javascript:history.back(1);'>Back</a>";
} elseif ($subject == "") {
  echo "<h4>No subject</h4>";
  echo "<a href='javascript:history.back(1);'>Back</a>";
}

/* Sends the mail and outputs the "Thank you" string if the mail is successfully sent, or the error string otherwise. */
elseif (mail($email,$subject,$message)) {
  echo "<h4>Thank you for sending email</h4>";
} else {
  echo "<h4>Can't send email to $email</h4>";
}
?>
            </p>
  </div>
  
   <div id="realfoot">
   <center>
   <img src="images/spring1.png"  />
   </center>

   
   <div id="leftfoot"></div>
   
   
   
   <div id="centerfoot">
   <h3>Contact Information</h3>
   
   <div id="centerfoot_0">
   <div id="centerfoot_0_a"><img src="images/fish_us1.png" /></div>
   <div id="centerfoot_0_b"><p>Sinakayanan,Catigbian,<br />Bohol</p></div>
   
   </div>
   
   
   
   <div id="centerfoot_1">
   <div id="centerfoot_1_a">
   <img src="images/phone.png" />
   </div>
   <div id="centerfoot_1_b">
   <p>639077984213</p>
   </div>
   
   </div>
   
   
   <div id="centerfoot_2">
   <div id="centerfoot_2_a"><img src="images/mail.png" /></div>
   <div id="centerfoot_2_b"><p>rjfarm@gmail.com</p></div>
   
   </div>
   </div>
   
   
   <div id="rigtfoot">
   <h3>Share with others</h3>
   
   
      
   <div id="centerfoot_0">
   <div id="centerfoot_0_a"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('facebook','','images/Facebook_logo.png',1)"><img src="images/Facebook_logo2.png" width="50" height="50" id="facebook" /></a></div>
   <div id="centerfoot_0_b"><p>Like Us on Facebook!</p></div>
   
   </div>
   
   
   
   <div id="centerfoot_1">
   <div id="centerfoot_1_a"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('twitter','','images/twitter_logo.png',1)"><img src="images/twitter_logo2.png" width="50" height="50" id="twitter" /></a>
   </div>
   <div id="centerfoot_1_b">
   <p>Follow Us on Twitter</p>
   </div>
   
   </div>
   
   
   <div id="centerfoot_2">
   <div id="centerfoot_2_a"><a href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Instagram','','images/instagram logo.png',1)"><img src="images/instagram logo2.png" width="50" height="50" id="Instagram" /></a></div>
   <div id="centerfoot_2_b"><p>Share Us on Instagram</p></div>
   
   </div>
   
   </div>
   </div>
   
  <div id="contentburn"></div>

  
  
  
  </div>

<div id="footer"><p>
RJ Farm &copy; 2015  | All Rights Reserved
</p></div>
</div>
</body>
</html>

<?php

include("config.php");
$link = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("connection failed");

$errors = array();
$data = array(); 

$name = mysqli_real_escape_string($link,$_POST['name']);
$pwd = mysqli_real_escape_string($link,$_POST['pwd']);
$cpwd = mysqli_real_escape_string($link,$_POST['cpwd']);
$college = mysqli_real_escape_string($link,$_POST['college']);
$email = mysqli_real_escape_string($link,$_POST['email']);
$phone = mysqli_real_escape_string($link,$_POST['phone']);
$accom = isset($_POST['accom']) ? mysqli_real_escape_string($link,$_POST['accom']) : 'no'; 
$gender =  mysqli_real_escape_string($link,$_POST['gender']);
  
$activation = md5(uniqid(rand(), true));
$activated = "0";
$bool = true;

function hashSSHA($password) {
    $salt = sha1(rand());
    $salt = substr($salt, 0, 10);
    $encrypted = base64_encode(sha1($password . $salt, true) . $salt);
    $hash = array("salt" => $salt, "encrypted" => $encrypted);
    return $hash;
}

if($pwd == $cpwd) { 
    $id = mysqli_query($link, "Select *  from users ORDER BY id DESC limit 1 ");
    $row = mysqli_fetch_array($id);
    $uid=$row['id'];
     
    $uid++;
    $uuid="D16".$uid;
    $query = mysqli_query($link, "Select * from users");

    while($row = mysqli_fetch_array($query)) {
      	$table_users = $row['email']; 
	      	if($email == $table_users) {
	      		$bool = false;
	      $errors['email']= 'This email is already registered with us!';
	    }
	}
    
	if($bool) {
	    $hash = hashSSHA($pwd);
	    $encrypted_password = $hash["encrypted"];
	    $salt = $hash["salt"];
	      
	    mysqli_query($link, "INSERT INTO users (uid, name, password, salt, email, mobile, college, accommodation, activation, activated, gender) VALUES ('$uuid','$name','$encrypted_password','$salt','$email','$phone','$college','$accom','$activation','$activated','$gender')"); 

	    if (mysqli_affected_rows($link) == 1) {
	    	// Send the email:
           $message = '<!DOCTYPE html>
				<html>
				   <head>
				      <style type="text/css">
				        /* ------------------------------------- 
				        		General styles 
				        ------------------------------------- */         
				         body {width:100% !important; margin:0; padding:0; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;}
				         #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
				         img {outline:none; text-decoration:none; border:none; -ms-interpolation-mode: bicubic;}
				         a img {border:none;}
				         .image_fix {display:block;}
				         p {margin: 0px !important;}
				         table td {border-collapse: collapse;}
				         table {border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;}
				         table[class=full] { width: 100%; }
				         
				          /* Client-specific Styles */
				         #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
				         /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
				         .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
				         .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing.*/

				        /* ------------------------------------- 
				        		Typography 
				        ------------------------------------- */        
				         body, td {font-family: Helvetica, Arial, sans-serif; font-size:14px; color: #000000;}
				                 
				        /* ------------------------------------- 
				        		Tablet styles 
				        ------------------------------------- */
				         @media only screen and (max-width: 640px) {
				         a[href^="tel"], a[href^="sms"] {
				         text-decoration: none;
				         color: #ffffff; /* or whatever your want */
				         pointer-events: none;
				         cursor: default;
				         }
				         .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
				         text-decoration: default;
				         color: #ffffff !important;
				         pointer-events: auto;
				         cursor: default;
				         }
				         table[class=devicewidth] {width: 440px !important; text-align:center !important;}
				         td[class=devicewidth] {width: 440px !important; text-align:center !important;}
				         table[class=devicewidthinner] {width: 420px !important; text-align:center !important;}
				         td[class=devicewidthinner] {width: 420px !important; text-align:center !important;}        
				         table[class="emhide"] {display: none !important;}
				         td[class="emhide"] {display: none !important;}
				         img[class="bigimage"] {width: 440px !important; height:169px !important;}
				         img[class="col2img"] {width: 260px !important; height:103px !important;}
				         img[class="col2img2"] {width: 260px !important; height:103px !important; padding-top:25px;}         
				         td[class="logo"] {text-align: center !important;} 
				         img[class="features"] {padding-bottom:25px;}            
				         table[class=sep] {width: 80% !important;}  
				         td[class=mobilecentering] {text-align:center !important;}   
				         table[class=FluidButton] {text-align: center;margin: 0px auto !important;}    
				         td[class=footer] {width: 100%; padding-left: 10px; padding-right: 10px; text-align:center !important;}                   
				         }
				         
				        /* ------------------------------------- 
				        		Mobile styles 
				        ------------------------------------- */
				         @media only screen and (max-width: 480px) {
				         a[href^="tel"], a[href^="sms"] {
				         text-decoration: none;
				         color: #ffffff; /* or whatever your want */
				         pointer-events: none;
				         cursor: default;
				         }
				         .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
				         text-decoration: default;
				         color: #ffffff !important; 
				         pointer-events: auto;
				         cursor: default;
				         }
				         table[class=devicewidth] {width: 280px !important; text-align:center !important;}
				         td[class=devicewidth] {width: 280px !important; text-align:center !important;}
				         table[class=devicewidthinner] {width: 260px !important; text-align:center !important;}
				         td[class=devicewidthinner] {width: 260px !important; text-align:center !important;}
				         table[class="emhide"] {display: none !important; }
				         td[class="emhide"] {display: none !important; }
				         img[class="bigimage"] {width: 280px !important; height:116px !important;}
				         img[class="col2img"] {width: 260px !important; height:103px !important;}
				         img[class="col2img2"] {width: 260px !important; height:103px !important;} 
				         }
				      </style>      
				   </head>
				   <body bgcolor="#eeeeee">
				      
				  
				   
				   <!-- Start of header -->
				   <table width="100%"  cellpadding="0" cellspacing="0" border="0" id="backgroundTable">      
				         <tr>
				            <td align="center">
				               <table bgcolor="#FFFFFF" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">                  
				                     <tr>
				                        <td align="center">
				                           <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">                              
				                                 <tr>
				                                    <td align="center">
				                                       <table width="540" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
				                                          
				                                            <!-- Spacing -->
				                                             <tr>
				                                                <td width="100%" height="30" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                             </tr>
				                                             <!-- End of Spacing -->                                          
				                                             <!-- Logo: 179x40 pixels -->
				                                             <tr>
				                                                <td width="100%" align="center" valign="middle" class="devicewidthinner" style="text-align:center;">
				                                                   <img width="179" height="40" src="img/logo-mail.png" alt="logo" border="0" style="border:none; outline:none; text-decoration:none;">
				                                                </td>
				                                             </tr>
				                                             <!-- End of Logo -->
				                                             <!-- Spacing -->
				                                             <tr>
				                                                <td width="100%" height="30" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                             </tr>
				                                             <!-- End of Spacing -->                                            
				                                       </table>
				                                    </td>
				                                 </tr>                             
				                           </table>
				                        </td>
				                     </tr>                  
				               </table>
				            </td>
				         </tr>      
				   </table>
				   <!-- End of Header -->

				   <!-- Start of main image -->
				   <table width="100%"  cellpadding="0" cellspacing="0" border="0" id="backgroundTable">      
				         <tr>
				            <td align="center">
				            <!-- Main image: 600x203 pixels and line -->
				               <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
				                     <tr>
				                        <td width="600" align="center" cellspacing="0" cellpadding="0" border="0" class="devicewidth">
				                          <img width="600" border="0" height="203" alt="main image" style="display:block; border:none; outline:none; text-decoration:none;" src="img/main-image.jpg" class="bigimage">
				                        </td>
				                     </tr>
				                     <tr>
				                        <td height="4" style="font-size: 0px; line-height: 0px;" bgcolor="#ea3a52">&nbsp;</td>
				                     </tr>   
				               </table>  
				            </td>
				            <!-- End of Main image -->
				         </tr>      
				   </table>
				   <!-- End of main image -->

				   <!-- Block 1 -->
				   <table width="100%"  cellpadding="0" cellspacing="0" border="0" id="backgroundTable">      
				         <tr>
				            <td align="center">
				               <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">                 
				                     <tr>
				                        <td align="center">
				                           <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">                             
				                                 <!-- Spacing -->
				                                 <tr>
				                                    <td width="100%" height="30" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                 </tr>
				                                 <!-- End of Spacing -->
				                                 <tr>
				                                    <td align="center">
				                                       <table width="540" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">                                          
				                                             <!-- Title -->
				                                             <tr>
				                                                <td style="font-family: Helvetica, Arial, sans-serif; text-align:center; font-weight:bold; font-size: 24px; line-height:24px;">
				                                                   Confirm your email address
				                                                </td>
				                                             </tr>
				                                             <!-- End of Title -->
				                                             <!-- Spacing -->
				                                             <tr>
				                                                <td height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                             </tr>
				                                             <!-- End of Spacing -->
				                                             <!-- Content -->
				                                             <tr>
				                                                <td style="font-family: Helvetica, Arial, sans-serif; font-weight: normal; font-size:14px; color: #0E0E0E; line-height:18px; text-align:center;">
				                                                    The Computer Science & Engineering department of NSS College of Engineering, Palakkad is organizing a National level Technical fest - DVAITA 16 on 19th and 20th February, 2016.<br><br>

				                                                    DVAITA that contributes some of the core Indian beliefs on the nature of reality finds its relevance on the Binary system of our scientific world. This is the reason why this event got entitled by the name "DVAITA".<br><br>

				                                                    The fest features various technical events that challenges the skills of any computer professional and general events for igniting the creativity of engineering minds. We expect it to reach out to more than 3000 bright minds and potential
				                                                    engineers from various colleges in India over 2 days.</td>
				                                             </tr>
				                                             <!-- End of content -->
				                                             <!-- Spacing -->
				                                             <tr>
				                                                <td width="100%" height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                             </tr>
				                                             <!-- End of Spacing -->
				                                             <!-- Button -->
				                                             <tr>
				                                                <td align="center">
				                                                   <table height="40" align="center" valign="middle" border="0" cellpadding="0" cellspacing="0" class="tablet-button" style="border-collapse:separate;">                                                      
				                                                         <tr>
				                                                            <td width="auto" align="center" valign="middle" height="40" style="background-color:#ea3a52; border-top-left-radius:5px; border-bottom-left-radius:5px; border-top-right-radius:5px; border-bottom-right-radius:5px; background-clip: padding-box; font-size:17px; font-family: Helvetica, Arial, sans-serif; text-align:center; color:#ffffff; font-weight: bold; letter-spacing: 1px; padding-left:42px; padding-right:42px;">
				                                                               <span style="color: #ffffff; font-size:17px;">
				                                                               <a style="color: #ffffff; text-align:center;text-decoration: none;" href="www.dvaita16.com/activate.php?email=' . urlencode($email) . '&key='.$activation.'">Confirm my email</a>
				                                                               </span>
				                                                            </td>
				                                                         </tr>                                                     
				                                                   </table>
				                                                </td>
				                                             </tr>
				                                             <!-- End of Button -->                                                                                                                                                                                        
				                                             <!-- Spacing -->
				                                             <tr>
				                                                <td width="100%" height="28" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                             </tr>
				                                             <!-- End of Spacing -->                                                                                                                     
				                                       </table>
				                                    </td>
				                                 </tr>                             
				                           </table>
				                        </td>
				                     </tr>                  
				               </table>
				            </td>
				         </tr>      
				   </table>
				   <!-- End of Block 1 -->   

				  <!-- Start of separator -->
				   <table width="100%" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" class="sep">      
				         <tr>
				            <td align="center">
				               <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
				                     <tr>
				                        <td align="center">
				                           <table width="534" align="center" bgcolor="#ea3a52" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">                             
				                               <tr>
				                                  <td height="1" style="font-size: 0px; line-height: 0px;">&nbsp;</td>
				                               </tr>                               
				                           </table>
				                        </td>
				                     </tr>               
				               </table>
				            </td>
				         </tr>      
				   </table>
				   <!-- End of separator -->
				  
				   <!-- Block 2 -->
				   <table width="100%" cellpadding="0" cellspacing="0" border="0" id="backgroundTable">      
				         <tr>
				            <td align="center">
				               <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
				                     <!-- Spacing -->
				                     <tr>
				                        <td height="29" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                     </tr>
				                     <!-- Spacing -->
				                     <tr>
				                        <td align="center">
				                           <table width="540" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">                             
				                                 <tr>
				                                    <td align="center">
				                                       <table width="187" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">                                          
				                                             <!-- Features: 187x116 pixels --> 
				                                             <tr>
				                                                 <td width="187" height="116" align="center">
				                                                   <a href="#">
				                                                   <img src="img/features.jpg" alt="features" border="0" width="187" height="116" style="display:block; border:none; outline:none; text-decoration:none;" class="features">
				                                                   </a>
				                                                </td>
				                                             </tr>
				                                             <!-- End of Features -->                                          
				                                       </table>
				                                       <!-- mobile spacing -->
				                                       <table align="left" border="0" cellpadding="0" cellspacing="0">                                          
				                                             <tr>
				                                                <td width="30" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;" class="mobilespacing">&nbsp;</td>
				                                             </tr>                                          
				                                       </table>
				                                       <!-- mobile spacing -->
				                                       <!-- start of right column -->
				                                       <table width="323" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">                                         
				                                             <!-- Title -->
				                                             <tr>
				                                                <td style="font-family: Helvetica, Arial, sans-serif; text-align:left; font-weight:bold; font-size: 20px; line-height:20px;"class="mobilecentering">
				                                                   BOOM BOX - dance competition
				                                                </td>
				                                             </tr>
				                                             <!-- End of title -->
				                                             <!-- Spacing -->
				                                             <tr>
				                                                <td width="100%" height="14" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                             </tr>
				                                             <!-- Spacing -->
				                                             <!-- Content -->
				                                             <tr>
				                                                <td style="font-family: Helvetica, Arial, sans-serif; font-size: 13px; color: #0E0E0E; text-align:left;font-weight: normal; line-height:18px;" class="mobilecentering">
				                                                    Dancing speaks a language right from the heart.
				                                                    Do you have what it takes to beat the best? Then put on your dancing shoes, Compete with the finest crews across the nation and stand a chance to be the ultimate dancing crew.
				                                                    The stage is set, dancers pumped up. Let the dance begin.
				                                                </td>
				                                             </tr>
				                                             <!-- End of content -->
				                                             <!-- Spacing -->
				                                             <tr>
				                                                <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                             </tr>
				                                             <!-- End of Spacing -->
				                                             <!-- Button -->
				                                             <tr>
				                                                <td width="100%" class="devicewidth">
				                                                   <table border="0" cellpadding="0" cellspacing="0" style="border-collapse:separate;" class="FluidButton">                                                      
				                                                         <tr>
				                                                            <td height="30" style="background-color:#ea3a52; border-top-left-radius:5px; border-bottom-left-radius:5px;border-top-right-radius:5px; border-bottom-right-radius:5px; background-clip: padding-box;font-size:14px; font-family: Helvetica, Arial, sans-serif; text-align:center; color:#ffffff; font-weight: 300; padding-left:26px; padding-right:26px;" 
				                                                           >
				                                                               <a style="color: #ffffff; text-align:center;text-decoration: none;" href="http://www.dvaita16.com">Explore More</a>
				                                                            </td>
				                                                         </tr>                                                     
				                                                   </table>
				                                                </td>
				                                             </tr>
				                                             <!-- End of Button -->                                                                           
				                                       </table>
				                                       <!-- end of right column -->
				                                    </td>
				                                 </tr>
				                              
				                           </table>
				                        </td>
				                     </tr>
				                     <!-- Spacing -->
				                     <tr>
				                        <td height="29" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                     </tr>
				                     <!-- End of Spacing -->                 
				               </table>
				            </td>
				         </tr>      
				   </table>
				   <!-- End of Block 2 -->

				  <!-- Start of separator -->
				   <table width="100%" cellpadding="0" cellspacing="0" border="0" id="backgroundTable" class="sep">      
				         <tr>
				            <td align="center">
				               <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
				                     <tr>
				                        <td align="center">
				                           <table width="534" align="center" bgcolor="#ea3a52" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner">                             
				                               <tr>
				                                  <td height="1" style="font-size: 0px; line-height: 0px;">&nbsp;</td>
				                               </tr>                               
				                           </table>
				                        </td>
				                     </tr>               
				               </table>
				            </td>
				         </tr>      
				   </table>
				   <!-- End of separator -->

				   <!-- Block 3 and 4, 2-columns -->
				   <table width="100%"  cellpadding="0" cellspacing="0" border="0" id="backgroundTable">      
				         <tr>
				            <td align="center">
				               <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">                  
				                     <tr>
				                        <td width="100%" height="29" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                     </tr>
				                     <tr>
				                        <td align="center">
				                           <table width="540" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">                             
				                                 <tr>
				                                    <td align="center">
				                                       <table width="260" align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">                                          
				                                             <!-- Graph: 252x103 pixels -->
				                                             <tr>
				                                                <td width="260" height="103" align="center">
				                                                   <img src="img/graph.png" alt="graph" border="0" width="260" height="103" style="display:block; border:none; outline:none; text-decoration:none;" class="col2img">
				                                                </td>
				                                             </tr>
				                                             <!-- End of Graph -->
				                                             <!-- Spacing -->
				                                             <tr>
				                                                <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                             </tr>
				                                             <!-- Spacing -->
				                                             <tr>
				                                                <td align="center">
				                                                   <!-- start of text content table -->
				                                                   <table width="260" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">                                                      
				                                                         <!-- Title -->
				                                                         <tr>
				                                                            <td style="font-family: Helvetica, Arial, sans-serif; text-align:left; font-weight:bold; font-size: 18px; line-height:20px;"class="mobilecentering">
				                                                               HIGH Q - QUIZ COMPETITION
				                                                            </td>
				                                                         </tr>
				                                                         <!-- End of title -->
				                                                         <!-- Spacing -->
				                                                         <tr>
				                                                            <td width="100%" height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                                         </tr>
				                                                         <!-- End of Spacing -->
				                                                         <!-- Content -->
				                                                         <tr>
				                                                            <td style="font-family: Helvetica, Arial, sans-serif; font-size: 13px; color: #0E0E0E; text-align:left; line-height: 18px;" class="mobilecentering">
				                                                                Flex you neurones to catch hold of the fleeting facts. Here is a chance to iterate your knowledge and unload your answers.
				                                                                <br> Welcome to the open quiz of Dvaita!!!
				                                                            </td>
				                                                         </tr>
				                                                         <!-- End of content -->
				                                                         <!-- Spacing -->
				                                                         <tr>
				                                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                                         </tr>
				                                                         <!-- End of Spacing -->
				                                                         <!-- Button -->
				                                                         <tr>
				                                                            <td align="center">
				                                                               <table height="30" align="center" valign="middle" border="0" cellpadding="0" cellspacing="0" class="tablet-button" style="border-collapse:separate;">                                                                  
				                                                                     <tr>
				                                                                        <td width="auto" align="center" valign="middle" height="30" style=" background-color:#ea3a52; border-top-left-radius:5px; border-bottom-left-radius:5px;border-top-right-radius:5px; border-bottom-right-radius:5px; background-clip: padding-box; font-size:14px; font-family: Helvetica, Arial, sans-serif; text-align:center; color:#ffffff; padding-left:26px; padding-right:26px;" 
				                                                                       >
				                                                                           <span style="color: #ffffff;">
				                                                                           <a style="color: #ffffff; text-align:center;text-decoration: none;" href="http://www.dvaita16.com">Learn More</a>
				                                                                           </span>
				                                                                        </td>
				                                                                     </tr>                                                                 
				                                                               </table>
				                                                            </td>
				                                                         </tr>
				                                                         <!-- End of Button -->                                                      
				                                                   </table>
				                                                </td>
				                                             </tr>
				                                             <!-- end of text content table -->                                          
				                                       </table>
				                                       <!-- end of left column -->
				                                       <!-- spacing for mobile devices-->
				                                       <table align="left" border="0" cellpadding="0" cellspacing="0" class="mobilespacing">                                          
				                                             <tr>
				                                                <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                             </tr>                                          
				                                       </table>
				                                       <!-- end of spacing for mobile devices-->
				                                       <!-- start of right column -->
				                                       <table width="260" align="right" border="0" cellpadding="0" cellspacing="0" class="devicewidth">                                         
				                                             <!-- Community: 252x103 pixels -->
				                                             <tr>
				                                                <td width="260" height="103" align="center">
				                                                   <img src="img/community.png" alt="community" border="0" width="260" height="103" style="display:block; border:none; outline:none; text-decoration:none;" class="col2img2">
				                                                </td>
				                                             </tr>
				                                             <!-- End of Community -->
				                                             <!-- Spacing -->
				                                             <tr>
				                                                <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                             </tr>
				                                             <!-- Spacing -->
				                                             <tr>
				                                                <td align="center">
				                                                   <!-- start of text content table -->
				                                                   <table width="260" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">                                                      
				                                                         <!-- Title -->
				                                                         <tr>
				                                                            <td style="font-family: Helvetica, Arial, sans-serif; text-align:left; font-weight:bold; font-size: 20px; line-height:20px;"class="mobilecentering">
				                                                                RESPAWN ARENA
				                                                            </td>
				                                                         </tr>
				                                                         <!-- End of title -->
				                                                         <!-- Spacing -->
				                                                         <tr>
				                                                            <td width="100%" height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                                         </tr>
				                                                         <!-- End of Spacing -->
				                                                         <!-- Content -->
				                                                         <tr>
				                                                            <td style="font-family: Helvetica, Arial, sans-serif; font-size: 13px; color: #0E0E0E; text-align:left;line-height: 18px;" class="mobilecentering">
				                                                                Ready for an astounding gaming experience? Here you go! Swank your gaming skills the way you want to..!!
				                                                                <BR> Welcome to the Ultimate Virtual Battlefield
				                                                            </td>
				                                                         </tr>
				                                                         <!-- End of content -->
				                                                         <!-- Spacing -->
				                                                         <tr>
				                                                            <td width="100%" height="15" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                                         </tr>
				                                                         <!-- End of Spacing -->
				                                                         <!-- Button -->
				                                                         <tr>
				                                                            <td align="center">
				                                                               <table height="30" align="center" valign="middle" border="0" cellpadding="0" cellspacing="0" class="tablet-button" style="border-collapse:separate;">                                                                
				                                                                     <tr>
				                                                                        <td width="auto" align="center" valign="middle" height="30" style=" background-color:#ea3a52; border-top-left-radius:5px; border-bottom-left-radius:5px;border-top-right-radius:5px; border-bottom-right-radius:5px; background-clip: padding-box; font-size:14px; font-family: Helvetica, Arial, sans-serif; text-align:center; color:#ffffff; padding-left:26px; padding-right:26px;" emtitle="rightimage-button" 
				                                                                       >
				                                                                           <span style="color: #ffffff;">
				                                                                           <a style="color: #ffffff; text-align:center;text-decoration: none;" href="http://www.dvaita16.com">Learn More</a>
				                                                                           </span>
				                                                                        </td>
				                                                                     </tr>                                                                 
				                                                               </table>
				                                                            </td>
				                                                         </tr>
				                                                         <!-- End of Button -->                                                     
				                                                   </table>
				                                                </td>
				                                             </tr>
				                                             <!-- end of text content table -->                                          
				                                       </table>
				                                       <!-- end of right column -->
				                                    </td>
				                                 </tr>                            
				                           </table>
				                        </td>
				                     </tr>
				                     <tr>
				                        <td width="100%" height="27" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                     </tr>                  
				               </table>
				            </td>
				         </tr>      
				   </table>
				   <!-- End of Block 3 and 4, 2-columns -->   

				   <!-- Start of footermenu -->
				   <table width="100%"  cellpadding="0" cellspacing="0" border="0" id="backgroundTable">      
				         <tr>
				            <td align="center">
				               <table width="600" bgcolor="#a0a0a0" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">                 
				                     <tr>
				                        <td align="center">
				                           <table width="540" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">                             
				                                <!-- Spacing -->
				                                <tr>
				                                    <td width="100%" height="20" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                </tr>
				                                 <!-- End of Spacing --> 
				                                 <!-- Company information -->                                
				                                 <tr>
				                                    <td width="100%" align="center" valign="middle" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; color:#fefefe; text-align:center;" class="footer">
				                                       © Dvaita16, NSS College of Engineering, Palakkad | Kerala India | <a href="mailto:contact@www.dvaita16.com" style="text-decoration: none; color:#fefefe;">contact@www.dvaita16.com</a>
				                                    </td>                                 
				                                 </tr> 
				                                <!-- End of Company information -->
				                                <!-- Spacing -->
				                                <tr>
				                                    <td width="100%" height="10" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                </tr>
				                                 <!-- End of Spacing -->                                                              
				                                 <!-- Social icons -->

				                                <!-- End of Social icons -->
				                                <!-- Spacing -->
				                                <tr>
				                                    <td width="100%" height="18" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
				                                </tr>
				                                 <!-- End of Spacing -->                                                                  
				                           </table>
				                        </td>
				                     </tr>                  
				               </table>
				            </td>
				         </tr>      
				   </table>

				  </body>
				</html>';
				$subject = 'Registration Confirmation';
				$headers  = 'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				$headers .= 'From: no-reply@dvaita16.com'."\r\n".
				    'Reply-To: '."\r\n" .
				    'X-Mailer: PHP/' . phpversion();
				mail($email, $subject , $message, $headers);
 
            } else {
            	$errors['mail']= 'You could not be registered due to a system error.
            	 We apologize for any inconvenience.';
            }

	        $data['success'] = true;
	        $data['message'] = 'Success!';
	    }
	    else {
	        $data['success'] = false;
		    $data['errors']  = $errors;
	    }
	}
	echo json_encode( $data );
}
?>
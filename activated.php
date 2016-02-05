<?php
include("config.php");
$link = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) or die ("connection failed");
$id = $_GET['id'];
if(!isset($id)) {
   echo "not set";
}

?>
<!DOCTYPE html>
<html>
   <head>
      <style type="text/css">
        /* -------------------------------------
        		General styles
        ------------------------------------- */
         body {width:100% !important; margin:auto; padding:0; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;}
         #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
         img {outline:none; text-decoration:none; border:none; -ms-interpolation-mode: bicubic;}
         a img {border:none;}
         .image_fix {display:block;}
         p {margin: 0px !important;}
         table td {border-collapse: collapse;}
         table {border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;margin: auto}
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

   <!-- Block 1 -->
   <table width="100%"   cellpadding="100" cellspacing="0" border="0" id="backgroundTable" >
         <tr>
            <td align="center">
               <table bgcolor="#ffffff" width="100%"  cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                     <tr>
                        <td align="center">
                           <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                                 <!-- Spacing -->
                                 <tr>
                                    <td width="100%" height="30" style="font-size:1px; line-height:1px; mso-line-height-rule: exactly;">&nbsp;</td>
                                 </tr>
                                 <!-- End of Spacing -->
                                 <tr>
                                    <td align="center">
                                       <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" class="devicewidthinner" >
                                             <!-- Title -->
                                             <tr>
                                                <td style="font-family: Helvetica, Arial, sans-serif; text-align:center; font-weight:bold; font-size: 24px; line-height:24px;">
                                                   <?php if($id=='act' || $id=='aact') {
                                                      echo "Thank you !";
                                                   } elseif ($id=='nact') {
                                                      echo "Oops !";
                                                   }
                                                   ?>
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
                                                   <?php if($id=='act') {
                                                      echo "Thank you for registering with us . Kindly login to view your profile.";
                                                   } elseif ($id=='nact') {
                                                      echo "Your account could not be activated. Please recheck the link or contact the system administrator.";
                                                   } else {
                                                      echo "Your account is already active. You may now Log in.";
                                                   }
                                                   ?>
                                                </td>
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
                                                               <a style="color: #ffffff; text-align:center;text-decoration: none;" href="http://www.dvaita16.com">Go to Home</a>
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

  </body>
</html>

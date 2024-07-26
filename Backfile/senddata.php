<html>
<head>
<title>Chemicals</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#FFFFFF" text="#000000" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="760" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr> 
    <td height="18" valign="top"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td colspan="3" valign="top">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td><object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0" width="760" height="62">
                    <param name=movie value="top2.swf">
                    <param name=quality value=high>
                    <embed src="top2.swf" quality=high pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash" type="application/x-shockwave-flash" width="760" height="62">
                    </embed> 
                  </object></td>
              </tr>
              <tr> 
                <td> 
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#CC0000" height="24">
                    <tr valign="middle"> 
                      <td width="2%"><img src="images/home_icon.jpg" width="16" height="24"> 
                      </td>
                      <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif">&nbsp;&nbsp;<a href="home.htm" style="text-decoration:none"><font color="#FFFFFF"><b><font size="1">Home</font></b></font></a><font size="1"><b>&nbsp;<font color="#FFFFFF">||</font>&nbsp;<a href="products.htm" style="text-decoration:none"><font color="#FFFFFF">Products</font></a>&nbsp;<font color="#FFFFFF">||</font>&nbsp;<a href="markets.htm" style="text-decoration:none"><font color="#FFFFFF">Markets</font></a>&nbsp;<font color="#FFFFFF">||</font>&nbsp;<a href="our_customer.htm" style="text-decoration:none"><font color="#FFFFFF">Our&nbsp;Customer</font></a>&nbsp;<font color="#FFFFFF">||</font>&nbsp;<a href="we_represent.htm" style="text-decoration:none"><font color="#FFFFFF">We&nbsp;Represent</font></a>&nbsp;<font color="#FFFFFF">||</font>&nbsp;<a href="link.htm" style="text-decoration:none"><font color="#FFFFFF">Link&nbsp;&&nbsp;Resources</font></a>&nbsp;<font color="#FFFFFF">||</font></b></font><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><font size="1"><b> 
                        <a href="http://www.thechemicals.net/webmail/" target="_blank" style="text-decoration:none"><font color="#FFFFFF"> 
                        Webmail</font></a> </b><font color="#FFFFFF">||</font></font></font><font size="1"><b>&nbsp;<a href="contact.htm" style="text-decoration:none"><font color="#FFFFFF">Contact&nbsp;Us</font></a></b></font></font></td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td width="122" valign="top"><img src="images/p-4.jpg" width="122" height="80"></td>
          <td width="478"> 
            <table border="0" cellspacing="0" cellpadding="0" width="473">
              <tr> 
                <td>&nbsp;</td>
              </tr>
              <tr> 
                <td height="2" valign="top"><font color="#000080" face="Arial, Helvetica"><span class="head"><b><font color="#CC0000">Markets</font>______________________________________</b></span><br>
                  </font> <br>
                  <center>
                    <?php

/* All form fields are automatically passed to the PHP script through the array $HTTP_POST_VARS. */
$email = $HTTP_POST_VARS['email'];
$name = $HTTP_POST_VARS['name'];


if (!preg_match("/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/", $email)) {
  echo "<h2>Invalid email address</h2>";
  echo "<a href='javascript:history.back(1);'>Back</a>";
} elseif ($name == "") {
  echo "<h3>No Name</h3>";
  echo "<a href='javascript:history.back(1);'>Back</a>";
}

/* Sends the mail and outputs the "Thank you" string if the mail is successfully sent, or the error string otherwise. */
elseif (
mail("info@thechemicals.net","Client Queries","
$name ($email) send the following message. \n
Contact Information : \n 
Name      : $name \n 
E-mail    : $email \n 
Company   : $company \n
Mobile    : $mobile \n
Fax       : $tel \n 
Fax       : $fax \n 
Comments     : \n \n $comments \n 

", "From: $name <$email>\n")
) {
  echo "<h2>Thanks for your queries.</h2><br> <h2>You will hear from us as soon as possible</h2>";
} else {
echo "<h2>Can't submit your queries</h2>";
  echo "<a href='javascript:history.back(1);'>Back</a>";
}


?>
                  </center>
                </td>
              </tr>
            </table>
          </td>
          <td width="87" valign="middle" align="center">&nbsp;</td>
        </tr>
        <tr> 
          <td width="122">&nbsp;</td>
          <td width="478">&nbsp;</td>
          <td width="87">&nbsp;</td>
        </tr>
      </table>
    </td>
  </tr>
  <tr> 
    <td height="18" valign="top"> <img src="images/p-5.jpg" width="760" height="41"></td>
  </tr>
  <tr> 
    <td valign="top" align="center">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td align="center" bgcolor="#CC0000" height="40"><font color="#FFFFFF" size="2" face="vardana"><b><font face="Verdana, Arial, Helvetica, sans-serif" size="1">Address 
            : 69/C Green Road, 3rd Floor, Panthapath, Dhanmondi, Dhaka-1205, Bangladesh 
            Tel: (880-2) 8621890, 8612930, <br>
            0171-520686, Fax: (880-2) 9670629 Copyright © The Chemicals,&nbsp; 
            2003&nbsp; All rights reserved. Email :<a href="mailto:info@thechemicals.net" style="text-decoration:none"><font color="#ffffff">info@thechemicals.net</font></a></font></b></font> 
          </td>
        </tr>
        <tr> 
          <td align=right height="21"> <font size="1" face="Verdana, Arial, Helvetica, sans-serif"><font color="#666666">Designed by</font><b><a href="http://www.planahead.co.uk/" target="_blank" style="text-decoration:none"><font color="#666666"> Planahead Technology Ltd</font></a></b></font> </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>

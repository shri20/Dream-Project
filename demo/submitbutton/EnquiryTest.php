<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>
      JavaScript form validator Example
    </title>
    <link rel="stylesheet" type="text/css" href="style.css"/>

    <style type="text/css" xml:space="preserve">
BODY, P,TD{ font-family: Arial,Verdana,Helvetica, sans-serif; font-size: 10pt }
A{font-family: Arial,Verdana,Helvetica, sans-serif;}
B {	font-family : Arial, Helvetica, sans-serif;	font-size : 12px;	font-weight : bold;}
</style><script language="JavaScript" src="js/gen_validatorv4.js"
    type="text/javascript" xml:space="preserve"></script>
    <script language="javascript1.5" >
function  submitform()
{
	document.myform.onsubmit();
	 
	
	} </script>
  </head>
  <body>
    <form action="" name="myform" id="myform" method="post">
      <table cellspacing="2" cellpadding="2" border="0">
        <tr>
          <td align="right">
            First Name
          </td>
          <td>
            <input type="text" name="FirstName" />
          </td>
        </tr>
        <tr>
          <td align="right">
            Last Name
          </td>
          <td>
            <input type="text" name="LastName" />
          </td>
        </tr>
        <tr>
          <td align="right">
            EMail
          </td>
          <td>
            <input type="text" name="Email" />
          </td>
        </tr>
        <tr>
          <td align="right">
            Phone
          </td>
          <td>
            <input type="text" name="Phone" />
          </td>
        </tr>
        <tr>
          <td align="right">
            Address
          </td>
          <td>
            <textarea cols="20" rows="5" name="Address"></textarea>
          </td>
        </tr>
        <tr>
          <td align="right">
            Country
          </td>
          <td>
            <select name="Country">
            <option value="000" selected="selected">
              [choose yours]
            </option>
            <option value="008">
              Albania
            </option>
            <option value="012">
              Algeria
            </option>
            <option value="016">
              American Samoa
            </option>
            <option value="020">
              Andorra
            </option>
            <option value="024">
              Angola
            </option>
            <option value="660">
              Anguilla
            </option>
            <option value="010">
              Antarctica
            </option>
            <option value="028">
              Antigua And Barbuda
            </option>
            <option value="032">
              Argentina
            </option>
            <option value="051">
              Armenia
            </option>
            <option value="533">
              Aruba
            </option></select>
          </td>
        </tr>
        <tr>
          <td align="right"></td>
          <td>
            <div class="EnquirySendBtn" ><a href="javascript:void(0);" onclick="submitform();">Send</a></div>
          </td>
        </tr>
      </table>
    </form><script language="JavaScript" type="text/javascript"     xml:space="preserve">//<![CDATA[
//You should create the validator only after the definition of the HTML form
  var frmvalidator  = new Validator("myform");
  frmvalidator.addValidation("FirstName","req","Please enter your First Name");
  frmvalidator.addValidation("FirstName","maxlen=20",	"Max length for FirstName is 20");
  frmvalidator.addValidation("FirstName","alpha","Alphabetic chars only");
  
  frmvalidator.addValidation("LastName","req","Please enter your Last Name");
  frmvalidator.addValidation("LastName","maxlen=20","Max length is 20");
  
  frmvalidator.addValidation("Email","maxlen=50");
  frmvalidator.addValidation("Email","req");
  frmvalidator.addValidation("Email","email");
  
  frmvalidator.addValidation("Phone","maxlen=50");
  frmvalidator.addValidation("Phone","numeric");
  
  frmvalidator.addValidation("Address","maxlen=50");
  frmvalidator.addValidation("Country","dontselect=000");


//]]></script>
  </body>
</html>

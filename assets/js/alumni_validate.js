 function isempty(elem,errmsg)
 {
  with(elem)
  {
   if((value.length==0) || (value==""))
   {
    alert(errmsg);
	return false;
   }
   else { return true;}
  }
 }
 
 function validatephone(xxxxx) 
 {
  var maintainplus = '';
  var numval = xxxxx.value
  if ( numval.charAt(0)=='+' )
  	{ 
	 var maintainplus = '+';
	}
  curphonevar = numval.replace(/[\\A-Za-z!"£$%^&*+_={};:'@#~,.¦\/<>?|`¬\]\[]/g,'');
  xxxxx.value = maintainplus + curphonevar;
  var maintainplus = '';
  xxxxx.focus;
}
 
 function validmail(id,errmsg)
 {
  with(id)
  {
   at=value.indexOf("@");
   dot=value.lastIndexOf(".");
   
   if(at<1 || (dot-at)<2 )
   {
    alert(errmsg);
	return false;
   }
   else { return true;}   
  }
 }
 
 function formvalidation(thisform)
 {
  with(thisform)
  {
   if(isempty(name,"Enter the Name!")==false)
   {
    name.focus();
    return false;
   }
   else if((document.form1.sex[0].checked==false)&& (document.form1.sex[1].checked==false))
	{
	 alert('Select Your Gender!');
	 document.getElementById("sex").focus();
	 return false;
	}
   else if(isempty(fname,"Enter the Father's Name!")==false)
	{
	 fname.focus();
	 return false;
	}
   else if(document.getElementById("course").selectedIndex==0)
	{
	 alert('Select the Course');
	 document.getElementById("course").focus();
	 return false;
	}
   else if(document.getElementById("branch").selectedIndex==0)
	{
	 alert('Select the Branch');
	 document.getElementById("branch").focus();
	 return false;
	}
   else if(document.getElementById("yearfrom").selectedIndex==0)
	{
	 alert('Select the Year From');
	 document.getElementById("yearfrom").focus();
	 return false;
	}
   else if(document.getElementById("yearto").selectedIndex==0)
	{
	 alert('Select the Year To');
	 document.getElementById("yearto").focus();
	 return false;
	}
   else if(validmail(mail,"Enter valid Personal E-mail id!")==false)
   {
    mail.focus();
    return false;
   }
    else if(validmail(cmail,"Enter valid Company E-mail id!")==false)
    {
    cmail.focus();
    return false;
    }
    else if(isempty(mobile,"Enter the Mobile Number!")==false)
    {
    mobile.focus();
	return false;
    }
    else if(isempty(telephone,"Enter the Telephone Number!")==false)
    {
    telephone.focus();
	return false;
    }
    else if((document.form1.current[0].checked==false)&& (document.form1.current[1].checked==false))
	{
	 alert('Select Your Current Status!');
	 document.getElementById("current").focus();
	 return false;
	}
    else if(isempty(cname,"Enter the Company Name!")==false)
	{
	 cname.focus();
	 return false;
	}
    else if(isempty(designation,"Enter the Designation!")==false)
	{
	 designation.focus();
	 return false;
	}
    else if(isempty(address,"Enter the Address!")==false)
	{
	 address.focus();
	 return false;
	}
	else if(document.getElementById("date").value=='')
	{
	 alert('Enter Date');
	 document.getElementById("date").focus();
	 return false;
	 } 
	 else if(document.getElementById("month").value=='')
	{
	 alert('Enter Month');
	 document.getElementById("month").focus();
	 return false;
	 } 
	 else if(document.getElementById("year").value=='')
	{
	 alert('Enter Year');
	 document.getElementById("year").focus();
	 return false;
	 } 
    else if(isempty(paddress,"Enter the Permanent Address!")==false)
	{
	 paddress.focus();
	 return false;
	}
    else if(isempty(caddress,"Enter the Company Address!")==false)
	{
	 caddress.focus();
	 return false;
	}
    else if((document.form1.marital[0].checked==false)&& (document.form1.marital[1].checked==false))
	{
	 alert('Select Your Marital Status!');
	 document.getElementById("marital").focus();
	 return false;
	}
    else if((document.form1.help[0].checked==false)&& (document.form1.help[1].checked==false))
	{
	 alert('Select Your Option!');
	 document.getElementById("help").focus();
	 return false;
	}
    
  }
 }
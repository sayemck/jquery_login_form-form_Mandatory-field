<html>
<head>
<title>Serializing from values</title>
<script type="text/javascript" src="jquery-1.3.2.min.js"></script>
<script type="text/javascript"  language="javascript"></script>

<style type="text/css">
ul{border:1px solid black; list-style:none;
margin:0pt; padding:0pt; float:left; font-family:Verdana, Arial, Helvetica, sans-serif;
font-size:12px; width:400px;
}

li{ padding:10px 5px; border-bottom:1px solid black;}

label{width:100px; text-align:right;
margin-right:10px; float:left; }
</style>

<script language="javascript">
$(document).ready(function(){

$('input:button').click(function()
   {
   
   alert($('form:first').serialize());
   });
   }); 
 
  </script>
   </head>
   
   
 <body>
 <form>
 <ul>
 <li><label>Email:</label>
 <input type="text" name="email"></li>
 
 <li><label>Full Name:</label>
 <input type="text" name="fullname"></li>
 
 <li>
 <label>Sex:</label>
 <input type="radio" name="sex" value="M"/> Male
 <input type="radio" name="sex" value="F"/> Female
 </li>
 
 <li>
 <label>Country:</label>
 <select name="country">
 <option value="IN">India </option>
 <option value="UK">UK </option>
 <option value="US">USA </option>
 </select>
 </li>
 
 <li>
 <label>Newsletter:</label>
 <input type="checkbox" name="letter" /> Send me more Information 
 </li>
 
 <li>
 <input type="button" value="GO" />
 </li>
 </ul>
 
 </form>
 </body>  
   
 </html>  
   
   
<!DOCTYPE html><html><head><meta charset="utf-8"><title>আপনি কি ভাবছেন?</title><meta content="php, contact, form, thinking" name="keywords"><meta content="Contact us and let us know if we can help you out further." name="description"><style>
input, textarea {
    padding: 5px;
    margin: 10px;
    font-family: SolaimanLipi, Vrinda, SutonnyMJ, Georgia, Tahoma;
    font-size: small;
    outline: none;
}
p {
    font-family: SolaimanLipi, Vrinda, SutonnyMJ, Georgia, Tahoma;
    font-size: small;
    margin-bottom: -5px;
}
input[type=text], textarea {
    width: 350px;
    background-color: #DDEDFF;
    border: 1px solid #97C9FF;
}
input[type=submit] {
    width: 100px;
    background-color: #669900;
    border: 1px solid #336600;
    font-size: small;
    color: #FFFFFF;
}

input[type=submit]:hover {
    background-color: #78B300;
    cursor: pointer;
}
input[type=submit]:active {
    background-color: #4A6F00;
}
body {
    padding: 10px;
    background-color: #FFFFFF;
}
</style>
<script type="text/JavaScript">
<!--
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->
</script>
</head><body><div style="text-align: justify">দুঃখিত! আপনি ভুল ক্যাপচা কোড দিয়েছেন। অনুগ্রহ করে আবার চেষ্টা করুন!</div><br /><form action="mailer.php" method="POST"><div><p>নাম</p><input name="name" type="text"><br></div><div><p>ই-মেইল (ঐচ্ছিক)</p><input name="email" type="text"><br></div><div><p>মন্তব্য</p>
<textarea cols="30" name="comment" rows="9"></textarea><br></div><div><p>প্রমাণ করুন আপনি স্প্যামবুট নন!</p><br/><?php
require_once('recaptchalib.php');

$publickey = "<6Lesd-wSAAAAACpqhWT2jF4Eyp7x6I_dUv3Jirdj>";

echo recaptcha_get_html($publickey);

?></div><div><input name="submit" type="submit" onClick="MM_validateForm('name','','R','comment','','R');return document.MM_returnValue" value="পাঠিয়ে দিন"> 
</div></form></body></html>
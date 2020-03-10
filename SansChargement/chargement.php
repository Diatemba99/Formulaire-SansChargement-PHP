<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Website Contact Form</title>

<script>
        function _(id)
        { 
          return document.getElementById(id); 
        }
    function submitForm()
    {
      
         _("status").innerHTML = 'please wait ...';
         var formdata = new FormData();
         formdata.append( "n", _("n").value );
         formdata.append( "e", _("e").value );
         formdata.append( "m", _("m").value );
         
         var ajax = new XMLHttpRequest();
         ajax.open( "POST", "lamine.php" );

          ajax.onreadystatechange = function() 
            {
              _("status").innerHTML = ajax.responseText;
            }
          ajax.send( formdata );
    }
</script>

</head>
<body>
<form id="my_form" onsubmit="submitForm(); return false;">
      <p><input id="n" placeholder="Name" required></p>
      <p><input id="e" placeholder="Email" type="email" required></p>
      <textarea id="m"  rows="10" required></textarea>
      <p><input id="mybtn" type="submit" value="ENVOYER"></p> 
      <p><span id="status"></span></p>  
    
            <style type="text/css">
              #status
              {
                float: right;
                margin-top: -25%;
                margin-right: 45%;
              }
            </style>
</form>
</body>
</html>

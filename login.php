<!DOCTYPE html>
<html lang="en">

<head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <!-- Meta, title, CSS, favicons, etc. -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <title>Agency Portal - CMCI</title>

   <!-- Bootstrap -->
   <link href="https://agency.cmci.com.tr/assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Font Awesome -->
   <link href="https://agency.cmci.com.tr/assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
   <!-- NProgress -->
   <link href="https://agency.cmci.com.tr/assets/vendors/nprogress/nprogress.css" rel="stylesheet">
   <!-- Animate.css -->
   <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

   <!-- Custom Theme Style -->
   <link href="https://agency.cmci.com.tr/assets/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login" style="background:#133E6D">
   <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
         <div class="animate form login_form">
            <section class="login_content"><br><br><br>
               <img style="width:150px;" src="https://cmci.com.tr/wp-content/uploads/2022/09/Asset-7@4x-1.png" />
               <form method='post' action="https://agency.cmci.com.tr/login" id='login_form' >
                    <input type="hidden" name="_token" value="pccXOQnlhZcQhg5SLFht8rvc41x0YFnqDZtWwpnN">                  <h1>Agency Portal</h1>
                  <p style='color:#E32636;' id='txtHint'></p>
                  <div>
                     <input type="text" class="form-control " placeholder="Email" id='email' name='email' required="required" />
                                       </div>
                  <div>
                     <input type="password" class="form-control" placeholder="Password" id='idpassword' name='password' required="required" />
                  </div>
                  <div>
                     <button class="btn btn-primary" type='submit' style="width:120px">Log in</button>
                     <!--a class="reset_pass" href="#">Lost your password?</a-->
                  </div>


                  <!--div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                  </p>
                   </div-->

                  <br />

                  <div>
                     <p>Cyprus Massachusetts Centre of Innovation</p>
                  </div>
         
         </form>
                
         </section>
      </div>

     
   </div>
   </div>


   <!-- jQuery -->
   <script src="https://agency.cmci.com.tr/assets/vendors/jquery/dist/jquery.min.js"></script>
   <!-- Bootstrap -->
   <script src="https://agency.cmci.com.tr/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
   <!-- FastClick -->
   <script src="https://agency.cmci.com.tr/assets/vendors/fastclick/lib/fastclick.js"></script>
   <!-- NProgress -->
   <script src="https://agency.cmci.com.tr/assets/vendors/nprogress/nprogress.js"></script>
   <!-- validator -->
   <script src="https://agency.cmci.com.tr/assets/vendors/validator/validator.js"></script>

   <!-- Custom Theme Scripts -->
   <script src="https://agency.cmci.com.tr/assets/build/js/custom.min.js"></script>

   <!-- validator -->
   <!--     <script>
function showUser() {
    var username=document.getElementById("idusername").value;
        var password = document.getElementById("idpassword").value;
    if (username == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
               if(this.responseText==false){
                    document.getElementById("login_form").submit();
                  }
                else{
                document.getElementById("txtHint").innerHTML = this.responseText;
               }
            }
        };
        xmlhttp.open("GET","password_validator.php?username="+username+"&password="+password,true);
        xmlhttp.send();
        if(document.getElementById("txtHint").innerHTML=='true'){
        window.location.href = "index.php";
        }
    }
}
</script> -->

   <!-- /validator -->
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<?php
$s=-1;
if(isset($_GET['username'])) {

if($_GET['username']==="ali" && $_GET['password']==="123")
{
 $s=1;
}
else{
    $s=0;
}
}
?>



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <script src="sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}


body {
  background-image: url('i.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 118px;
    width: 153px;
    position: absolute;
    border-radius: 50%;
}
/* logo */
.shape{
    right: 117px;
    bottom: 450px;
    position: relative;
  
}



form{
  
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}

::placeholder{
    color: #e5e5e5;
    font-size: medium;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    
}
button:hover{
    box-shadow: 0 0 5px rgba(54, 254, 131, 0.922),0 0 25px rgba(54, 254, 131, 0.922)
    ,0 0 50px rgba(54, 254, 131, 0.922),0 0 100px rgba(54, 254, 131, 0.922),0 0 200px rgba(54, 254, 131, 0.922);
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{

  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 6px;
}
</style>

</head>
<body>
 



<!-- print alert -->
<?php
if($s==1)
{
header("Location: site.php");
exit();

}
elseif($s==0)
{
    ?>
    
    <script>
Swal.fire({
    icon: 'error',
    title: '!نام کاربری یا رمزعبور نادرست است',
 
    showConfirmButton:false
})
</script>
<?php

}
?>
<!-- --- -->



    <div class="background">
        
   <form action="login.php" method="get">
        
           
            <div class="shape"><img src="logo.avif" style="height: 140px; width: 140px; border-radius: 100px;">
         
            
            </div>
       
    
            <label for="username">Username</label>
            <input type="text" placeholder="enter username" name="username" id="username">
    
            <label for="password">Password</label>
            <input type="password" placeholder="enter Password" name="password" id="password">
    
            <button>Log In</button>
            <div class="social">
              <div class="go"><i class="fab fa-telegram"></i>  telegram</div>
              <div class="fb"><i class="fab fa-instagram"></i>  instagram</div>
            </div>
        </form>
    </div>


</body>
</html>
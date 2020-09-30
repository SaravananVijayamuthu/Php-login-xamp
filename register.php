<?php

   require("dbconfig/config.php");

?>



<!DOCTYPE html>
  <html lang="eng">
    <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
         <style>
         table{
            text-align:center; 
            margin-left:auto; 
            margin-right:auto; 
            width:100px;
            margin-top:90px;
            border-radius:50px ;
            width: 450px;
            height: 350px;
            background-color:whitesmoke;
            background:rgb(0, 0, 0);
            background:rgba(0, 0, 0, 0.6);
            background:transparent\9;
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);
            -ms-filter:"progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";
            
           

            
         }
         #name{
            border-color:white;
            background-color: lightgray;
            width:50%;
            margin-bottom: 11px;
            height: 35px;
            border-radius: 5px;
            margin-top: 25px;
             }
         
        #pass1{
            
            border-color:white;
            border-radius: 5px;
            background-color:lightgray;
            height: 35px;
            width: 50%;
            margin-bottom:19px;
           
         }
         #pass2{
         
            border-color:white;
            border-radius: 5px;
            background-color:lightgray;
            height: 35px;
            width: 50%;
          
         }
         body {
            background-image:url("wick2.jpg");
                }
         #button{
            border-radius: 5px;
            background-color:#0060CA;
            width:30%;
            height:30px;
            margin-bottom:15px ;
            margin-top: 8%;
            color: whitesmoke;
         }
         #back{
            border-radius: 5px;
            background-color:#0060CA;
            width:30%;
            height:30px;
            margin-bottom:1px ;
            color:whitesmoke;
            
         }
         #icon{
             background-color: dodgerblue;
             color: white;
             padding: 15px 20px;
             border: none;
             cursor: pointer;
            
             width: 100%;
             opacity: 0.9
         }
        .input-field:focus {
                    border: 2px solid rgb(114, 135, 155);
                   }
          
      </style>




       
    </head>
    <body>
         <form action="register.php" method="post">
          <table>
              <tr>
                   
               <td><input class="input-field" id="name" type="text" name="name" placeholder="NAME" required ></td>
             </tr>  
            
            </tr> 
            <tr>
            <td><input name="passwordcheck" class="input-field"  id="pass1" type="password" name="Login"  placeholder="PASSWORD!" required></td>
             </tr> 
             <tr>
            <td><input name="cpass"  class="input-field"  id="pass2" type="password" name="Login"  placeholder="CONFIRMPASSWORD!" required></td>
             </tr> 
            <tr>
              <td><input name="subbut" type="submit" id="button" value="SIGN Up"></td> 
            </tr>
            <tr>
              <td><a href="login.php"><input type="button" id="back" value="BACK"></td> 
            </tr>
            </table>
         </form> 
           
           <?php
           if(isset($_POST['subbut']))
           {
              // echo'<script type="text/javascript"> alert("You have clicked the button signup")</script>';
               $username=$_POST['name'];
               $pass1=$_POST['passwordcheck'];
               $cpass1=$_POST['cpass'];

               if($pass1==$cpass1){
                     $query="select * from namepass WHERE username='$username'";
                     $query_run=mysqli_query($con,$query);

               
               if(mysqli_num_rows($query_run)>0){
                  echo'<script type="text/javascript"> alert("The user already exists")</script>';
               }else
               {
                  $query="insert into namepass values('$username','$pass1')";
                  $query_run=mysqli_query($con,$query);
               
               if($query_run)
               {
                  echo'<script type="text/javascript"> alert("The user Registerd....Proceed to login page")</script>';
               }
               else
               {
                  echo'<script type="text/javascript"> alert("ERROR !!! submitting")</script>';
               }

             
           }
         
         }else{
            echo'<script type="text/javascript"> alert("ERROR !!! ")</script>';
         }
      } 

            ?> 
            
            
            
        

</body>
      
</html>
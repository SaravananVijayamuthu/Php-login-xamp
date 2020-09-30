<?php

   

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
     <script>
     /*
     function register(){
        window.open("http://localhost/yogeshdemo/register.php");
     }
     */
     </script>
     


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
            background-color: rgb(245, 245, 245);
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
            margin-top: 25px;
            height: 35px;
            border-radius: 5px;
            
           
            
         }
         #pass{
            margin-bottom: 75px;
            margin-top: 40px;
            border-color:white;
            border-radius: 5px;
            background-color:lightgray;
            height: 35px;
            width: 50%;
           
         }
         body {
            background-image: url('wick2.jpg');
                }
         #button{
            border-radius: 5px;
            width:30%;
            height:30px;
            margin-bottom:55px ;
            background-color: #0060CA;
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
          
               .fa-facebook {
               background: #3B5998;
               color: white;
               width:14px;
               height:15px;
               margin-left: 48%;
                            }     
         
          #anchor{
            color:antiquewhite;
          }                         
         
        
        
     </style>




       
    </head>
    <body>
      <form action="login.php" method="post">
          <table>
              <tr>
                   
               <td><input class="input-field" id="name" type="text" name="Login" placeholder="Email@" ></td>
             </tr>  
            <tr>
            
               <td><input  class="input-field"  id="pass" type="password" name="Login"  placeholder="Password!""></td>
            </tr> 
            <tr>
              <td><input type="submit" value="Login" id="button"></td> 
            </tr>
            <tr>
               
            <td><a id="anchor" href="register.php">SIGN UP</a></td> 
            </tr>
            </table>
           
      </form>   
            
            
        

</body>
      
</html>
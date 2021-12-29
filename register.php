<html>
    <head>
        <title> Online Voting System</title>
        
        <style>
        body{
            text-align: center;
            background-color: cornflowerblue;
        }
        #headersection{
            padding: 10px;
        }
        h1{
            font-family: cursive;
            
        }
        input{
            padding: 10px;
            border-radius: 5px;
            
        }
        #loginbtn {
            padding: 10px;
            border-radius: 5px;
            background-color: darkmagenta;
            color: ghostwhite;
            border-radius: 5px;
            cursor: pointer;
        
        }
        </style>
   </head>
    
  <body>
      <div id="headersection"></div>
          
        <h1> Online Voting System </h1>
        <hr> 
     <div id="bodysection"></div>
        <form action="includes/signup.php" method="POST">
            <h2>Register</h2>
            <input type="text" name="voter_name" placeholder="Enter Username"><br><br>
            <button id="loginbtn">Register</button><br><br>
        </form>
  </body>
</html>
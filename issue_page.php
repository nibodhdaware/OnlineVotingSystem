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
        #dropbox{
            padding: 10px;
            border-radius: 5px;
            width: 13%;
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
        <form action="includes/add_issue.php" method="POST">
            <h2>Add Issue</h2>
            <textarea name="issue_desc" placeholder="Enter your issue..."></textarea><br><br>
            <input name="voter_name" placeholder="Enter your name" type="text">
            <button id="loginbtn">Add Issue</button><br><br>
        </form>
  </body>
</html> 
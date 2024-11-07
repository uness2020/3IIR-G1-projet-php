<?php
    include("confg.php");
  
?>
<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
   
    
</head>

<body>
    
    <h1>Signup</h1>
    
    <form action="signup.php" method="post" >
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
        </div>
        
        <div>
            <label for="email">email</label>
            <input id="email" name="email">
        </div>
        
        <div>
            <label for="password">Password</label>
            <input type="password" id="password" name="password">
        </div>
        
        <div>
            <label for="password_confirmation">Repeat password</label>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>
        
        <input type="submit" class="btn btn-primary" value="Register" name="submit">
    </form>
    
</body>
</html>
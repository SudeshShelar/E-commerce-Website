<!DOCTYPE html>
<html lang="">
    <head>

        <link rel="stylesheet" href="login.css">
        <title>Login And Registration</title>
    </head>
    <body>
    
       <div class="hero">
        <div class="from-box">
           <div class="button-box">
            <div id="btn"></div>
            
            <button type="button" class="toggle-btn" onclick="login()">Log In</button>
            <button type="button" class="toggle-btn" onclick="register()">Register</button>
           </div>
        <div class="social-icons">
            <img src="img/fb.png">
            <img src="img/tw.png">
            <img src="img/gp.png">
        </div>

            <form id="login" action="savelogin.php" method="GET" class="input-group">
                
                <input type="text" name="uname"class="input-field" placeholder="User Id" required>
                <input type="text"name="pass" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"> <span>Remeber Password</span>
            
                
                <button type="submit" name="save" class="submit-btn">Log in</button>

            </form>
            <form id="register"action="logins.php" method="GET"class="input-group">
                <input type="text" name="uname"class="input-field" placeholder="User Id" required>
                <input type="email" name="email"class="input-field" placeholder="Email Id" required>
                <input type="text" name="pass"class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"> <span>I Agree to the terms & conditions</span>
            
                
                <button type="submit" class="submit-btn">Register</button>

            </form>
        </div>
    </div>
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }

    </script>
    

       

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>

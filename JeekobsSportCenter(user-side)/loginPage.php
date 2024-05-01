<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcom</title>
    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
   <link rel="stylesheet" href="css/loginPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
    <div class="container" id="signUp" style="display: none;">
        <h1 class="form-title" >Register</h1>
            
            <form method="post" action="register.php">
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="fname" id="fname" placeholder="Firstname">
                    <label for="fname"> Firstname</label>
                    
                </div>
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" name="lname" id="lname" placeholder="Lastname">
                    <label for="lname"> Lastname</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="mail" id="mail" placeholder="Email">
                    <label for="mail"> Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="password">
                    <label for="password"> password</label>
                </div>
                <input type="submit" class="btn" value="Sign Up" name="signUp">
            </form>
            <p class="or">----or-----</p>
            <div class="icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-google-plus"></i>
            </div>
            <div class="links">
                <p>Already Have  Account?</p>
                <button id="signInBtn">
                  Sign In
                </button>
              </div>
        </div>
    </div>

    <div class="container" id="signIn" >
        <h1 class="form-title" >Sign In</h1>
          
            <form method="post" action="register.php">
               
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="text" name="mail" id="mail" placeholder="Email" required>
                    <label for="mail"> Email</label>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="password" required>
                    <label for="password"> password</label>
                    <p class="recover">
                        <a href="#"> Recover password</a>
                    </p>
                </div>
                <input type="submit" class="btn" value="Sign In" name="signIn">
                
            </form>
            <p class="or">----or-----</p>
            <div class="icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-google-plus"></i>
            </div>
            <div class="links">
                <p>Dont Have Account yet?</p>
                <button id="signUpBtn">
                  Sign Up
                </button>
              </div>
        </div>
    </div>
    <script src="js/loginPage.js"></script>
    
</body>

</html>
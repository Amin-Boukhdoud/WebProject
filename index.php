<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sami's tavern</title>
    <link rel="stylesheet" href="./assets/css/style1.css">
</head>
<body>
    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <style>


        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image:url('./assets/images/bg2.gif') ;
            
            background-size: cover;
            background-position: center;
        }
        </style>
        
  
        
    <div class="wrapper" >
       
    <div class="form-box register">
            <h2>Registration</h2>
            <form action="#" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="input-box">

                <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text"  name="username">
                        <label>Username</label>
                            </div>
                <div class="input-box">

                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email"  name="password">
                <label>Email</label>
            </div>
            <div class="input-box">

                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                    <input type="password"  name="email">
                    <label>Password</label>
                    </div>


                    <label class="sex">Sex</label>
                    <div class="sex">
                        
                    <label for="male">Male</label>
                <input type="radio" id="male" name="gender" value="male">

                <label for="female">Female</label>
                 <input type="radio" id="female" name="gender" value="female">

                <label for="other">Other</label>
                <input type="radio" id="other" name="gender" value="other">


                    </div>
                    <div class="date">
                        <label>Date of birth</label>
                        <input type="date" class="date" name="date"> <br>
                    </div>

                    <button type="submit" class="btn" name="submit">Register</button>

                    <div class="login-register">
                        <p>Already have an account?<a href="login.html" class="login-link">Login</a></p>
                    </div>


            </form>
        </div>


    </div>

    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

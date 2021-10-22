<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="styles.css">
    <script defer src="script.js"></script>
</head>

<body>
  <?php
  include "connect.php";
  session_start();
  $_SESSION['counter']=0;
  ?>
    <header>
      <nav>
        <img  src="./bug.png" alt="">
        <h1 class="signheader">Bug Tracker Application</h1>
      </nav>
    </header>

    <section>
        <div class="container">
          <div class="user signinBx">
            <div class="imgBx"><img src="https://images.unsplash.com/photo-1576859958081-27de5c70262a?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=687&q=80" /></div>
            <div class="formBx">
              <form action="Home.php" method="POST">
                <h2>Sign In </h2>
                <input class="details" type="text" name="username" placeholder="Username" />
                <input class="details" type="password" name="password" placeholder="Password" />
                <input class="details" type="submit" name="" value="Login" />
                <p class="signup">
                  Don't have an account ?<a href="#" onclick="toggleForm();">
                    Sign Up
                  </a>
                </p>
              </form>
            </div>
          </div>
          <div class="user signupBx">
            <div class="formBx">
              <form action="new_user.php" method="POST">
                <h2>Create an Account</h2>
                <div class="radio">
                  <input type="radio" class="radio-btn" id="type" name="Type" value="ADM">
                  <label for="type">Admin</label><br>
                  <input type="radio" class="radio-btn" id="type" name="Type" value="QA">
                  <label for="type">QA</label><br>
                  <input type="radio" class="radio-btn" id="type" name="Type" value="DEV">
                  <label for="type">Developer</label> 
                </div>

                <input type="text" class="details" name="Name" placeholder="Name" />
                <input type="text" class="details" name="Username" placeholder="Username" />
                <input type="email" class="details" name="Email" placeholder="Email Id" />
                <input type="password" class="details" name="Password" placeholder="Create Password" />
                <input type="submit" class="details" name="" value="Sign Up" />
                <p class="signup">
                  Already have an account ?
                  <a href="#" onclick="toggleForm();"> Sign In </a>
                </p>
              </form>
            </div>
            <div class="imgBx"><img src="https://images.unsplash.com/photo-1628972799193-1a6be77e183e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80" /></div>
          </div>
        </div>
      </section>
</body>
</html>




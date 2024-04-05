<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nature Archive</title>
    <link rel="stylesheet" href="style/stylelogin.css" />
  </head>
  <body>
    <div class="box">
      <div class="container">
        <div class="header">
          <img src="asset/Nature Archive.png" alt="Nature Archive" />
        </div>
        <h1>Nature Archive</h1>
        <form action="login.php" method="POST">
        <div class="input-field">
          <input type="text" class="input" placeholder="Username" required />
          <i class="bx bx-user"></i>
        </div>
        <div class="input-field">
          <input type="password" class="input" placeholder="Password" />
        </div>
        <div class="input-field">
          <input type="password" class="input" placeholder="Confirm Password" />
        </div>
        <div class="input-field">
          <input type="submit" class="submit" value="Register" />
        </div>
        <div class="bottom">
          <div class="left">
            <input type="checkbox" id="check" />
            <label for="check"> Save login info?</label>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

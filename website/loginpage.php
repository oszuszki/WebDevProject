<!DOCTYPE html>
<html lang = "hu">
<head>
    <link href="loginpage.css" rel="stylesheet" type="text/css"/>
    <title>Bejelentkezés</title>
</head>
<body>

    <form class="login" method="post" action="server.php">
       <div class="form-element">
           <label>Felhasználó név</label>
            <input type="email" name="email" required />
        </div>

        <div class="form-element">
          <label>Jelszó</label>
          <input type="password" name="password" required />
       </div>
      <button type="submit" name="submit" value="bejelentkezés">Bejelentkezés</button>
    </form>

</body>
</html>
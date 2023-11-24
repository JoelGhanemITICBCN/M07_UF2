
<!DOCTYPE html>
<html>
  <meta charset="UTF-8"> 
<head>
</head>
<body>

<h1>{{ $titol }}</h1>

<form action="../../iniciar_sessio/userLogin.php" method="POST">
  <label for="email">Correu electrònic:</label>
  <input type="email" id="email" name="email" required><br><br>

  <label for="password">Contrassenya:</label>
  <input type="password" id="password" name="password" required><br><br>

  <label for="remember">Recorda'm:</label>
  <input type="checkbox" id="remember" name="remember"><br><br>

  <input type="submit" value="Login">
</form>
    <a href="{{ route('signup') }}">Crea un usuari</a><br>
   

</body>
</html>

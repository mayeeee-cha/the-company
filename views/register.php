<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Boostrap CDN Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <title>Register</title>
</head>
<body class="bg-light">
  <div style="height: 100vh;">
    <div class="row h-100 m-0">
      <div class="card w-25 my-auto mx-auto">
        <div class="card-header bg-white border-0 py-3">
          <h1 class="text-center">REGISTER</h1>
        </div>
        <div class="card-body">
          <form action="../actions/register.php" method="post">
            <div class="mb-3">
              <label for="first-name" class="form-label">First Name</label>
              <input type="text" name="first_name" id="first-name" class="form-control" required autofocus>
            </div>
            <div class="mb-3">
              <label for="last-name" class="form-label">Last Name</label>
              <input type="text" name="last_name" id="last-name" class="form-control" require>
            </div>

            <!-- Bold for emphasis -->
             <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" name="username" id="username" class="form-control fw-bold" maxlenth="15" required>
            </div>
            <div class="mb-5">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" id="password" class="form-control" minlength="8" aria-describedby="password-info" required>
              <div class="form-text password-info">
                Password must be at least 8 characters long.
              </div>
            </div>
            <button type="submit" class="btn btn-success w-100">Register</button>
          </form>
          <p class="text-center mt-3 small">Registerd already? <a href="../views">Log in.</a></p>
        </div>
      </div>
    </div>
  </div>

<!-- Boostrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
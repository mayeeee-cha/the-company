<?php
session_start();

require '../classes/User.php';

$user_obj = new User;
$user = $user_obj->getUser();

// print_r($user);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>

    <!-- Boostrap CDN Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

  <!-- Fontawesome CDN -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">

   <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom:80px;">
  <div class="container">
    <a href="dashboard.php" class="navbar-brand">
      <h3>The Company</h3>
    </a>
  <div class="navbar-nav">
    <span class="navbar-text"><?= $_SESSION['full_name'] ?></span>
    <form action="../actions/logout.php" method="post" class="d-flex ms-2">
      <button type="submit" class="text-danger bg-transparent border-0">Log out</button>
    </form>
  </div>
  </div>
  </nav>

  <main class="row justify-content-center gx-0">
    <div class="col-4">
      <div class="h2 text-center mb-4">EDIT USER</div>

      <form action="../actions/edit-user.php" method="post" enctype="multipart/form-data">
        <div class="row justify-content-center mb-3">
          <div class="col-6">
            <?php
            if($user['photo']){
            ?>
            <img src="../assets/images/<?= $user['photo'] ?>" alt="<?= $user['photo'] ?>" class="d-block mx-auto edit-photo">
            <?php
            } else {
              ?>
              <i class="fa-solid fa-user text-secondary d-block mx-auto edit-icon"></i>
              <?php
            }
            ?>
            <input type="file" name="photo" class="form-control mt-2" accept="image/*">
          </div>
          <div class="mb-3">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" name="first_name" id="first-name" class="form-control
          " value="<?= $user['first_name'] ?>" required autofocus>
          </div>

          <div class="mb-3">
            <label for="last-name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last-name" class="form-control" value="<?= $user['last_name'] ?>" required>
          </div>

          <div class="mb-4">
            <label for="username" class="form-label fw-bold">Username</label>
            <input type="text" name="username" id="username" class="form-control fw-bold" maxlength="15" value="<?= $user['username'] ?>" required>
          </div>

          <div class="mb-5 text-end">
            <a href="dashboard.php" class="btn btn-secondary btn-sm">Cancel</a>

            <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
          </div>
        </div>
      </form>
    </div>
  </main>

  <!-- Boostrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
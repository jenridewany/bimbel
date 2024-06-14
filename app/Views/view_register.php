<!doctype html>
<html lang="en" class="h-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.79.0">
  <title>Sticky Footer Template · Bootstrap v5.0</title>
  <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer/">
  
  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Google Fonts: Poppins -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }
    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
          font-size: 3.5rem;
      }
    }
    .btnprimary {
      background-color: #007bff;
      border-color: #007bff;
      color: #fff;
    }
    .btnprimary:hover {
      background-color: #0056b3;
      border-color: #004085;
    }
  </style>
</head>
<body class="d-flex flex-column h-100">
  <!-- Begin page content -->
  <main class="flex-shrink-0">
    <div class="container">
      <h1 class="mt-5">Register Form</h1>
      <p>Silahkan Daftarkan Identitas Anda</p>
      <hr />
      <?php if (!empty(session()->getFlashdata('error'))) : ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <h4>Periksa Entrian Form</h4>
        <?php echo session()->getFlashdata('error'); ?>
      </div>
      <?php endif; ?>
      <form method="post" action="<?= base_url(); ?>/register/process">
        <?= csrf_field(); ?>
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
          <label for="password_conf" class="form-label">Confirm Password</label>
          <input type="password" class="form-control" id="password_conf" name="password_conf">
        </div>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btnprimary">Register</button>
        </div>
      </form>
      <hr />
    </div>
  </main>
  <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
      <span class="text-muted">Place sticky footer content here.</span>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

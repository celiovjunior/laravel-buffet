<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>@yield('title')</title>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light" id="">
      <div class="collapse navbar-collapse" id="navbar">
        <a href="/" class="navbar-brand">
          <h1 id="logo">CB</h1>
        </a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="/" class="nav-link">
              Events
            </a>
          </li>
          <li class="nav-item">
            <a href="/events/create" class="nav-link">
              Create event
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              Login
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              Register
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  @yield('content')
  <footer>Made with ❤ by <a href="www.github.com/celiovjunior" target="_blank">Célio V. Júnior</a></footer>
  <script src="../js/script.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
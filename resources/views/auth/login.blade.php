<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('../css/login.css') }}">
</head>

<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0" style="background-color: #f8d568fc;">
    <div class="container">
      <div class="card login-card">
        <div class="row">
          <div class="d-none d-sm-block col-sm-6 text-center">
            <img src="{{asset('../images/login.jpg')}}" alt="login" class="img-fluid" width="100%">
          </div>
          <div class="col-sm-6">
            <div class="card-body">
              <p class="login-card-description">Sign into your account</p>
              <form method="POST">
                @csrf
                <div class="form-group">
                  <label for="email" class="sr-only">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                </div>
                <div class="form-group mb-4">
                  <label for="password" class="sr-only">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-success"> Login </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  @if (session('success_message'))
  <script>
      Swal.fire({
          title: 'Berhasil!',
          text: '{{ session('success_message') }}',
          icon: 'success',
      })

  </script>
  @endif
  @if (session('error_message'))
  <script>
    Swal.fire({
      title: 'Gagal!',
      text: '{{ session('error_message') }}',
      icon: 'error',
    })
  </script>
  @endif
</body>

</html>
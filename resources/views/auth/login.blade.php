<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Login | SmilesDashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Inter', sans-serif;
      background-color: #fdf6f0;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-card {
      background-color: #fff;
      padding: 40px;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
      width: 100%;
      max-width: 420px;
    }

    .login-title {
      font-weight: 700;
      font-size: 28px;
      margin-bottom: 10px;
    }

    .login-subtitle {
      color: #6c757d;
      margin-bottom: 30px;
    }

    .form-control {
      border-radius: 10px;
    }

    .btn-primary {
      border-radius: 10px;
    }

    .text-small {
      font-size: 14px;
    }

    .form-check-label {
      user-select: none;
    }

    .logo {
      text-align: center;
      margin-bottom: 10px;
    }

    .logo img {
      height: 60px;
    }

    .logo-text {
      font-weight: 700;
      font-size: 20px;
      color: #000; /* black color */
      margin-top: 8px;
    }

    .alt-link {
      color: #000;
      font-weight: 600;
    }
  </style>
</head>

<body>
  <div class="login-card">
    <div class="logo">
      {{-- <img src="{{ asset('admin_assets/images/smilecreations-logo.png') }}" alt="SmileCreations Logo"> --}}
      <div class="logo-text" style="font-size: 2rem">SmileCreations</div>
    </div>

    <!-- Session Status -->
    @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
    @endif

    <h2 class="login-title">Sign In</h2>
    <p class="login-subtitle">Enter your email and password to access the admin panel.</p>

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
        @error('email')
        <span class="text-danger text-small">{{ $message }}</span>
        @enderror
      </div>

      <div class="mb-3">
        <label for="password" class="form-label d-flex justify-content-between">
          <span>Password</span>
          <a href="{{ route('password.request') }}" class="text-decoration-none text-muted text-small">Forgot password?</a>
        </label>
        <input id="password" type="password" class="form-control" name="password" required>
        @error('password')
        <span class="text-danger text-small">{{ $message }}</span>
        @enderror
      </div>

      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="remember">
        <label class="form-check-label text-small" for="remember">Remember me</label>
      </div>

      <div class="d-grid mb-3">
        <button type="submit" class="btn btn-primary">Sign In</button>
      </div>

      <p class="text-center text-small">
        Don’t have an account?
        <a href="{{ route('register') }}" class="alt-link">Sign Up</a>
      </p>
    </form>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

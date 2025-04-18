<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | StartupFund</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
      body {
        background: linear-gradient(120deg, #edf2f4 60%, #fff 100%);
        font-family: 'Segoe UI', Arial, sans-serif;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }
      header {
        background: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        padding: 1em 0;
        text-align: center;
      }
      .logo {
        font-size: 2em;
        font-weight: bold;
        color: #2b2d42;
        letter-spacing: 1px;
      }
      .login-container {
        max-width: 500px;
        margin: 4.5em auto 2em auto;
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 24px rgba(0,0,0,0.10);
        padding: 3em 5em 3em 5em;
        border: 1px solid #f1f1f1;
        display: flex;
        flex-direction: column;
        align-items: stretch;
        position: relative;
        animation: float 6s ease-in-out infinite;
      }

      @keyframes float {
        0% {
          transform: translateY(0px);
        }
        50% {
          transform: translateY(-20px);
        }
        100% {
          transform: translateY(0px);
        }
      }
      .login-container h2 {
        text-align: left;
        color: #2b2d42;
        margin-bottom: 1.5em;
        font-size: 1.3em;
        font-weight: 700;
        letter-spacing: 0.01em;
      }
      .login-form {
        position: relative;
      }
      
      .input-group {
        position: relative;
        margin-bottom: 2em;
      }
      
      .login-form label {
        position: absolute;
        top: 0.8em;
        left: 1em;
        color: #8d99ae;
        font-weight: 400;
        transition: all 0.2s ease;
        pointer-events: none;
        background: #fff;
        padding: 0 0.3em;
      }
      
      .login-form input[type="email"],
      .login-form input[type="password"] {
        width: 100%;
        padding: 1.2em 1em 0.8em 1em;
        border: 1px solid #e2e8f0;
        border-radius: 6px;
        font-size: 1em;
        background: #fff;
        transition: all 0.3s ease;
      }
      
      .login-form input:focus {
        border-color: #3B82F6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
      }
      
      .login-form input:focus + label,
      .login-form input:not(:placeholder-shown) + label {
        top: -0.5em;
        left: 0.8em;
        font-size: 0.8em;
        color: #3B82F6;
        background: #fff;
      }
      
      .login-form input::placeholder {
        color: transparent;
      }
      .login-form .btn {
            width: 100%;
            padding: 0.9em;
            font-size: 1.1em;
            margin-top: 0.5em;
            background: #3B82F6;
            color: #fff !important;
            border: none;
            border-radius: 4px;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
          }
          
          .login-form .btn:hover {
            background: #2563eb;
          }
          
          .login-form .forgot-link {
            display: block;
            text-align: right;
            margin-top: -1em;
            margin-bottom: 1em;
            font-size: 0.95em;
            color: #8d99ae;
            text-decoration: none;
            transition: color 0.2s;
          }
          
          .login-form .forgot-link:hover {
            color: #3B82F6;
            text-decoration: underline;
          }
          
          .login-form .register-link {
            display: block;
            text-align: center;
            margin-top: 1.5em;
            color: #2b2d42;
            text-decoration: none;
            font-size: 0.98em;
            transition: color 0.2s;
          }
          
          .login-form .register-link:hover {
            text-decoration: underline;
            color: #3B82F6;
          }
          
          footer {
            background: #2b2d42;
            color: #fff;
            text-align: center;
            padding: 1.5em 0 1em 0;
            margin-top: auto;
            border-top-left-radius: 12px;
            border-top-right-radius: 12px;
            font-size: 1em;
          }
    </style>
  </head>
  <body>
    <header>
      <div class="logo">StartupFund</div>
    </header>
    <div class="login-container">
      <h2>Login to StartupFund</h2>
      <form class="login-form" action="authenticate.php" method="POST">
        <div class="input-group">
          <input type="email" id="email" name="email" placeholder="Email" required />
          <label for="email">Email Address</label>
        </div>

        <div class="input-group">
          <input type="password" id="password" name="password" placeholder="Password" required />
          <label for="password">Password</label>
        </div>

        <a href="#" class="forgot-link">Forgot password?</a>

        <button type="submit" class="btn">Login</button>
        <a href="register.php" class="register-link">Don't have an account? Register</a>
      </form>
    </div>
    <footer>
      &copy; <?php echo date('Y'); ?> StartupFund. All rights reserved.
    </footer>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Login</title>
  <style>
    /* Base Styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inter', sans-serif;
  background: linear-gradient(120deg, #eef2f7, #dbe4ee);
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Form Container */
.form-container {
  background-color: #ffffff;
  padding: 40px 30px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
  border-radius: 12px;
  width: 100%;
  max-width: 400px;
}

/* Form Elements */
.login-form h2 {
  text-align: center;
  margin-bottom: 24px;
  color: #333;
  font-weight: 600;
}

.login-form input {
  width: 100%;
  padding: 12px 15px;
  margin-bottom: 16px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 0.95rem;
  transition: border-color 0.3s;
}

.login-form input:focus {
  border-color: #007BFF;
  outline: none;
}

.btn {
  width: 100%;
  padding: 12px;
  background-color: #007BFF;
  border: none;
  border-radius: 8px;
  color: white;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: background-color 0.3s;
}

.btn:hover {
  background-color: #0056b3;
}

.link {
  margin-top: 16px;
  text-align: center;
  font-size: 0.9rem;
}

.link a {
  color: #007BFF;
  text-decoration: none;
}

.link a:hover {
  text-decoration: underline;
}

  </style>
</head>
<body>

  <div class="form-container">
    <form action="server/loginh.php" method="post" class="login-form">
      <h2>Login</h2>

      <input type="email" name="email" placeholder="Email Address" required />
      <input type="password" name="password" placeholder="Password" required />

      <button class="btn" type="submit">Login</button>

      <p class="link">Don't have an account? <a href="signup.php">Sign Up</a></p>
    </form>
  </div>

</body>
</html>

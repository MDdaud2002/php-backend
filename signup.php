<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign Up</title>
<style>
   
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inter', sans-serif;
  background: linear-gradient(120deg, #f6f9fc, #e9eff5);
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
.signup-form h2 {
  text-align: center;
  margin-bottom: 24px;
  color: #333;
  font-weight: 600;
}

.signup-form input {
  width: 100%;
  padding: 12px 15px;
  margin-bottom: 16px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 0.95rem;
  transition: border-color 0.3s;
}

.signup-form input:focus {
  border-color: #007BFF;
  outline: none;
}

/* Button */
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

</style>
</head>
<body>

  <div class="form-container">
    <form action="server/signuph.php" method="post" class="signup-form">
      <h2>Create an Account</h2>

      <input type="text" name="name" placeholder="Full Name" required />
      <input type="email" name="email" placeholder="Email Address" required />
      <input type="password" name="psw" placeholder="Password" required />
      <input type="password" name="cpsw" placeholder="Confirm Password" required />
      <input type="text" name="ads" placeholder="Address" required />

      <button class="btn" type="submit">Sign Up</button>
    </form>
  </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Add Product</title>
  <style>/* Reset and base styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Inter', sans-serif;
  background-color: #f5f8fa;
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  padding: 20px;
}

.form-container {
  background: #ffffff;
  padding: 40px 30px;
  border-radius: 10px;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 500px;
}

h2 {
  text-align: center;
  margin-bottom: 30px;
  color: #333;
}

form label {
  display: block;
  margin-bottom: 8px;
  font-weight: 600;
  color: #333;
}

form input,
form textarea {
  width: 100%;
  padding: 12px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 1rem;
  background-color: #fdfdfd;
  transition: border-color 0.3s;
}

form input:focus,
form textarea:focus {
  border-color: #007BFF;
  outline: none;
}

.submit-btn {
  width: 100%;
  padding: 12px;
  background-color: #007BFF;
  color: #fff;
  font-size: 1rem;
  font-weight: 600;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.submit-btn:hover {
  background-color: #0056b3;
}
</style>
</head>
<body>

  <div class="form-container">
    <h2>Add New Product</h2>
    <form action="server/producth.php" method="POST">
      <label for="pname">Product Name</label>
      <input type="text" id="pname" name="pname" placeholder="Enter product name" required />

      <label for="pprice">Product Price</label>
      <input type="number" id="pprice" name="pprice" placeholder="Enter price in USD" required />

      <label for="pdesc">Product Description</label>
      <textarea id="pdesc" name="pdescription" placeholder="Enter product description" rows="5" required></textarea>

      <button type="submit" class="submit-btn">Submit Product</button>
    </form>
  </div>

</body>
</html>

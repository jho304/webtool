<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Author Profile</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f5f5f5;
    }

    .card {
      display: flex;
      flex-direction: column;
      width: 400px;
      margin: 0 auto;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    form {
      display: flex;
      flex-direction: column;
      width: 100%;
    }

    label {
      margin-bottom: 5px;
      display: block;
      color: #333;
    }

    input[type="text"],
    input[type="email"] {
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 100%;
      margin-bottom: 15px;
      box-sizing: border-box;
      font-size: 16px;
    }

    input[type="submit"] {
      background-color: #007bff; /* Updated button color */
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-top: 10px;
      cursor: pointer;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #0056b3; /* Updated button hover color */
    }

    input[type="text"]:focus,
    input[type="email"]:focus {
      outline: 2px solid #007bff;
    }

    .form-group {
      margin-bottom: 15px;
    }
  </style>
</head>
<body>
  <h2>Author Profile</h2>

  <div class="card">
    <form action="<?php echo base_url('author/saveProfile2'); ?>" method="POST">
      <div class="form-group">
        <label for="author_name">Author Name:</label>
        <input type="text" id="author_name" name="author_name" value="<?php echo isset($author->author_name) ? $author->author_name : ''; ?>">
      </div>

      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo isset($author->email) ? $author->email : ''; ?>" required>
      </div>

      <div class="form-group">
        <label for="contact_num">Contact Number:</label>
        <input type="text" id="contact_num" name="contact_num" value="<?php echo isset($author->contact_num) ? $author->contact_num : ''; ?>">
      </div>

      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="<?php echo isset($author->title) ? $author->title : ''; ?>">
      </div>

      <input type="submit" value="Update Profile">
    </form>
  </div>
</body>
</html>

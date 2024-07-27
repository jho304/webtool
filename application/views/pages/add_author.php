<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Author</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container {
            width: 50%;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            color: #333;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #17a2b8;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #138496;
        }
        .error {
            color: #dc3545;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add New Author</h2>
        <?php echo form_open('author/add'); ?>
            <div class="form-group">
                <label for="author_name">Author Name:</label>
                <input type="text" id="author_name" name="author_name" value="<?php echo set_value('author_name'); ?>">
                <?php echo form_error('author_name', '<div class="error">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="<?php echo set_value('email'); ?>">
                <?php echo form_error('email', '<div class="error">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label for="contact_num">Contact Number:</label>
                <input type="text" id="contact_num" name="contact_num" value="<?php echo set_value('contact_num'); ?>">
                <?php echo form_error('contact_num', '<div class="error">', '</div>'); ?>
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="<?php echo set_value('title'); ?>">
                <?php echo form_error('title', '<div class="error">', '</div>'); ?>
            </div>
            <input type="submit" value="Add Author">
        <?php echo form_close(); ?>
    </div>
</body>
</html>

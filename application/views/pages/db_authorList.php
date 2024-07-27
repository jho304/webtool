<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Authors List</title>
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
        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .container {
            width: 80%;
            margin-top: 20px;
        }
        .add-button-container {
            width: 80%;
            display: flex;
            justify-content: flex-end;
            margin-bottom: 10px;
        }
        .add-button {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #17a2b8; /* Button color */
            font-size: 16px;
            transition: background-color 0.3s;
        }
        .add-button:hover {
            background-color: #138496; /* Button hover color */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #343a40;
            color: #fff;
            border: none;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .action-links a {
            text-decoration: none;
            margin-right: 5px;
            padding: 6px 12px;
            border-radius: 3px;
            color: #fff;
        }
        .action-links a.edit {
            background-color: #007bff;
        }
        .action-links a.edit:hover {
            background-color: #0056b3;
        }
        .action-links a.delete {
            background-color: #dc3545;
        }
        .action-links a.delete:hover {
            background-color: #c82333;
        }
        .icon {
            width: 24px;
            height: 24px;
        }
    </style>
</head>
<body>
    <h2>Authors List</h2>
    <div class="add-button-container">
        <a href="<?php echo site_url('pages/add_author'); ?>" class="add-button">Add New</a>
    </div>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Author Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($authors as $author): ?>
                <tr>
                    <td><?php echo $author->author_name; ?></td>
                    <td><?php echo $author->email; ?></td>
                    <td><?php echo $author->contact_num; ?></td>
                    <td><?php echo $author->title; ?></td>
                    <td class="action-links">
                        <a href="<?php echo site_url('pages/edit_author/' . $author->audid); ?>" class="edit"><img src="<?php echo base_url('assets/img/icons8-update-50.png'); ?>" alt="Edit" class="icon"></a>
                        <a href="<?php echo site_url('author/delete/' . $author->audid); ?>" onclick="return confirm('Are you sure you want to delete this author?')" class="delete"><img src="<?php echo base_url('assets/img/icons8-delete-64.png'); ?>" alt="Delete" class="icon"></a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Custom CSS styles */
        body {
            font-family: 'Roboto', sans-serif; /* Change font family */
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            padding-top: 20px;
            margin: auto;
            max-width: 1400px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        .actions {
            text-align: center;
        }

        .actions a,
        .actions button {
            margin-right: 10px;
            padding: 6px 12px;
            border: 1px solid #007bff;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 12px;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .actions a:hover,
        .actions button:hover {
            background-color: #0056b3;
        }

        .file-link {
            color: #007bff;
        }

        .file-link:hover {
            text-decoration: underline;
        }

        .abstract {
            max-width: 250px; /* Adjust as needed */
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            color: #666;
        }

        h1.title {
            text-align: center; /* Center-align the title */
            color: #4CAF50;
            margin-bottom: 20px;
            text-transform: uppercase; /* Transform text to uppercase */
            font-size: 25px; /* Increase font size */
            border-bottom: 2px solid #4CAF50; /* Add a bottom border */
            padding-bottom: 10px; /* Add some space below the title */
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="title">Articles</h1>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Actions</th>
                <th>Author Name</th>
                <th>Volume</th>
                <th>Title</th>
                <th>File</th>
                <th>Keywords</th>
                <th>Date Created</th>
            </tr>
        </thead>
        <tbody>
    <tr>
        <td class="actions">
            <a href="<?php echo base_url('pages/db_authSubmission2') ?>" class="btn btn-darkgreen text-blue"><strong>ADD ARTICLE</strong></a>
        </td>
    </tr>
    <?php foreach ($submittedArticles as $article): ?>
        <tr>
            <td class="actions">
                <a href="<?= base_url('pages/db_AdminUpdate/' . $article->slug); ?>" class="btn-assign-evaluator">Edit</a><br><br>
                <a href="<?= base_url('pages/editArticle/' . $article->articleid); ?>" class="btn-update" style="background-color: #28a745; border-color: #28a745;">Update</a><br><br>
                <a href="#" onclick="confirmDelete('<?= $article->articleid; ?>')" class="btn btn-danger btn-delete" style="background-color: #dc3545; border-color: #dc3545;">Delete</a>
            </td>
            <td><?= $article->author_name ?></td> <!-- Display author name from articles table -->
            <td><?= $article->volume_name ?></td>
            <td><?= strlen($article->title) > 20 ? substr($article->title, 0, 20) . '...' : $article->title ?></td>
            <td>
                <?php if ($article->filename): ?>
                    <a href="<?= base_url('files/' . $article->filename); ?>" class="file-link">View</a>
                <?php else: ?>
                    No file uploaded
                <?php endif; ?>
            </td>
            <td><?= strlen($article->keywords) > 20 ? substr($article->keywords, 0, 20) . '...' : $article->keywords ?></td>
            <td><?= $article->created_at ? date('Y-m-d', strtotime($article->created_at)) : 'N/A' ?></td>
        </tr>
    <?php endforeach; ?>
</tbody>


    </table>
</div>

<script>
    function confirmDelete(articleId) {
        if (confirm("Are you sure you want to delete this article?")) {
            window.location.href = "<?php echo base_url('pages/deleteArticle/') ?>" + articleId;
        }
    }
</script>

</body>
</html>

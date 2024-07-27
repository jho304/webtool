<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap; /* Allow cards to wrap */
        height: 100vh;
    }
    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 20px;
        margin: 20px;
        width: 250px; /* Adjusted card width */
        text-align: center; /* Center align content */
        transition: transform 0.3s ease; /* Add hover effect */
    }
    .card:hover {
        transform: translateY(-5px); /* Move card up on hover */
    }
    h2 {
        margin-top: 0;
        color: #333; /* Darker title color */
        font-size: 1.5rem; /* Increased title font size */
    }
    .count {
        font-size: 2rem; /* Increased count font size */
        font-weight: bold;
        margin-top: 10px; /* Add some margin to separate from title */
        color: #007bff; /* Blue count color */
    }
</style>

<div class="container">
    <?php
    // Count the number of articles in each status category
    $waitingCount = 9; // Example count of articles waiting review
    $inReviewCount = 17; // Example count of articles in review
    $publishedCount = 15; // Example count of published articles
    $rejectedCount = 6; // Example count of rejected articles
    ?>
    
    <div class="card waiting">
        <h2>Waiting Review</h2>
        <p class="count"><?php echo $waitingCount; ?></p>
    </div>
    
    <div class="card in-review">
        <h2>In Review</h2>
        <p class="count"><?php echo $inReviewCount; ?></p>
    </div>
    
    <div class="card published">
        <h2>Published</h2>
        <p class="count"><?php echo $publishedCount; ?></p>
    </div>
    
    <div class="card rejected">
        <h2>Rejected</h2>
        <p class="count"><?php echo $rejectedCount; ?></p>
    </div>
</div>

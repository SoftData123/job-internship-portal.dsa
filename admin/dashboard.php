<?php
session_start();
include('config/db.php');

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Query to count unique job titles
$sql = "SELECT COUNT(DISTINCT job_title) AS total_titles FROM job_listings";
$result = $conn->query($sql);

$totalTitles = 0;
if ($result && $row = $result->fetch_assoc()) {
    $totalTitles = $row['total_titles'];
}
include ('common/header.php');
?>

<div class="page-wrapper">
    <div class="page-content">
    <div class="container mt-5">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <hr>
        <div class="card">
            <div class="card-body">
                <h4>Total Unique Job Titles</h4>
                <p style="font-size: 2em; font-weight: bold;"><?php echo $totalTitles; ?></p>
            </div>
        </div>

        <div class="mt-4">
            <a href="logout.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</body>
</html>
<?php include ('common/footer.php');
<?php
include 'db_configur.php'; 

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $searchInput = $_GET["searchInput"];

    $sql = "SELECT * FROM books WHERE title LIKE '%$searchInput%' OR author LIKE '%$searchInput%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<div class='book'>";
            echo "<h2>" . $row["title"] . "</h2>";
            echo "<p>Author: " . $row["author"] . "</p>";
            echo "</div>";
        }
    } else {
        echo "No results found.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>

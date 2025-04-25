<?php include 'config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP To-Do List</title>
</head>
<body>
    <h2>To-Do List</h2>
    <form action="add.php" method="POST">
        <input type="text" name="task" placeholder="Enter new task" required>
        <button type="submit">Add</button>
    </form>

    <ul>
        <?php
        $result = $conn->query("SELECT * FROM todos ORDER BY created_at DESC");
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . htmlspecialchars($row['task']) . 
                 " <a href='delete.php?id=" . $row['id'] . "'>Delete</a></li>";
        }
        ?>
    </ul>
</body>
</html>


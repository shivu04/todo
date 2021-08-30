<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
    <a href="logout.php" style="color: white">LOGOUT</a>
  <div class="wrapper">
    <header><b>Todo List</b><br>
      <h6>Welcome <?php echo $_SESSION['username']; ?> </h6>
      </header>
      
    <div class="inputField">
      <input type="text" placeholder="Add your new todo">
      <button><i class="Add"></i>Add</button>
    </div>
    <ul class="todoList">
    </ul>
    <div class="footer">
      <span>You have <span class="pendingTasks"></span> pending tasks</span>
      <button>Clear All</button>
    </div>
  </div>

  <script src="script.js"></script>

</body>
</html>

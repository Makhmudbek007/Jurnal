<?php include "db.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Money</title>
</head>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  padding: 20px;
}
 form {
  margin-top: 20px;
}
 h2 {
  text-align: center;
}
 span[name="money"] {
  font-size: 24px;
  font-weight: bold;
}
 #btnSub {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: white;
  border: none;
  cursor: pointer;
  margin-top: 20px;
}
 #btnSub:hover {
  background-color: #45a049;
}
</style>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <h2>
            <span id="money" name="money"><?php
                    $bs = "SELECT * FROM `money`";
                    $result = $db -> query($bs);
                    while ($row = $result -> fetch_assoc()) {
                        echo $row['pul'];
                    }
                ?></span>
            <span id="sum"> SO'M</span>
        </h2>
    </form>
</body>
<script src="script.js"></script>
</html>
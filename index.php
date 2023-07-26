<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jurnal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        #moneyI {
            text-align: center;
            font-size: 24px;
            margin-top: 20px;
        }
        #xarajatDiv {
            text-align: center;
            margin-top: 20px;
        }
        h3 {
            text-align: center;
            margin-top: 10px;
        }
        input[type="number"] {
            padding: 5px;
            width: 150px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            margin: 20px 0;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        a {
            padding: 10px 10px;
            background-color: white;
            color: #4CAF50;
            border: none;
            cursor: pointer;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
        }
        a:hover {
            background-color: rgb(220, 220, 220);
            color: #45a049;
        }
        .okno{
            width: 96vw;
        }
    </style>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <h1>Daromad va Xarajatlar:</h1>
        <h2>
            <iframe src="me.php" frameborder="0" scrolling="no" class="okno"></iframe>
        </h2>
        <div id="xarajatDiv">
            <h3 style="color:#4CAF50;">Daromad: <span id="daromadInp"></span></h3>
            <input type="number" id="inputDaromad" name="daromad" value="" oninput="writeDaromad()"  /><br>
            <h3 style="color:red;">Xarajat: <span id="xarajatInp"></span></h3>
            <input type="number" id="inputXarajat" name="xarajat" value="" oninput="writeXarajat()"  /><br>
            <input type="submit" value="Yuborish"><br><br>
            <a href="http://localhost/Jurnal/jurnal.txt">Hisobotlar</a><br><br>
        </div>
    </form>
</body>
<script src="script.js"></script>
</html>
<?php
    if (!empty($_POST['daromad']) || !empty($_POST['xarajat'])) {
        $f = fopen("jurnal.txt", "a") or die("Fayl topilmadi 404");
        fwrite($f, "Daromad: " . $_POST['daromad'] . "\n" ."Xarajat: -" . $_POST["xarajat"] . "\n" . "-------------------------" . "\n");
        fclose($f);

        $bs = "SELECT * FROM `money`";
        $result = $db -> query($bs);
        $row = $result -> fetch_assoc();
        
        if(!empty($_POST['daromad']) && !empty($_POST['xarajat'])){
            $db -> query("UPDATE money SET pul = '$row[pul]'+'$_POST[daromad]'-'$_POST[xarajat]' WHERE id='1'");
        }else if(!empty($_POST['daromad'])){
            $db -> query("UPDATE money SET pul = '$row[pul]'+'$_POST[daromad]' WHERE id='1'");
        }else if(!empty($_POST['xarajat'])){
            $db -> query("UPDATE money SET pul = '$row[pul]'-'$_POST[xarajat]' WHERE id='1'");
        }
    }else{
        echo "<p style='color:red; text-align: center;'>Tuldirilsin!</p>";
    }
?>
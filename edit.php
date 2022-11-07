<?php
    $id = $_GET['id']; // ..
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database_name = "result_db";
    $connection = new mysqli($server_name,$user_name,$password,$database_name);
    $read_query = "SELECT * FROM result WHERE id = '$id'";
    $result = $connection->query($read_query);
    if(isset($_POST['update'])=='update'){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $english = $_POST['english'];
        $math = $_POST['math'];
        $physics = $_POST['physics'];
        $history = $_POST['history'];
        $art = $_POST['art'];
        $highest = $_POST['highest'];
        $lowest = $_POST['lowest'];
        $total = $_POST['total'];
        $average = $_POST['average'];
        $grades = $_POST['grades'];
        $rank = $_POST['rank'];

        $update_query = "UPDATE result  SET id='$id',name='$name',english='$english',math='$math',physics='$physics',history='$history',art='$art',highest='$highest',lowest='$lowest',total='$total',average='$average',grades='$grades',rank='$rank' WHERE id='$id';";
        $connection->query($update_query);
        header("Location:read.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Sheet list</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Css Link -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="resultDataEntryForm">
        <div class="container">
            <div class="row">
                <div class="result_heading">
                    <h1>Student Result Sheet Data Entry</h1>
                </div>
                <div class="menu">
                    <ul>
                        <li>
                            <a href="read.php">Result Sheet</a>
                        </li>
                        <li>
                            <a href="create.php">Student Result Data Entry</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <?php
                    while($row = $result->fetch_assoc()){
                    ?>
                        <form action="#" method="post" class="result_form">
                            <label for="id">StudentID :</label>
                            <input type="text" name="id" id="id" value="<?php echo $row['id'];?>"><br><br>

                            <label for="name">Name :</label>
                            <input type="text" name="name" id="name" value="<?php echo $row['Name'];?>"><br><br>

                            <label for="english">English :</label>
                            <input type="text" name="english" id="english" value="<?php echo $row['English'];?>"><br><br>

                            <label for="math">Math :</label>
                            <input type="text" name="math" id="math" value="<?php echo $row['Math'];?>"><br><br>

                            <label for="physics">Physics :</label>
                            <input type="text" name="physics" id="physics" value="<?php echo $row['Physics'];?>"><br><br>

                            <label for="History">History :</label>
                            <input type="text" name="history" id="history" value="<?php echo $row['History'];?>"><br><br>

                            <label for="art">Art :</label>
                            <input type="text" name="art" id="art" value="<?php echo $row['Art'];?>"><br><br>

                            <label for="highest">Highest :</label>
                            <input type="text" name="highest" id="highest" value="<?php echo $row['Highest'];?>"><br><br>

                            <label for="lowest">Lowest :</label>
                            <input type="text" name="lowest" id="lowest" value="<?php echo $row['Lowest'];?>"><br><br>

                            <label for="total">Total :</label>
                            <input type="text" name="total" id="total" value="<?php echo $row['Total'];?>"><br><br>

                            <label for="average">Average :</label>
                            <input type="text" name="average" id="average" value="<?php echo $row['Average'];?>"><br><br>

                            <label for="grades">Grades :</label>
                            <input type="text" name="grades" id="grades" value="<?php echo $row['Grades'];?>"><br><br>

                            <label for="rank">Rank :</label>
                            <input type="text" name="rank" id="rank" value="<?php echo $row['Rank'];?>"><br><br>

                            <button type="submit" name="update" id="update" class="from_btn">Update</button>
                        </form>
                    <?php
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
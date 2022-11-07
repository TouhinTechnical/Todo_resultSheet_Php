<?php
    $id = $_GET['id'];
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $database_name = "result_db";
    $connection = new mysqli($server_name,$user_name,$password,$database_name);
    $read_query = "SELECT * FROM result WHERE id = '$id'";
    // $read_query = "SELECT * FROM result";
    $result = $connection->query($read_query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Sheet</title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- Font Awesome link -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">
    <!-- Css Link -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="resultDataEntryForm">
        <div class="container">
            <div class="row">
                <div class="result_heading">
                    <h1>Student Result Sheet</h1>
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
                <table>
                    <tr>
                        <th>Student Id</th>
                        <th>Name</th>
                        <th>English</th>
                        <th>Math</th>
                        <th>Physics</th>
                        <th>History</th>
                        <th>Art</th>
                        <th>Highest</th>
                        <th>Lowest</th>
                        <th>Total</th>
                        <th>Average</th>
                        <th>Grades</th>
                        <th>Rank</th>
                        <th>Edit</th>
                        <th>Delect</th>
                    </tr>
                    <!-- Dynamic row -->
                    <?php
                        while($row = $result->fetch_assoc()){
                        ?>
                            <tr>
                                <!-- Dynamic veraible row golo database r javaba lika hoice oivabe likte hobe -->
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['Name'];?></td>
                                <td><?php echo $row['English'];?></td>
                                <td><?php echo $row['Math'];?></td>
                                <td><?php echo $row['Physics'];?></td>
                                <td><?php echo $row['History'];?></td>
                                <td><?php echo $row['Art'];?></td>
                                <td><?php echo $row['Highest'];?></td>
                                <td><?php echo $row['Lowest'];?></td>
                                <td><?php echo $row['Total'];?></td>
                                <td><?php echo $row['Average'];?></td>
                                <td><?php echo $row['Grades'];?></td>
                                <td><?php echo $row['Rank'];?></td>
                                <td><a href="edit.php?id=<?php echo $row['id'];?>" title="Edit" class="edit_icon"><i class="far fa-edit"></i></a></td>
                                <td><a href="delect.php?id=<?php echo $row['id'];?>" title="Delect" class="delect_icon"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        <?php  
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
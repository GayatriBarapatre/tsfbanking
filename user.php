<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        /* *{
            margin: 0;
            padding: 0;
        } */
        body {
            /* padding: 10px;
            margin:10px; */
            background-color: gray;
            color: white;
        }

        /* .user {
            margin: 0px;
            padding: 30px;
        } */

        h2 {
            /* margin-bottom: 50px;
            padding: 50px; */
            line-height: 50px;
            font-size: 50px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-align: center;
        }

        table.scrolldown tbody{
            height: 500px;
            overflow-y: auto;
        }
        .user button {
            margin-top: 0px;
            padding-bottom: 20px;
            height: 30px;

        }

       
    </style>
</head>

<body>
    <div class="container">
        <div class="navbar">
            <img src="Banklogo.jpg" class="logo">
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="user.php">User Details</a></li>
                    <li><a href="transfer.php">Transfer Money</a></li>
                    <li><a href="">History</a></li>
                </ul>
            </nav>
        </div>

        <div class="user">
            <h2>User Details</h2>
                <table class="table table-dark table-striped scrolldown">
                    <tbody>
                    <tr>
                        <td>Sr. No </td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Balance</td>
                        <td>Action</td>
                    </tr>


                    <?php

                    include "config.php";
                    $sql =  "select * from userdetails.user";
                    $records = mysqli_query($con, $sql) or die(mysqli_error($con));

                    // echo $sql;


                    while ($data = mysqli_fetch_assoc($records)) {
                    ?>
                        <tr>
                            <td><?php echo $data['sr no']; ?></td>
                            <td><?php echo $data['Name']; ?></td>
                            <td><?php echo $data['Email']; ?></td>
                            <td><?php echo $data['Balance']; ?></td>
                            <td><a href="transfer.php">
                                    <button type="button" class="btn btn-primary">Transfer Money</button></a></td>
                        </tr>
                    <?php
                    }
                    ?>
                    </tbody>
                </table>

                <?php mysqli_close($con) ?>
            </div>

            <!-- Footer -->
            <footer class="page-footer">

                <!-- Copyright -->
                <div class="footer-copyright text-center py-1">© 2021 Copyright
                    <h5>Project by Gayatri Barapatre</h5>
                </div>
                <!-- Copyright -->

            </footer>
            <!-- Footer -->

</body>

</html>
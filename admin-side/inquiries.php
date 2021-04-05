<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Inquiries</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="../css/bootstrap/bootstrap-5.0.0-beta2-dist/css/bootstrap.min.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    <!-- css -->
    <link rel="stylesheet" href="../css/inquiries.css">



</head>

<body>

    <div class="container">
        <br><br>     
        <div class="row">
            <div class="panel panel-primary filterable">
                <div class="panel-heading">
                    <h3 class="panel-title">Tosha Creative Studios</h3>
                    <!-- <div class="pull-right">
                        <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                    </div> -->
                </div>
                <br><br><br><br>
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Query</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php

                        include '../db/connection.php';

                        $selectquery = " SELECT * FROM inquiry ";

                        $query = mysqli_query($conn, $selectquery);

                        $nums = mysqli_num_rows($query);

                        while ($res = mysqli_fetch_array($query)) {

                        ?>

                            <tr>
                                <th scope="row"><?php echo $res['inquiry_id'] ?></th>
                                <td><?php echo $res['firstname'] ?></td>
                                <td><?php echo $res['email'] ?></td>
                                <td><?php echo $res['queries'] ?></td>
                            </tr>

                        <?php

                        }

                        ?>


                    </tbody>
                </table>

            </div>
        </div>
    </div>

</body>

</html>
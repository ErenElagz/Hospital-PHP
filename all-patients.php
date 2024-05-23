<?php
include "./dbcon.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>All Patients</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhOOn89h2oC2mX4CubFI1t2B2ftiUldDH5sHC9BFxd9g&s" />

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <?php include './header.php'; ?>

    <!--Table-->
    <section class="container bg-light -10 rounded-4 p-4 mt-3">
        <h4>All Patients</h4>
        <table class="table table-bordered table-striped text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>ID Number</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <?php
            $result = mysqli_query($dbcon, "Select * from `patients` ");
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $surname = $row['surname'];
                    $id_number = $row['id_number'];
                    $phone = $row['phone'];
                    $email = $row['email'];
                    $department = $row['department'];
                    echo '<tr>
                                    <td>' . $id . '</td>
                                    <td>' . $name . '</td>
                                    <td>' . $surname . '</td>
                                    <td>' . $id_number . '</td>
                                    <td>' . $phone . '</td>
                                    <td>' . $email . '</td>
                                    <td>' . $department . '</td>                                
                                    <td><button class="btn btn-primary w-100"><a class="nav-link" href="./update-patient.php?updateid=' . $id . '">Update</a> </button></td>
                                    <td><button class="btn btn-danger w-100" ><a class="nav-link" href="./delete-patient.php?deleteid=' . $id . '">Delete</a> </button></td>
                                    </tr>';
                }
            } ?>
            </tbody>
        </table>
    </section>

    <!--JS-->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>
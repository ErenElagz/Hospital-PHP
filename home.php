<?php
include "./dbcon.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $id_number = $_POST['id_number'];
    $city = $_POST['city'];
    $department = $_POST['department'];
    $date = $_POST['date'];
    mysqli_query($dbcon, "insert into `appointments` (name,surname,id_number,city,department,date) values('$name','$surname','$id_number','$city','$department','$date')");
}
function getCount($dbcon, $tableName)
{
    $sql = "SELECT COUNT(*) AS count FROM $tableName";
    $result = $dbcon->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row['count'];
    } else {
        return 0;
    }
}
$patientCount = getCount($dbcon, 'patients');
$employeeCount = getCount($dbcon, 'employees');
$doctorCount = getCount($dbcon, 'doctors');
$departmentCount = getCount($dbcon, 'departments');
$appointmentCount = getCount($dbcon, 'appointments');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hospital System</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhOOn89h2oC2mX4CubFI1t2B2ftiUldDH5sHC9BFxd9g&s" />
    
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include './header.php'; ?>

    <!--Hospital Statistics-->
    <section class="container bg-light p-3 mt-4 rounded-4">
        <h4>Hospital Statistics</h4>
        <div class="container d-flex flex-row align-items-center justify-content-between mt-4 gap-3">
            <div>
                <h6>Department Statistics</h6>
                <div class="rounded-3 -10 text-center p-3">
                    <h3 class="fw-bold"><?php echo  $departmentCount ?></h3>
                </div>
            </div>
            <div>
                <h6>Doctors Statistics</h6>
                <div class="rounded-3 -10 text-center p-3">
                    <h3 class="fw-bold"><?php echo  $doctorCount ?></h3>
                </div>
            </div>
            <div>
                <h6>Employees Statistics</h6>
                <div class="rounded-3 -10 text-center p-3">
                    <h3 class="fw-bold"><?php echo  $employeeCount ?></h3>
                </div>
            </div>
            <div>
                <h6>Patients Statistics</h6>
                <div class="rounded-3 -10 text-center p-3">
                    <h3 class="fw-bold"><?php echo  $patientCount ?></h3>
                </div>
            </div>
            <div>
                <h6>Appointments Statistics</h6>
                <div class="rounded-3 -10 text-center p-3">
                    <h3 class="fw-bold"><?php echo  $appointmentCount ?></h3>
                </div>
            </div>
        </div>
    </section>

    <!--Appointment-->
    <section class="container mt-3 row m-auto p-0">
        <!--Input-->
        <form method="post" class=" p-0 col d-flex flex-column align-items-center justify-content-center">
            <div class="w-100 bg-light -10 rounded-4 p-4">
                <!--Personal-->
                <h5>Personal Information</h5>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">ID Number</div>
                    </div>
                    <input type="text" maxlength="11" class="form-control" id="IdInput" name="id_number" required />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Name</div>
                    </div>
                    <input type="numeric" class="form-control" id="NameInput" name="name" required />
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Surname</div>
                    </div>
                    <input type="text" class="form-control" id="SurnameInput" name="surname" required />
                </div>
                <!--Appointment-->
                <h5>Appointment Information</h5>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">City</div>
                    </div>
                    <select class="form-control" id="CityInput" name="city" required>
                        <option disabled selected hidden></option>
                        <option>Antalya</option>
                        <option>Izmir</option>
                        <option>Tekirdag</option>
                        <option>Istanbul</option>
                        <option>Ankara</option>
                    </select>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Department</div>
                    </div>
                    <select class="form-control" id="DepartmentInput" name="department" placeholder="Choose City" required>
                        <option disabled selected hidden></option>
                        <option>Oral and Dental Diseases</option>
                        <option>Eye Diesases</option>
                        <option>Ear, Nose and Throat Diseases</option>
                        <option>General Surgery</option>
                        <option>Plastic Surgery</option>
                    </select>
                </div>
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Date</div>
                    </div>
                    <input type="date" class="form-control" id="DateInput" name="date" required />
                </div>
                <!--Button-->
                <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-danger w-100 rounded-3 " type="reset">Clear the Form</button>
                    <button class="btn btn-success w-100 rounded-3 text-light" name="submit" type="submit">Save the Appointment
                    </button>
                </div>
            </div>
        </form>

        <!--Animation-->
        <div class="col d-flex align-items-center justify-content-center">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_x1gjdldd.json" mode="bounce" background="transparent" speed="0.6" style="width: fit-content; height: fit-content" loop autoplay>
            </lottie-player>
        </div>

    </section>

    <!--Table-->
    <section class="container bg-light -10 rounded-4 p-4 mt-3">
        <h4>All Appointments</h4>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>ID Number</th>
                    <th>City</th>
                    <th>Department</th>
                    <th>Date</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <?php
            $result = mysqli_query($dbcon, "Select * from `appointments` ");
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row['id'];
                    $name = $row['name'];
                    $surname = $row['surname'];
                    $id_number = $row['id_number'];
                    $city = $row['city'];
                    $department = $row['department'];
                    $date = $row['date'];
                    echo '<tr>
                                    <td>' . $id . '</td>
                                    <td>' . $name . '</td>
                                    <td>' . $surname . '</td>
                                    <td>' . $id_number . '</td>
                                    <td>' . $city . '</td>
                                    <td>' . $department . '</td>
                                    <td>' . $date . '</td>                                
                                    <td><button class="btn btn-primary w-100"><a class="nav-link" href="./update-appointment.php?updateid=' . $id . '">Update</a> </button></td>
                                    <td><button class="btn btn-danger w-100" ><a class="nav-link" href="./delete-appointment.php?deleteid=' . $id . '">Delete</a> </button></td>
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
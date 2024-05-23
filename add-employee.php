<?php
include "./dbcon.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $id_number = $_POST['id_number'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $wage = $_POST['wage'];
    mysqli_query($dbcon, "insert into `employees` (name,surname,id_number,phone,email,department,wage) values('$name','$surname','$id_number','$phone','$email','$department','$wage')");
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--Meta-->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Add Doctor</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhOOn89h2oC2mX4CubFI1t2B2ftiUldDH5sHC9BFxd9g&s" />

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include './header.php'; ?>

    <!--Appointment-->
    <section class="container mt-3 row m-auto p-0">
        <!--Input-->
        <form method="post" class=" p-0 col d-flex flex-column align-items-center justify-content-center">
            <div class="w-100 bg-light -10 rounded-4 p-4">
                <!--Personal-->
                <h5>Add Employee</h5>
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
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Surname</div>
                    </div>
                    <input type="text" class="form-control" id="SurnameInput" name="surname" required />
                </div>
                <!--Appointment-->
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Department</div>
                    </div>
                    <select class="form-control" id="DepartmentInput" name="department" placeholder="Choose City" required>
                        <option disabled selected hidden></option>
                        <option>Administration</option>
                        <option>Human Resources</option>
                        <option>Information Technology</option>
                        <option>Maintenance</option>
                        <option>Electrical Services</option>
                        <option>Housekeeping</option>
                        <option>Security</option>
                        <option>Finance</option>
                        <option>Procurement</option>
                        <option>Logistics</option>
                        <option>Medical Records</option>
                        <option>Patient Services</option>
                        <option>Admissions</option>
                        <option>Billing and Coding</option>
                        <option>Dietary Services</option>
                        <option>Laundry Services</option>
                        <option>Marketing</option>
                        <option>Public Relations</option>
                    </select>
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">E-mail</div>
                    </div>
                    <input type="numeric" class="form-control" id="EmailInput" name="email" required />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Phone</div>
                    </div>
                    <input type="text" class="form-control" id="PhoneInput" name="phone" required />
                </div>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text">Wage</div>
                    </div>
                    <input type="text" class="form-control" id="PhoneInput" name="wage" required />
                </div>

                <!--Button-->
                <div class="d-flex gap-2 mt-3">
                    <button class="btn btn-danger w-100 rounded-3 " type="reset">Clear the Form</button>
                    <button class="btn btn-success w-100 rounded-3 text-light" name="submit" type="submit">Add Employee
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

    <!--JS-->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>

</html>
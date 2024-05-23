<!--Header-->
<header class="bg-light py-2">
    <nav class="container navbar navbar-expand-md navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./home.php">
                <h3 class="fw-bold opacity-75">Hospital</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="./home.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Management
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./all-doctors.php">All Doctors</a></li>
                            <li><a class="dropdown-item" href="./all-employees.php">All Employees</a></li>
                            <li><a class="dropdown-item" href="./all-departments.php">All Departments</a></li>

                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./add-doctor.php">Add New Doctor</a></li>
                            <li><a class="dropdown-item" href="./add-employee.php">Add New Employee</a></li>
                            <li><a class="dropdown-item" href="./add-department.php">Add New Department</a></li>

                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            Appointments
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./all-appointments.php">All Appointments</a></li>
                            <li><a class="dropdown-item" href="./add-appointment.php">Create Appointment</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="./all-patients.php">All Patients</a></li>
                            <li><a class="dropdown-item" href="./add-patient.php">Add New Patients</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="link" href="./logout.php">
                    <button class="btn btn-danger rounded-2" type="button">Log Out</button>
                </a>
            </div>
        </div>
    </nav>
</header>
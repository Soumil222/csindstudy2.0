<?php
$db_host = "localhost";
$db_name = "ben_dashboard";
$db_user = "dashboard_user";
$db_pass = "fwiWx8ooWRUrjulm";//"H9XEWLXBUeFK]/!O";
$db_port = "3307";

$conn = mysqli_connect($db_host.':'.$db_port, $db_user, $db_pass, $db_name);


if(mysqli_connect_error()) {
  echo mysqli_connect_error();
  exit;
}

$sql = "SELECT * FROM tblStudents WHERE ID = 1";

$results = mysqli_query($conn, $sql);

if ($results === false) {
  echo mysqli_error($conn);
} else {
  $student = mysqli_fetch_assoc($results);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>B.E.N. Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <nav class="navbar navbar-fixed-top">

        <a class="navbar-brand float-xs-right float-sm-left" href="#"><img src="images/Logo-2.png" class="img-fluid" /></a>

        <div class="collapse navbar-toggleable-xs">

            <ul class="nav navbar-nav float-sm-right">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Welcome <?= $student['NickName']; ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Profile.php">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Courses.php">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Grades/index.html">Grades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Calendar/index.html">Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Chat/index.html">Chat</a>
                </li>
            </ul>

        </div>
    </nav>

    <!-- Welcome -->
    <section id="introduction">
        <div class="container">
            <h1>WELCOME</h1>
            <main>
              <?php if($student === null): ?>
                <p>Student record not found.</p>
              <?php else: ?>
              <student>
                <h2><?= $student['FirstName']; ?><span> </span><?= $student['LastName']; ?></h2>
              </student>
          <?php endif; ?>
          </main>
          <div class="row">
              <div class="col-md-6">
                <div class="card-header">
                    <h2>COURSES</h2>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h6>Course 1</h6>
                    <h6>Course 2</h6>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="card-header">
                    <h2>Upcoming Deadlines</h2>
                </div>
                <div class="card">
                  <div class="card-body">
                    <h6>Assignment 1</h6>
                    <h6>Assignment 2</h6>
                  </div>
                </div>
              </div>
        </div>

        <div class="row">
            <div class="col-md-6">
              <div class="card-header">
                  <h2>Notifcations</h2>
              </div>
              <div class="card">
                <div class="card-body">
                  <h6>Announcement 1</h6>
                  <h6>Announcement 2</h6>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card-header">
                  <h2>Recent Chats</h2>
              </div>
              <div class="card">
                <div class="card-body">
                  <h6>Message 1</h6>
                  <h6>Message 2</h6>
                </div>
              </div>
            </div>
      </div>
    </section>

    <!-- jQuery (Bootstrap JS plugins depend on it) -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>

<?php
session_start();
include('../../../config/database.php');

// ตรวจสอบ Session และควบคุมการใช้งานปุ่ม Back
if (isset($_SESSION['username'])) {
    // ผู้ใช้เข้าสู่ระบบแล้ว
    if ($result->num_rows > 0) {
        // ล็อกอินเป็นพนักงาน
        $_SESSION['username'] = $username; // เก็บ session สำหรับพนักงาน
        $row = $result->fetch_assoc();
        if ($row['role'] == 'employee') {
            header('Location: ../employee/em_home.php');
        } elseif ($row['role'] == 'owner') {
            header('Location: ../owner/ow_home.php');
        }
        exit();
    }
    exit();
} elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // ตรวจสอบพนักงาน
    $stmt = $conn->prepare("SELECT * FROM admins WHERE username = ? AND password = ?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // ล็อกอินเป็นพนักงาน
        $_SESSION['username'] = $username; // เก็บ session สำหรับพนักงาน
        header('Location: views/dashboard.php'); // ให้พนักงานไปยังหน้า dashboard ของพนักงาน
        exit();
    } else {
        include('assets/pop/admin-not_found.html');
    }

    $conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KAOKANG|MIS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!--Link google fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: "Kanit", sans-serif;
            display: grid;
            place-items: center;
            /* จัดตำแหน่งให้อยู่กึ่งกลางทั้งแนวนอนและแนวตั้ง */
            background-image: url("img/background.webp");
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1><i class="fas fa-store fa-1x text-primary "></i> ระบบการจัดการร้านข้าวแกง</h1>
                <div class="card">
                    <div class="card-header">เข้าสู่ระบบ</div>
                    <div class="card-body">
                        <form method="POST">
                            <div class="form-group">
                                <label for="username">ชื่อผู้ใช้:</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">รหัสผ่าน:</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                        </form>
                        <div class="text-center mt-3">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- เรียกใช้ Bootstrap JS และ jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>

</html>
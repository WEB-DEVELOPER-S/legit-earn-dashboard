<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles.css">
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <style>
        .welcomeCard {
            width: 90%;
        }
    </style>
</head>
<body>
    <div class="card bg-warning p-2" id="welcomeCard">
        <div class="d-flex align-items-center justify-content-between">
            <span class="d-flex align-items-center gap-2">
                <i class='bx bx-check-circle me-4'></i>
                <span class="fw-semibold fs-4">Welcome Oreste!</span>
            </span>
            <span>
                <i class='bx bx-x' style="cursor: pointer;" onclick="displayNone()"></i>
            </span>
        </div>
        <p class="mt-1 px-2">LEGITEARN offers 10+ digital products, including ads, YouTube ads, and Survey games,
            all tailored to your
            unique needs. You can also gift your promoter downline!</p>
    </div>
    <script src="dashboard.js"></script>
</body>
</html>
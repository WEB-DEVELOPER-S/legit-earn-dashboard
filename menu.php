<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .nav-bar {
            display: flex;
            align-items: center;
            padding: 10px;
            background: #007bff;
            color: #fff;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1001;
        }

        .menu {
            display: flex;
            flex-direction: column;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100vh;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            transition: transform 0.3s ease;
            transform: translateX(-100%);
            overflow-y: auto;
        }

        .menu.open {
            transform: translateX(0);
        }

        .menu-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }

        .menu-open .menu-overlay {
            display: block;
        }

        .menu::-webkit-scrollbar {
            width: 8px;
        }

        .menu::-webkit-scrollbar-thumb {
            background-color: #888;
            border-radius: 10px;
        }

        .menu::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }

        .menu::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .list-dots, .list-levels {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .list-dots li, .list-levels li {
            padding: 5px 0;
        }

        .btn {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <nav class="nav-bar">
        <i class='bx bx-menu-alt-left' onclick="toggleMenu()"></i>
        <i class='bx bx-dots-vertical-rounded'></i>
        <i class='bx bx-cog'></i>
    </nav>

    <!-- Menu -->
    <div class="menu" id="menu">
        <div>
            <p class="p-3 pb-1 text-secondary">MAIN</p>
            <div class="btn btn-light d-flex align-items-center mx-2 mb-2">
                <i class='bx bx-home text-primary me-2'></i>
                <a href="dashboard.php" class="fs-5 fw-semibold text-primary mb-0">Dashboard</a>
            </div>
            <div class="btn btn-light d-flex align-items-center mx-2 mt-2">
                <i class='bx bx-chat text-primary me-2'></i>
                <p class="fs-5 fw-semibold text-primary mb-0">WhatsApp Us</p>
            </div>
            <div class="btn btn-light d-flex align-items-center mx-2 mt-2">
                <i class='bx bx-gift text-primary me-2'></i>
                <p class="fs-5 fw-semibold text-primary mb-0">Bonus</p>
            </div>
        </div>
        <div>
            <p class="text-secondary pb-1 p-3">Finance</p>
            <div class="btn btn-light d-flex align-items-center mx-2 mt-2" onclick="displayWithdraws()">
                <i class='bx bx-download text-primary me-2'></i>
                <p class="fs-5 fw-semibold text-primary mb-0">Withdraw</p>
                <i id="chevron-icon" class='bx bx-chevron-right text-primary ms-auto'></i>
            </div>
            <ul class="list-dots" id="list-dots">
                <li><a href="withdrawAccountBalance.php">Account Balance</a></li>
                <li><a href="#">First Activities</a></li>
                <li><a href="#">Ads Balance</a></li>
                <li><a href="#">Tiktok Balance</a></li>
                <li><a href="#">Survey Balance</a></li>
                <li><a href="#">History</a></li>
            </ul>
            <div class="btn btn-light d-flex align-items-center mx-2 mt-2" onclick="displayLevels()">
                <i class='bx bx-street-view text-primary me-2'></i>
                <p class="fs-5 fw-semibold text-primary mb-0">Team</p>
                <i id="chevron-icon-levels" class='bx bx-chevron-right text-primary ms-auto'></i>
            </div>
            <ul class="list-levels" id="list-levels">
                <li><a href="#">Level 1</a></li>
                <li><a href="#">Level 2</a></li>
            </ul>
        </div>
        <div>
            <p class="p-3 pb-1 text-secondary">Products</p>
            <div class="btn btn-light d-flex align-items-center mx-2 mb-2">
                <i class='bx bx-package text-primary me-2'></i>
                <p class="fs-5 fw-semibold text-primary mb-0">Ads Earnings</p>
            </div>
            <div class="btn btn-light d-flex align-items-center mx-2">
                <i class='bx bx-message-dots text-primary me-2'></i>
                <p class="fs-5 fw-semibold text-primary mb-0">Facebook Ad</p>
            </div>
            <div class="btn btn-light d-flex align-items-center mx-2 mt-2">
                <i class='bx bx-world text-primary me-2'></i>
                <p class="fs-5 fw-semibold text-primary mb-0">Instagram Ad</p>
            </div>
            <div class="btn btn-light d-flex align-items-center mx-2 mt-2">
                <i class='bx bx-medal text-primary me-2'></i>
                <p class="fs-5 fw-semibold text-primary mb-0">Google Ad</p>
            </div>
            <div class="btn btn-light d-flex align-items-center mx-2 mt-2">
                <i class='bx bx-album text-primary me-2'></i>
                <p class="fs-5 fw-semibold text-primary mb-0">Welcome Bonus</p>
            </div>
            <div class="btn btn-light d-flex align-items-center mx-2 mt-2">
                <i class='bx bx-video text-primary me-2'></i>
                <p class="fs-5 fw-semibold text-primary mb-0">Youtube Earn</p>
            </div>
            <div class="btn btn-light d-flex align-items-center mx-2 mt-2">
                <i class='bx bx-film text-primary me-2'></i>
                <p class="fs-5 fw-semibold text-primary mb-0">TikTok Earn</p>
            </div>
            <div class="btn btn-light d-flex align-items-center mx-2 mt-2">
                <i class='bx bx-list-ul text-primary me-2'></i>
                <p class="fs-5 fw-semibold text-primary mb-0">Dollar Questions</p>
            </div>
        </div>
        <div>
            <p class="p-3 pb-1 text-secondary">Settings</p>
            <div class="btn btn-light d-flex align-items-center mx-2 mb-2">
                <i class='bx bx-group text-primary me-2'></i>
                <p class="fs-5 fw-semibold text-primary mb-0">Profile</p>
            </div>
            <div class="btn btn-light d-flex align-items-center mx-2 mt-2 mb-3">
                <i class='bx bx-log-out text-primary me-2'></i>
                <a href="logout.php" class="fs-5 fw-semibold text-primary mb-0">Log out</a>
            </div>
        </div>
    </div>

    <script>
        function toggleMenu() {
            document.body.classList.toggle('menu-open');
        }

        function displayWithdraws() {
            let list = document.getElementById('list-dots');
            let chevron = document.getElementById('chevron-icon');
            
            list.classList.toggle('active');
            if (list.classList.contains('active')) {
                chevron.classList.remove('bx-chevron-right');
                chevron.classList.add('bx-chevron-down');
            } else {
                chevron.classList.remove('bx-chevron-down');
                chevron.classList.add('bx-chevron-right');
            }
        }

        function displayLevels() {
            let list = document.getElementById('list-levels')
            let chevron = document.getElementById('chevron-icon-levels')
        
            list.classList.toggle('active-level')
            if(list.classList.contains('active-level')){
                chevron.classList.remove('bx-chevron-right')
                chevron.classList.add('bx-chevron-down')
            } else {
                chevron.classList.remove('bx-chevron-down')
                chevron.classList.add('bx-chevron-right')
            }
        }
    </script>
</body>
</html>

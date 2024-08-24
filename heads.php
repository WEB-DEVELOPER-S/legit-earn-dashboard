<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
        .menu {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            transition: transform 0.3s ease;
            transform: translateX(-100%);
        }
        .menu.open {
            display: block;
            transform: translateX(0);
        }
        .menu-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            z-index: 999;
        }
        .menu-open .menu {
            transform: translateX(0);
        }
        .menu-open .menu-overlay {
            display: block;
        }
    </style>
</head>
<body>
    <nav class="nav-bar bg-primary bg-gradient">
        <i class='bx bx-menu-alt-left' onclick="displayMenu()"></i>
        <i class='bx bx-dots-vertical-rounded'></i>
        <i class='bx bx-cog'></i>
    </nav>
    <!-- Menu container -->
    <div class="menu" id="menu"></div>
    <div class="menu-overlay"></div>

    <script>
        function displayMenu() {
            let menu = document.getElementById('menu');
            let overlay = document.querySelector('.menu-overlay');
            let body = document.body;

            // Check if the menu is already open
            if (menu.classList.contains('open')) {
                menu.classList.remove('open');
                overlay.style.display = 'none';
                body.classList.remove('menu-open');
            } else {
                // Fetch and load the menu content
                fetch('menu.php')
                    .then(response => response.text())
                    .then(data => {
                        menu.innerHTML = data;
                        menu.classList.add('open');
                        overlay.style.display = 'block';
                        body.classList.add('menu-open');
                    })
                    .catch(error => console.error('Error loading menu:', error));
            }
        }
    </script>
</body>
</html>

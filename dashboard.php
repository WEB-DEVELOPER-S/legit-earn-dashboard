<?php 
session_start();
$_SESSION = array();
?>
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
</head>

<body>
    <?php include("heads.php") ?>

    <div class="dashboard bg-primary bg-gradient px-3 pt-4 pb-5 mb-5">
        <h3 class="fs-2  fw-semibold text-white">Dashboard</h3>
        <p class="fs-3"><span class="fw-semibold text-white">Home / </span><span class="text-body-tertiary">LEGITEARN</span>
        </p>
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
    </div>
    <main class="pt-5">
        <div class="card total-earnings mx-3 p-2">
            <div>
                <span class=" fs-4 fw-bold d-block">Total Earnings</span>
                <span class="fs-3 fw-semibold d-block">RWF 2K</span>
            </div>
            <div class="returns mt-4 d-flex justify-content-between">
                <div class="d-flex">
                    <div class="box bg-white d-flex justify-content-center pe-3 mt-3">
                        <i class='bx bx-up-arrow-alt'></i>
                    </div>
                    <span class="mx-2">
                        <span class="d-block fw-semibold fs-2">RWF 3500</span>
                        <span class="d-block fw-semibold">EXPENSE</span>
                    </span>
                </div>
                <div class="d-flex">
                    <div class="box bg-white d-flex justify-content-center pe-3 mt-3">
                        <i class='bx bx-down-arrow-alt'></i>
                    </div>
                    <span class="mx-2">
                        <span class="d-block fw-semibold fs-2">RWF 0.00</span>
                        <span class="d-block fw-semibold">RETURN</span>
                    </span>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <div class="card account-balance mx-3">
                <div class="d-flex justify-content-between">
                    <div class="p-4">
                        <span class="fw-semibold d-block fs-5">Account Balance</span>
                        <span class="fs-3 d-block fw-semibold">RWF 0.00</span>
                    </div>
                    <div class="box1 bg-white me-4 mt-4">
                        <i class='bx bx-bar-chart-square d-flex justify-content-center pe-3 mt-3'></i>
                    </div>
                </div>
                <div class="px-3 pb-3">
                    <span class="d-flex justify-content-between">
                        <span>Wealth harbour</span>
                        <span>40%</span>
                    </span>
                    <div class="progress-bar-container">
                        <div class="progress-bar"></div>
                    </div>                                                
                </div>
            </div>

            <!--Total cashout-->
            <div class="card total-cashout mx-3 mt-3">
                <div class="d-flex justify-content-between">
                    <div class="p-4">
                        <span class="fw-semibold d-block fs-5">Total Cashouts</span>
                        <span class="fs-3 d-block fw-semibold">RWF 0.00</span>
                    </div>
                    <div class="box1 bg-white me-4 mt-4">
                        <i class='bx bx-user-circle d-flex justify-content-center pe-3 mt-3'></i>
                    </div>
                </div>
                <div class="px-3 pb-3">
                    <span class="d-flex justify-content-between">
                        <span>Wealth harbour</span>
                        <span>60%</span>
                    </span>
                    <div class="cashout-progress-bar-container">
                        <div class="cashout-progress-bar"></div>
                    </div>                                                
                </div>
            </div>

            <!--Pending Cashouts-->
            <div class="card pending-cashout mx-3 mt-3">
                <div class="d-flex justify-content-between">
                    <div class="p-4">
                        <span class="fw-semibold d-block fs-5">Pending Cashouts</span>
                        <span class="fs-3 d-block fw-semibold">RWF 0.00</span>
                    </div>
                    <div class="box1 bg-white me-4 mt-4">
                        <i class='bx bx-package d-flex justify-content-center fs-1 mt-3'></i>
                    </div>
                </div>
                <div class="px-3 pb-3">
                    <span class="d-flex justify-content-between">
                        <span>Wealth harbour</span>
                        <span>30%</span>
                    </span>
                    <div class="pending-progress-bar-container">
                        <div class="pending-progress-bar"></div>
                    </div>                                                
                </div>
            </div>

            <!--Pending Cashouts-->
            <div class="card referral-income mx-3 mt-3">
                <div class="d-flex justify-content-between">
                    <div class="p-4">
                        <span class="fw-semibold d-block fs-5">Referral Income(Direct)</span>
                        <span class="fs-3 d-block fw-semibold">RWF 0.00</span>
                    </div>
                    <div class="box1 bg-white me-4 mt-4">
                        <i class='bx bx-file d-flex pe-3 mt-3'></i>
                    </div>
                </div>
                <div class="px-3 pb-3">
                    <span class="d-flex justify-content-between">
                        <span>Wealth harbour</span>
                        <span>30%</span>
                    </span>
                    <div class="referral-progress-bar-container">
                        <div class="referral-progress-bar"></div>
                    </div>                                                
                </div>
            </div>

            <!--whatsapp balance-->
            <div class="card bg-info bg-gradient mx-3 mt-3 p-4 pb-2">
                <div class="d-flex justify-content-between">
                    <span>
                        <span class="fw-semibold d-block fs-5">WhatsApp Balance</span>
                        <span class="fs-3 fw-semibold d-block">RWF 0.00</span>
                        <span class="d-block">
                            <span>
                                <i class='bx bx-caret-down'></i>
                            </span>
                            <span>12% last month</span>
                        </span>
                    </span>
                    <div class="pie-chart"></div>
                </div>
            </div>

            <!--Gifts Balance-->
            <div class="card bg-warning bg-gradient mx-3 mt-3 p-4 pb-2">
                <div class="d-flex justify-content-between">
                    <span>
                        <span class="fw-semibold d-block fs-5">Gifts Balance</span>
                        <span class="fs-3 fw-semibold d-block">RWF 0.00</span>
                        <span class="d-block">
                            <span>
                                <i class='bx bx-caret-up'></i>
                            </span>
                            <span>24% last month</span>
                        </span>
                    </span>
                    <div class="pie-chart-gifts"></div>
                </div>
            </div>
            <!--Youtube Balance-->
            <div class="card mx-3 mt-3 p-4 pb-2 youtube">
                <div class="d-flex justify-content-between">
                    <span>
                        <span class="fw-semibold d-block fs-5">YouTube Balance</span>
                        <span class="fs-3 fw-semibold d-block">RWF 0.00</span>
                        <span class="d-block">
                            <span>
                                <i class='bx bx-caret-up'></i>
                            </span>
                            <span>24% last month</span>
                        </span>
                    </span>
                    <div class="pie-chart-youtube"></div>
                </div>
            </div>

            <!--Tiktok Balance-->
            <div class="card mx-3 mt-3 p-4 pb-2 tiktok">
                <div class="d-flex justify-content-between">
                    <span>
                        <span class="fw-semibold d-block fs-5">TikTok Balance</span>
                        <span class="fs-3 fw-semibold d-block">RWF 0.00</span>
                        <span class="d-block">
                            <span>
                                <i class='bx bx-caret-up'></i>
                            </span>
                            <span>24% last month</span>
                        </span>
                    </span>
                    <div class="pie-chart-tiktok"></div>
                </div>
            </div>

            <!--Survey Balance-->
            <div class="card mx-3 mt-3 p-4 pb-2 survey">
                <div class="d-flex justify-content-between">
                    <span>
                        <span class="fw-semibold d-block fs-5">Survey Balance</span>
                        <span class="fs-3 fw-semibold d-block">RWF 0.00</span>
                        <span class="d-block">
                            <span>
                                <i class='bx bx-caret-up'></i>
                            </span>
                            <span>24% last month</span>
                        </span>
                    </span>
                    <div class="pie-chart-survey"></div>
                </div>
            </div>
            <!--Ads Click Balance-->
            <div class="card mx-3 mt-3 p-4 pb-2 ads">
                <div class="d-flex justify-content-between">
                    <span>
                        <span class="fw-semibold d-block fs-5">Ads Click Balance</span>
                        <span class="fs-3 fw-semibold d-block">RWF 0.00</span>
                        <span class="d-block">
                            <span>
                                <i class='bx bx-caret-up'></i>
                            </span>
                            <span>24% last month</span>
                        </span>
                    </span>
                    <div class="pie-chart-ads"></div>
                </div>
            </div>

            <!--Whatsapp Group Join-->
            <div class="card mt-3 mx-3 p-4 pb-2">
                <p class="fw-semibold fs-5">WhatsApp Group</p>
                <p>Click on Link below to join the group</p>
                <button type="button" class="btn btn-warning text-white">JOIN WHATSAPP GROUP</button>
            </div>

            <!--Invitation Link-->
            <div class="card mt-3 mx-3 p-4 pb-2 invite-link">
                <p class="fs-5 fw-semibold">Your Unique Invite URL</p>

                <input type="text" style="background: rgb(147, 147, 215);" class="invite-url" readonly>
                <button type="button" class="btn btn-copy text-white mx-3 mt-1">Copy</button>
            </div>
        </div>
    </main>
    <footer class="mt-5">
        <p class="text-center">Copyright &copy; 2024 legitearn. All rights reserved</p>
    </footer>
    <script src="dashboard.js"></script>
</body>

</html>
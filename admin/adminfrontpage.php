<?php
@session_start();

?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Startech Admin</title>
	<link rel="stylesheet" type="text/css" href="../assets/webfonts/all.min.css">
	<link rel="stylesheet" href="https://fonts.maateen.me/adorsho-lipi/font.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/css/uikit.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/admin-style.css">
</head>
    <body>
        <div class="front-page-top-layer">
            <div class="row">
                <div class="col-lg-9">
                    <h4>INCOME AND EXPENSES SUMMARY</h4>
                </div>
                <div class="col-lg-3">
                    <div class="container">
                        <div class="clock-container">
                            <div>
                                <span style="margin-left: 28%; margin-bottom: 10px; color: green; font-size: 22px; border-bottom: 1px solid;">Time Now<br></span> 
                            </div>
                            <style>
                                .clock{
                                    display: flex;
                                    flex-direction: row;
                                    justify-content: space-between;
                                }
                                .clock p{
                                    color: red;
                                }
                            </style>
                            <div class="clock">
                                <div style="display: flex;">
                                    <p id="hour" style="font-size: 18px;">00</p><span style="margin-top: 2px;">&nbsp;H</span>
                                </div>
                                <div style="display: flex;">
                                    <p id="minute" style="font-size: 15px; margin-top: 3px;">00</p><span style="margin-top: 2px;">&nbsp;m</span>
                                </div>
                                <div style="display: flex;">
                                    <p id="second" style="font-size: 15px; margin-top: 3px;">00</p><span style="margin-top: 2px;">&nbsp;s</span>
                                </div>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="progress-bar" id="progress"></div>
                        </div>
                </div>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-4 ml-0 mt-2">
                    <div class="check">
                        <div class="myCheck"></div>
                        <p>Total Income</p>
                    </div>
                    <h2>$ 00</h2>
                </div>
                <div class="col-4 ml-0 mt-2">
                    <div class="check">
                        <div class="myCheck"></div>
                        <p>Total Expense</p>
                    </div>
                    <h2>$ 00</h2>
                </div>
            </div>
        </div>
        <div class="front-page-top-layer-2">
            <div class="row mb-2">
                <span class="summary-span">
                    <h4>REPORT SUMMARY</h4>
                    <p class="text-muted">Updated Report &nbsp;<i class="fas fa-users"></i></p>
                </span>
                <div class="col-12">
                    <ul class="summary-icons">
                        <li class="summary-icon">
                            <div><span>Deposit</span><br>
                                <small>৳ 00</small><br>
                                <a href="#">0 Reports</a>
                            </div>
                            <div><div class="inner-card-icon bg-success"><i class="fa fa-rocket" aria-hidden="true"></i></div></div>
                        </li>
                        <li class="summary-icon">
                            <div><span>Saving</span><br>
                                <small>৳ 00</small><br>
                                <a href="#">0 Reports</a>
                            </div>
                            <div><div class="inner-card-icon bg-primary"><i class="fas fa-briefcase"></i></div></div>
                        </li>
                        <li class="summary-icon">
                            <div><span>Income</span><br>
                                <small>৳ 00</small><br>
                                <a href="#">0 Reports</a>
                            </div>
                            <div><div class="inner-card-icon bg-warning"><i class="fas fa-globe"></i></div></div>
                        </li>
                        <li class="summary-icon">
                            <div><span>Expense</span><br>
                                <small>৳ 00</small><br>
                                <a href="#">0 Reports</a>
                            </div>
                            <div><div class="inner-card-icon bg-danger mr-2"><i class="far fa-gem"></i></div></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="front-page-top-layer-3">
            <h4>Quick Status</h4>
            <div class="row">
                <div class="col-6">
                    <div>
                        <div class="layer-3-icon">
                            <i class="fab fa-google-wallet"></i>
                        </div>
                    </div>
                    <div>
                        <p>My Wallet</p>
                        <span>$ 0.00</span>
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <div class="layer-3-icon">
                            <i class="fas fa-shopping-basket"></i>
                        </div>
                    </div>
                    <div>
                        <p>Revenue</p>
                        <span>$ 0.00</span>
                    </div>
                </div>
            </div>
        </div>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/js/uikit.min.js"></script>
        <script src="../assets/js/jquery-3.5.1.slim.min.js"></script>
        <script src="../assets/js/bootstrap.bundle.min.js"></script>
        <script src="./js/admin.js"></script>
        <script>
            const hour = document.getElementById("hour");
            const minute = document.getElementById("minute");
            const second = document.getElementById("second");

            function myClock(){
                let date = new Date();
                let hr = date.getHours();
                let min = date.getMinutes();
                let sec = date.getSeconds();

                hour.textContent = hr;
                minute.textContent = min;
                second.textContent = sec;
            }

            setInterval(myClock, 1000)

        </script>
    </body>
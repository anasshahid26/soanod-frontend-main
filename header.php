<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="author" content="">
    <!-- google verify code if any -->
    <?php if (!empty($settingData[0]['google_verify']) && (strpos($settingData[0]['google_verify'], '<meta') !== false)) {
        echo $settingData[0]['google_verify'];
    } ?>
    <!-- bing verify code if any -->
    <?php if (!empty($settingData[0]['bing_verify'])  && (strpos($settingData[0]['bing_verify'], '<meta') !== false)) {
        echo $settingData[0]['bing_verify'];
    } ?>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>upload/<?php echo $settingData[0]['fevicon'] ?>">
    <title><?php echo $pageTitle; ?></title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/front/bootstrap.min.css">
    <?php if ($settingData[0]['site_layout'] == 1) { ?>
        <link href="<?php echo base_url(); ?>assets/css/front/style-yellow.css" rel="stylesheet">
    <?php } else if ($settingData[0]['site_layout'] == 2) { ?>
        <link href="<?php echo base_url(); ?>assets/css/front/style-lightgreen.css" rel="stylesheet">
    <?php } else if ($settingData[0]['site_layout'] == 3) { ?>
        <link href="<?php echo base_url(); ?>assets/css/front/style-red.css" rel="stylesheet">
    <?php } else if ($settingData[0]['site_layout'] == 4) { ?>
        <link href="<?php echo base_url(); ?>assets/css/front/style-navy.css" rel="stylesheet">
    <?php } else if ($settingData[0]['site_layout'] == 5) { ?>
        <link href="<?php echo base_url(); ?>assets/css/front/style-cyan.css" rel="stylesheet">
    <?php } else if ($settingData[0]['site_layout'] == 6) { ?>
        <link href="<?php echo base_url(); ?>assets/css/front/style-white-cyan.css" rel="stylesheet">
    <?php } else if ($settingData[0]['site_layout'] == 7) { ?>
        <link href="<?php echo base_url(); ?>assets/css/front/style-white-blue.css" rel="stylesheet">
    <?php } else if ($settingData[0]['site_layout'] == 8) { ?>
        <link href="<?php echo base_url(); ?>assets/css/front/style-white-green.css" rel="stylesheet">
    <?php } else if ($settingData[0]['site_layout'] == 9) { ?>
        <link href="<?php echo base_url(); ?>assets/css/front/style-white-red.css" rel="stylesheet">
    <?php } else { ?>
        <link href="<?php echo base_url(); ?>assets/css/front/style-white-black.css" rel="stylesheet">
    <?php }




    function my_number_format($n, $precision = 2)
    {
        if ($n < 100000) {
            // Default
            $n_format = number_format($n);
        } else if ($n < 9000000) {
            // Thousand
            $n_format = number_format($n / 1000, $precision, '.', '') . 'K';
        } else if ($n < 900000000) {
            // Million
            $n_format = number_format($n / 1000000, $precision) . 'M';
        } else if ($n < 900000000000) {
            // Billion
            $n_format = number_format($n / 1000000000, $precision) . 'B';
        } else {
            // Trillion
            $n_format = number_format($n / 1000000000000, $precision) . 'T';
        }
        return $n_format;
    }


    ?>
    <!--<script  type="text/javascript" src="<?php echo base_url(); ?>assets/js/front/jquery-1.12.4.js" > </script>
    -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <style>
        .color:hover {
            background-color: blue !important;
        }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- google analytic code if any -->
    <?php if (!empty($settingData[0]['google_analytic']) && (strpos($settingData[0]['google_analytic'], '<script>') !== false) && (strpos($settingData[0]['google_analytic'], '</script>') !== false)) {
        echo $settingData[0]['google_analytic'];
    } ?>
    <?php if (!empty($settingData[0]['custom_css'])) {
        echo '<style>' . $settingData[0]['custom_css'] . '</style>';
    } ?>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="hero.css">
</head>

<body class="">
    <?php if ($settingData[0]['header_top'] == 1) { ?>
        <div class="preheader">
            <div class="container">
                <div class="row ptop">
                <div class="section-1">
                    <div>
                        <span>Market Cap: </span>
                        <small>
                            <?php echo strtok($convertSymbol, " "); ?><?php echo my_number_format($totalCap / $convertRate); ?>
                        </small>
                        <!--<div class="decrement"> Show this div conditionally / depending on the increment or decrement </div>-->
                        <!--<i id="decrement"> Show the increment or decrement in here </i>-->
                    </div>
                    <div>
                        <span>24h Volume: </span>
                        <small>
                            <?php echo strtok($convertSymbol, " "); ?><?php echo my_number_format($totalvol / $convertRate); ?>
                        </small>
                        <!--
                            ---- Conditional Rendering ----
                            <div class="increment"> Show this div (Pointy arrow) on the increment or decrement </div>
                            <i id="increment"> Show the increment or decrement in here </i>
                        -->
                    </div>
                    <div>
                        <span>Market Cap: </span>
                        <small>LINK </small>
                    </div>
                    <div>
                        <span>Cryptos: </span>
                        <small>LINK </small>
                    </div>
                </div>

                        <ul style="padding-left:0px;">
                            <li><small class="text-top-small">
                                <span>BTC Market Cap</span> <?php echo strtok($convertSymbol, " "); ?>
                                <?php echo my_number_format($btcCap / $convertRate); ?></small>
                            </li>
                            <li><small class="text-top-small">
                                <span>BTC Dominance</span> <?php echo my_number_format($btcCap / $totalCap * 100, 1); ?>%</small>
                            </li>

                        </ul>
                    
                    <span style="font-weight:bold;font-size:16px;">
                        <select lable="ratechange" class="form-control js-example-basic-price" id="from_fiat">

                            <?php

                            foreach ($rateData->data as $res) {
                                if ($res->symbol == 'CAD')
                                    $res->currencySymbol = 'CA$';
                                if ($res->symbol == 'NZD')
                                    $res->currencySymbol = 'NZ$';
                                if ($res->symbol == 'AUD')
                                    $res->currencySymbol = 'A$';
                                if ($res->symbol == 'HKD')
                                    $res->currencySymbol = 'HK$';
                                if ($res->symbol == 'SGD')
                                    $res->currencySymbol = 'S$';
                                if ($res->symbol == 'CHF')
                                    $res->currencySymbol = '';
                                if (empty($res->currencySymbol))
                                    $res->currencySymbol = $res->symbol;
                            ?>

                                <option value="<?php echo $res->rateUsd; ?>" <?php if ($res->currencySymbol . ' ' . $res->symbol == $convertSymbol) echo "Selected"; ?>><?php echo $res->currencySymbol; ?> <?php echo $res->symbol; ?></option>
                            <?php } ?>
                        </select>

                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('.js-example-basic-price').select2();
                            });
                        </script>
                        <script>
                            $(document).ready(function() {
                                $("#from_fiat").change(function() {
                                    var rate = $("#from_fiat").val();
                                    var symbol = $(this).find('option:selected').text();
                                    $.ajax({
                                        url: '<?= base_url(); ?>home/set_rate',
                                        type: 'POST',
                                        data: {
                                            rate: rate,
                                            symbol: symbol
                                        },
                                        success: function() {
                                            location.reload();
                                        }
                                    });
                                });
                            });
                        </script>
                    </span>
                    <span style="margin-top:2px; margin-left:10px; margin-right:15px;">
                        <a onclick="myFunction()" id="Knop">
                            <!-- <div id="toggleknop"><i style="font-weight:bold;font-size:16px;" class="fa fa-moon-o"></i></div> -->
                        </a>
                        <script>
                            // Function to toggle dark mode
                            function toggleDarkMode() {
                                var element = document.body;
                                var toggleButton = document.getElementById('toggleknop');

                                element.classList.toggle("dark-mode");

                                // Update toggle button icon
                                toggleButton.innerHTML = element.classList.contains('dark-mode') ?
                                    '<i style="font-weight:bold;font-size:16px;" class="fa fa-sun-o"></i>' :
                                    '<i style="font-weight:bold;font-size:16px;" class="fa fa-moon-o"></i>';

                                // Save mode preference to localStorage
                                if (element.classList.contains('dark-mode')) {
                                    localStorage.setItem('mode', 'dark-mode');
                                } else {
                                    localStorage.setItem('mode', '');
                                }
                            }

                            // Check localStorage for mode preference and apply it
                            document.addEventListener('DOMContentLoaded', function() {
                                var mode = localStorage.getItem('mode');

                                // Set dark mode by default if mode preference is not available
                                if (!mode || mode === 'dark-mode') {
                                    toggleDarkMode();
                                }

                                // Add click event listener to toggle button
                                document.getElementById('Knop').addEventListener('click', toggleDarkMode);
                            });
                        </script>

                    </span>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg h2-nav">
                <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>upload/<?php echo $settingData[0]['logo']  ?>" alt="logo" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header1" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="ti-menu">&#9776;</span>
                </button>
                <div class="collapse navbar-collapse" id="header1">
                    <ul class="navbar-nav ml-auto">
                        <!-- 	<li class="nav-item active"><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li> -->

                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>exchanges">Exchanges</a></li>

                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>trending-coins">Trending</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>top-gainer-coins">Gainers</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>top-loser-coins">Losers</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>calculator">Calculator</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>news">News</a></li> -->
                        <li class="nav-item last color"><a target='_blank' class="btn btn-outline-info color" href="<?php echo $settingData[0]['buy_sell'] ?>">BUY / SELL</a></li>

                    </ul>
                </div>
            </nav>
        </div>

    </div>
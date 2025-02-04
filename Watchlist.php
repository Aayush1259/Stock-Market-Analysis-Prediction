<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FinFlexx</title>
    <link rel="stylesheet" href="./css/style.css" />
    <!-- Boxicons CSS -->
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="./js/script.js" defer></script>
    <link type="image" rel="icon" href="./img/finflexx.png" />

    <style>
        .box {
            background-color: #0e1117;
            display: flex;
            align-items: center;
            justify-content: center;
            padding-left: 150px;
            padding-bottom: 30px;
        }

        /* Style for the table */
        table {
            width: 80%;
            padding-left: 95px;
        }

        /* Style for table cells */
        td {
            text-align: center;
            padding-bottom: 100px;
            padding-left: 40px;
            padding-right: 40px;
        }

        /* Style for images */
        img {
            width: 100px;
            height: 100px;
            background-color: #0e1117;
            cursor: pointer;
        }

        .head {
            font-size: 40px;
            color: #fff;
            font-weight: 1000;
            padding-left: 700px;
            padding-bottom: 55px;
        }

        input.checkbox {
            cursor: pointer;
            width: 15px;
            height: 15px;
            color: #0e1117;
        }

        .submit {
            position: absolute;
            top: 1725px;
            left: 740px;
            border-radius: 20px;
            font-size: 20px;
            background-color: #0e1117;
            border: 2px solid #fff;
            cursor: pointer;
            color: #fff;
            font-weight: 650;
            padding: 10px 10px 10px 10px;
        }

        .avatar {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            background-color: #02a350;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 28px;
            font-weight: 500;
            color: #fff;
            margin-right: 5px;
        }

        .random-color-box {
            width: 200px;
            height: 200px;
            background-color: #00c760;
        }

        .submit2 {
            position: absolute;
            left: 700px;
            border-radius: 20px;
            font-size: 20px;
            background-color: #0e1117;
            border: 2px solid #fff;
            cursor: pointer;
            color: #fff;
            font-weight: 650;
            padding: 10px 10px 10px 10px;
            text-decoration: none;
        }
    </style>

</head>

<body>
    <nav class="sidebar locked">
        <div class="logo_items flex">
            <span class="nav_image">
                <img src="./img/finflexx.png" alt="logo_img" />
            </span>
            <span class="logo_name">FinFlexx</span>
            <i class="bx bx-lock-alt" id="lock-icon" title="Unlock Sidebar"></i>
            <i class="bx bx-x" id="sidebar-close"></i>
        </div>
        <div class="menu_container">
            <div class="menu_items">
                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Dashboard</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="./index2.html" class="link flex">
                            <i class="bx bx-home-alt"></i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="./news2.html" class="link flex">
                            <i class='bx bx-news'></i>
                            <span>News & Blogs</span>
                        </a>
                    </li>
                </ul>
                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Stocks</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="#" class="link flex">
                            <i class='bx bx-heart'></i>
                            <span>Watchlists</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="./explore2.html" class="link flex">
                            <i class='bx bx-candles'></i>
                            <span>Explore Stocks</span>
                        </a>
                    </li>
                </ul>

                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Services</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="./predict.html" class="link flex">
                            <i class='bx bx-rupee'></i>
                            <span>Price Prediction</span>
                        </a>
                    </li>

                </ul>
                <ul class="menu_item">
                    <div class="menu_title flex">
                        <span class="title">Account</span>
                        <span class="line"></span>
                    </div>
                    <li class="item">
                        <a href="./details.php" class="link flex">
                            <i class='bx bxs-user-detail'></i>
                            <span>Details</span>
                        </a>
                    </li>
                    <li class="item">
                        <a href="./index.html" class="link flex">
                            <i class='bx bxs-exit'></i>
                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="sidebar_profile flex">
                <span class="nav_image1">
                    <div id="avatarContainer"></div>
                </span>
                <div class="data_text">
                    <span class="name" id="username"></span>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <nav class="navbar">
        <i class="bx bx-menu" id="sidebar-open"></i>
        <div class="wrapper">
            <div class="search-input">
                <a href="" target="_blank" hidden></a>
                <input type="text" placeholder="Search for Stocks..." class="bar search_box">
                <div class="autocom-box">
                </div>
                <div class="icon"><i class="fas fa-search"></i></div>
            </div>
        </div>
    </nav>

    <Section id="welcome_Sec">

        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [{
                            "description": "",
                            "proName": "NASDAQ:TSLA"
                        },
                        {
                            "description": "",
                            "proName": "NASDAQ:AAPL"
                        },
                        {
                            "description": "",
                            "proName": "NASDAQ:AMZN"
                        },
                        {
                            "description": "",
                            "proName": "NASDAQ:GOOGL"
                        },
                        {
                            "description": "",
                            "proName": "NASDAQ:MSFT"
                        }
                    ],
                    "showSymbolLogo": true,
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "colorTheme": "dark",
                    "locale": "en"
                }
            </script>
        </div>
        <!-- TradingView Widget END -->
    </Section>

    <br><br><br>

    <h1 class="head">Your Watchlist</h1><br>

    <html>

    <head>

        <style>
            table {
                width: 50%;
                border-collapse: collapse;
                margin-left: 450px;
                color: #fff;
            }

            table,
            th,
            td {
                border: 3px solid #fff;
                padding: 8px;
                text-align: center;
            }

            th {
                background-color: transparent;
            }

            .message {
                margin: 0 auto;
                text-align: center;
                font-size: 20px;
                color: #00c760;
                padding-left: 170px;
            }

            input[type="checkbox"] {
                cursor: pointer;
            }
        </style>
    </head>

    <body>

        <?php
        require './vendor/autoload.php';

        use MongoDB\Client;

        $uri = getenv('MONGODB_URI');

        $client = new Client($uri);
        $db = $client->loginpage;
        $loginCollection = $db->login;
        $watchlistCollection = $db->watchlist;

        $user = $loginCollection->findOne([], ['sort' => ['_id' => -1]]);

        if ($user) {
            $last_logged_in_user = $user["name"];

            $stock_names_full_names = array(
                "AAPL" => "Apple Inc.",
                "GOOGL" => "Google Inc.",
                "MSFT" => "Microsoft Corporation",
                "TSLA" => "Tesla Inc.",
                "AMZN" => "Amazon Inc.",
                "RELIANCE.NS" => "Reliance Industries Ltd.",
                "TCS.NS" => "Tata Consulting Services",
                "INFY.NS" => "Infosys Ltd.",
                "SBIN.NS" => "State Bank of India",
                "HDFCBANK.NS" => "HDFC Bank Ltd."
            );

            $watchlist = $watchlistCollection->find(['name' => $last_logged_in_user]);

            if ($watchlist->isDead() == false) {
                echo "<form method='post' action='./php/remove_from_watchlist.php'>";
                echo "<table>
        <tr>
            <th>S. No.</th>
            <th>Logo</th>
            <th>Symbol</th>
            <th>Stock Name</th>
            <th>Select</th>
        </tr>";

                $serial_number = 1;

                foreach ($watchlist as $row_watchlist) {
                    $full_name = isset($stock_names_full_names[$row_watchlist["stock_name"]]) ? $stock_names_full_names[$row_watchlist["stock_name"]] : "Unknown";

                    echo "<tr>";
                    echo "<td>" . $serial_number . "</td>";
                    $image_path = "HOME/" . strtolower($row_watchlist["stock_name"]) . ".png";
                    echo "<td><img src='$image_path' alt='$full_name'></td>";
                    echo "<td>" . $row_watchlist["stock_name"] . "</td>";
                    echo "<td>" . $full_name . "</td>";
                    echo "<td><input type='checkbox' name='selected[]' value='" . $row_watchlist["stock_name"] . "'></td>";

                    echo "</tr>";

                    $serial_number++;
                }
                echo "</table>";
                echo "<br><br>";
                echo "<input type='submit' value='Remove from Watchlist' class='submit2'>";
                echo "</form>";
                echo "<br><br>";
                echo "<br><br>";
                echo "<br><br>";
                echo "<br><br>";
            } else {
                echo "<p class='message'>There are currently no Stocks in your Watchlist!</p>";
                echo "<br>";
                echo "<p class='message'>Please Redirect to the Home Page and Add Stocks to your Watchlist.</p>";
                echo "<br><br>";
                echo "<br><br>";
                echo "<br><br>";
                echo "<br><br>";
                echo "<br><br>";
                echo "<br><br>";
            }
        } else {
            echo "<p class='message'>No users logged in.</p>";
        }
        ?>

    </body>

    </html>

    <footer>
        <p class="copyright">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright
            ©
            2024 FinFlexx</p>
    </footer>

    <script>
        function formatUserName(name) {
            var words = name.toLowerCase().split(' ');
            for (var i = 0; i < words.length; i++) {
                words[i] = words[i].charAt(0).toUpperCase() + words[i].slice(1);
            }
            return words.join(' ');
        }

        function fetchUserInfo() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', './php/get_user_info.php', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    var userInfo = JSON.parse(xhr.responseText);
                    var formattedName = formatUserName(userInfo.name);
                    document.getElementById('username').innerText = formattedName;
                    var avatar = document.createElement('div');
                    avatar.className = 'avatar';
                    avatar.innerText = formattedName.charAt(0).toUpperCase();
                    document.getElementById('avatarContainer').appendChild(avatar);
                }
            };
            xhr.send();
        }

        window.onload = fetchUserInfo;
    </script>

    <script src="./js/search_script2.js"></script>

</body>

</html>

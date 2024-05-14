<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
    <title>萬年曆作業</title>
    <style>
        /* 以下為框架樣式 */
        * {
            box-sizing: border-box;
        }

        body {
            background-image: url('https://images.unsplash.com/photo-1547044479-59ce6c0a784a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
        }

        .container {
            width: 60%;
            margin: auto;
            margin-top: 15px;
            border: 1px solid transparent;
            border-radius: 60px;
            padding: 60px;
            background-color: #FEFEFE;
            box-shadow: 9px 11px 11px 3px black;
            background-image: url('https://i.pinimg.com/564x/1b/ff/98/1bff98f304f47b83f0a5c96f48e2f443.jpg');
            background-size: cover;
        }


        .row {
            width: 95%;
            margin: auto;
            position: relative;
            display: flex;
            justify-content: space-between;
            /* background-color: lightcoral */
        }

        .leftbox {
            margin: 0;
            border-radius: 60px;
            box-shadow: 3px 4px 12px 0px #7A7567;
            background: url(https://picsum.photos/600/500?random=1)no-repeat center center;
            background-size: cover;
            width: 47%;
            height: 600px;
            /* background-color: aqua; */

        }



        .rightbox {
            width: 47%;
            height: 600px;
            /* background-color: lightgoldenrodyellow; */

        }

        .rightbox-top {
            height: 85%;
            /* background-color: aqua; */
            margin: auto;
        }

        .calendar {
            width: 90;
            padding-left: 30px;
            padding-top: 30px;
            text-align: center;
            /* background-color: yellowgreen; */

        }

        .calendar-top {
            display: flex;
            justify-content: space-between;
            /* background-color: pink; */
            padding-top: 50px;
            padding-bottom: 20px;
        }

        .nav1 {
            /* background-color: yellow; */
            text-align: left;
        }

        .nav2 {
            /* background-color: red; */
            /* font-family: 'Itim', cursive; */
            font-family: 'PT Serif', serif;
            font-weight: 600;
            text-align: center;
            font-size: 24px;
        }

        .nav3 {
            /* background-color: blue; */
            text-align: right;
        }

        .rightbox-bottom {
            height: 15%;
            /* background-color: pink */
        }

        /* 以下為萬年曆CSS */
        .block-table {
            width: 380px;
            display: flex;
            flex-wrap: wrap;
        }

        .item {
            margin-left: -1px;
            margin-top: -1px;
            display: inline-block;
            width: 50px;
            height: 50px;
            border: 1px solid gray;
            /* position: relative; */
            transition: all 0.3s;
            background: white;
        }

        .item-header {
            margin-left: -1px;
            margin-top: -1px;
            display: inline-block;
            width: 50px;
            height: 25px;
            /* border: 1px solid black; */
            text-align: center;
            background-color: balck;
            color: black;
            font-weight: 500;
            font-size: 18px;
        }

        .item:hover {
            background: yellow;
            transform: scale(1.3);
            font-weight: bold;
            color: blue;
            transition: all 0.3s;
            z-index: 10;

        }

        .holiday {
            background: pink;
        }

        .othermday {
            font-weight: bold;
            color: gray;
            opacity: 0.3;
        }
    </style>
</head>

<body>
    <!-- <h1>萬年曆</h1>
  請在這裹撰寫你的萬年曆程式碼 -->

    <br>
    <div class="container">
        <div class="row">
            <div class="leftbox">
            </div>
            <div class="rightbox">
                <div class="rightbox-top">

                    <?php
                    $month = $_GET['month'] ?? date("m");
                    $year = $_GET['year'] ?? date("Y");
                    $fmonth = date("F", strtotime("$year-$month"));
                    $firstDay = strtotime(date("$year-$month-1"));
                    $firstWeekStartDay = date("w", $firstDay);
                    $days = date("t", $firstDay);
                    $lastDay = strtotime(date("Y-$month-$days"));
                    $festival = [
                        "2024" => [
                            "1" => [
                                "1" => "元旦",
                            ],
                            "2" => [
                                "28" => "228紀念日",
                            ],
                            "4" => [
                                "4" => "清明節",
                            ],
                            "5" => [
                                "1" => "勞動節",
                            ],
                            "6" => [
                                "8" => "端午節",
                                "9" => "端午節",
                                "10" => "端午節",
                            ],
                            "9" => [
                                "9" => "中秋節",
                            ],
                            "10" => [
                                "10" => "國慶日",
                            ],
                            "12" => [
                                "25" => "聖誕節",
                                "31" => "跨年夜",
                            ],
                            // 其他月份的節日資訊
                        ],
                        "2025" => [
                            "1" => [
                                "1" => "元旦",
                            ],
                            "2" => [
                                "28" => "228紀念日",
                            ],
                            "4" => [
                                "4" => "清明節",
                            ],
                            "5" => [
                                "1" => "勞動節",
                            ],
                            "6" => [
                                "14" => "端午節",
                                "15" => "端午節",
                                "16" => "端午節",
                            ],
                            "9" => [
                                "8" => "中秋節",
                            ],
                            "10" => [
                                "10" => "國慶日",
                            ],
                            "12" => [
                                "25" => "聖誕節",
                                "31" => "跨年夜",
                            ],
                        ],
                    ];
                    $days = [];
                    for ($i = 0; $i < 42; $i++) {
                        $diff = $i - $firstWeekStartDay;
                        $days[] = date("Y-m-d", strtotime("$diff days", $firstDay));
                    }

                    if ($month - 1 < 1) {
                        $prev = 12;
                        $prev_year = $year - 1;
                    } else {
                        $prev = $month - 1;
                        $prev_year = $year;
                    }

                    if ($month + 1 > 12) {
                        $next = 1;
                        $next_year = $year + 1;

                    } else {
                        $next = $month + 1;
                        $next_year = $year;
                    }
                    ?>
                    <div class="calendar-top">
                        <div class="nav1">
                            <a href="test01.php?year=<?= $prev_year; ?>&month=<?= $prev; ?>">
                                <img src="./images/left_submit_icon.png" alt="Previous" />
                            </a>
                        </div>
                        <div class="nav2">
                            <?= $fmonth; ?>-<?= $year; ?>
                        </div>
                        <div class="nav3">
                            <a href="test01.php?year=<?= $next_year; ?>&month=<?= $next; ?>">
                                <img src="./images/right_submit_icon.png" alt="Previous" />
                            </a>
                        </div>
                    </div>
                    <div class="calendar">
                        <?php
                        echo "<div class='block-table'>";
                        echo "<div class='item-header' style='color: red;'>Sun.</div>";
                        echo "<div class='item-header'>Mon.</div>";
                        echo "<div class='item-header'>Tue.</div>";
                        echo "<div class='item-header'>Wed.</div>";
                        echo "<div class='item-header'>Thu.</div>";
                        echo "<div class='item-header'>Fri.</div>";
                        echo "<div class='item-header' style='color: red;'>Sat.</div>";
                        foreach ($days as $day) {
                            $format = explode("-", $day)[2];
                            $w = date("w", strtotime($day));
                            $m = date("m", strtotime($day));
                            $Y = date("Y", strtotime($day));
                            $n = date("n", strtotime($firstDay));
                            $isfestival = false;
                            $daymonth = explode("-", $day)[1];
                            $dayyear = explode("-", $day)[0];
                            if ($month != $m) {
                                echo "<div class='item othermday'>$format</div>";
                            }
                            
                            foreach ($festival[$Y] as $festivalMonth => $festivalDates) {
                                foreach ($festivalDates as $festivalDate => $festivalName) {
                                    if ($festivalDate == $format && $month == $daymonth && $year == $Y) {
                                        echo "<div class='item holiday'>$format $festivalName</div>";
                                        $isfestival = true;
                                    }
                                }
                            }
                            if (!$isfestival) {
                                if ($w == 0 || $w == 6) {
                                    echo "<div class='item holiday'>$format</div>";
                                } else {
                                    echo "<div class='item'>";
                                    echo "<div class='date'>$format</div>";
                                    echo "</div>";
                                }
                            }
                        }
                        echo "</div>";
                        ?>
                    </div>
                </div>
                <div class="rightbox-bottom">
                </div>
            </div>
        </div>
    </div>
</body>

</html>
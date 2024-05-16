<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// 定義節日資訊
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

// 指定要列印的年份
$year = "2024";

// 檢查是否有該年份的節日資訊
if (array_key_exists($year, $festival)) {
    echo "以下是{$year}年的節日：\n";
    
    // 遍歷該年份的所有月份
    foreach ($festival[$year] as $month => $days) {
        // 遍歷該月份的所有日期
        foreach ($days as $day => $holiday) {
            // echo "{$year}年{$month}月{$day}日：{$holiday}\n <br>";
            // echo "{$holiday}";
            // echo "<br>";
            var_dump($days);
            echo "<br>";
        }
        // echo "{$holiday}";
        // print_r($day) ;
        // echo "<br>";
        // var_dump($days);
        // echo "<br>";
    }
} else {
    echo "沒有{$year}年的節日資訊。\n <br>";
}

?>
<hr>

<?php

// 定義節日資訊
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

// 遍歷所有年份的節日資訊
foreach ($festival as $year => $months) {
    echo "以下是{$year}年的節日：\n <br>";
    // 遍歷該年份的所有月份
    foreach ($months as $month => $days) {
        // 遍歷該月份的所有日期
        foreach ($days as $day => $holiday) {
            echo "{$year}年{$month}月{$day}日：{$holiday}\n <br>";
        }
    }
    echo "\n";
}

?>

</body>
</html>
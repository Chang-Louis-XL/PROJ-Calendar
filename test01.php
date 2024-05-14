<?php
$festivalFor2025 = [
    "1" => [
        "1"=> "元旦",
    ],
    "2" => [
        "28"=> "228紀念日",
    ],
    "4" => [
        "4"=> "清明節",
    ],
    "5" => [
        "1"=> "勞動節",
    ],
    "6"  =>[
        "14"=> "端午節",  
        "15"=> "端午節",   
        "16"=> "端午節", 
    ],
    "9" => [
        "8" => "中秋節"
    ],
    "10" => [
        "10" => "國慶日"
    ],
    "12" => [
        "25" => "聖誕節",
        "31" => "跨年夜"
    ],
];

// 2025 年台灣各月份節日
$festivals = [];

// 一年的月份
for ($month = 1; $month <= 12; $month++) {
    // 如果這個月有節日，加入到結果陣列中
    if (isset($festivalFor2025[$month])) {
        // 這個月的節日陣列
        $monthFestivals = $festivalFor2025[$month];
        // 將節日加入到結果陣列中
        foreach ($monthFestivals as $day => $festival) {
            $festivals[] = date("Y-m-d", strtotime("2025-$month-$day")) . ": $festival";
        }
    }
}

// 輸出結果
foreach ($festivals as $festival) {
    echo $festival . PHP_EOL;
}

?>
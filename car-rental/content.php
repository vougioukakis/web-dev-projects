<?php
$content = [
    "Heraklion" => [
        [
            "model" => "Toyota Aygo",
            "image" => "aygo.jpg",
            "logo" => "hertz.png",
            "price" => 15.60,
            "specifications" => [ "4 seats", "5 doors", "Air conditioning", "Manual transmission" ]
        ],
        [
            "model" => "Renault Grand Scenic",
            "image" => "grand_scenic.jpg",
            "logo" => "europcar.png",
            "price" => 133.99,
            "specifications" => [ "7 seats", "5 doors", "Air conditioning", "Automatic transmission" ]
        ],
    ],
    "Chania" => [
        [
            "model" => "Nissan Qashqai",
            "image" => "qashqai.jpg",
            "logo" => "avis.png",
            "price" => 30.47,
            "specifications" => [ "5 seats", "5 doors", "Air conditioning", "Manual transmission" ]
        ],

        [
            "model" => "Mercedes C Class",
            "image" => "mercedes.jpg",
            "logo" => "europcar.png",
            "price" => 185.05,
            "specifications" => [ "4 seats", "2 doors", "Air conditioning", "Automatic transmission" ]
        ],
        [
            "model" => "Volvo XC90",
            "image" => "xc90.jpg",
            "logo" => "hertz.png",
            "price" => 262.35,
            "specifications" => [ "5 seats", "5 doors", "Air conditioning", "Automatic transmission" ]
        ]
    ]
];


function showCars($dest)
{
	
	global $content;
	print'<div class="page-content">';
	for ($x = 0; $x < count($content[$dest]); $x++)
	{
		$price = $content[$dest][$x]['price'];
		$img = $content[$dest][$x]['image'];
		$model = $content[$dest][$x]['model'];
		$logo = $content[$dest][$x]['logo'];
		$specs = $content[$dest][$x]['specifications'];
		
		print'
			<div class="car-div">
				<div class="car-div-left">
					<img src="images/'.$img.'" class="car-img">
					<img src="images/'.$logo.'" class="rent-img">
				</div>
				
				<div class="car-div-mid">
					<h3 class="car-name">'.$model.'</h3>
					<ul class="car-info">
						<li>'.$specs[0].'</li>
						<li>'.$specs[1].'</li>
						<li>'.$specs[2].'</li>
						<li>'.$specs[3].'</li>
					</ul>
				</div>
				
				<div class="car-div-right">
					<p class="daily-price">Daily Price</p>
					<h2 class="price-num" id="price-num-1">'.$price.' $</h2>
					<button class="book-deal">Book deal</button>
				</div>
			</div>';
	
	}
	print'</div>';
}
?>

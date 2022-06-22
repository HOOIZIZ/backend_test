<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>test</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<?php 
$data = [
	['id' => 1,
	'FIRST_NAME' => 'Иван',
	'LAST_NAME' => 'Иванов',
	],
	['id' => 2,
	'FIRST_NAME' => 'Егор',
	'LAST_NAME' => 'Егоров',
	],
	['id' => 3,
	'FIRST_NAME' => 'Данил',
	'LAST_NAME' => 'Данилов',
	],
	['id' => 4,
	'FIRST_NAME' => 'Василий',
	'LAST_NAME' => 'Васильев',
	],
	['id' => 5,
	'FIRST_NAME' => 'Константин',
	'LAST_NAME' => 'Константинов',
	],
	['id' => 6,
	'FIRST_NAME' => 'Валерий',
	'LAST_NAME' => 'Валерьев',
	],
	['id' => 7,
	'FIRST_NAME' => 'Виталий',
	'LAST_NAME' => 'Витальев',
	],
];

$obRes = [
	'1' => [
		[
		'id' => 1,
		'color' => 1,
		],
		[
		'id' => 2,
		'color' => 2,
		],
		[
		'id' => 3,
		'color' => 3,
		],
		[
		'id' => 4,
		'color' => 0,
		],
		[
		'id' => 5,
		'color' => 1,
		],
		[
		'id' => 6,
		'color' => 2,
		],
		[
		'id' => 7,
		'color' => 0,
		],
		
	],
	'2' => [
		[
		'id' => 1,
		'color' => 2,
		],
		[
		'id' => 2,
		'color' => 3,
		],
		[
		'id' => 3,
		'color' => 1,
		],
		[
		'id' => 4,
		'color' => 0,
		],
		[
		'id' => 5,
		'color' => 0,
		],
		[
		'id' => 6,
		'color' => 2,
		],
		[
		'id' => 7,
		'color' => 0,
		],
		[
		'id' => 8,
		'color' => 2,
		],
	],
	'3' => [
		[
		'id' => 1,
		'color' => 3,
		],
		[
		'id' => 2,
		'color' => 1,
		],
		[
		'id' => 3,
		'color' => 0,
		],
		[
		'id' => 4,
		'color' => 0,
		],
	],
	'4' => [
		[
		'id' => 1,
		'color' => 0,
		],
		[
		'id' => 2,
		'color' => 3,
		],
		[
		'id' => 3,
		'color' => 3,
		],
		[
		'id' => 4,
		'color' => 0,
		],
		[
		'id' => 5,
		'color' => 2,
		],
		[
		'id' => 6,
		'color' => 1,
		],
		[
		'id' => 7,
		'color' => 0,
		],
		[
		'id' => 8,
		'color' => 2,
		],
		[
		'id' => 9,
		'color' => 1,
		],
	],
	'5' => [
		[
		'id' => 1,
		'color' => 0,
		],
		[
		'id' => 2,
		'color' => 0,
		],
		[
		'id' => 3,
		'color' => 1,
		],
		[
		'id' => 4,
		'color' => 2,
		],
		[
		'id' => 5,
		'color' => 3,
		],
		[
		'id' => 6,
		'color' => 1,
		],
		[
		'id' => 7,
		'color' => 0,
		],
		[
		'id' => 8,
		'color' => 0,
		],
	],
	'6' => [
			[
			'id' => 1,
			'color' => 2,
			],
			[
			'id' => 2,
			'color' => 1,
			],
			[
			'id' => 3,
			'color' => 1,
			],
			[
			'id' => 4,
			'color' => 1,
			],
			[
			'id' => 5,
			'color' => 2,
			],
			[
			'id' => 6,
			'color' => 3,
			],
	],
	'7' => [
			[
			'id' => 1,
			'color' => 2,
			],
			[
			'id' => 2,
			'color' => 3,
			],
			[
			'id' => 3,
			'color' => 0,
			],
			[
			'id' => 4,
			'color' => 2,
			],
			[
			'id' => 5,
			'color' => 3,
			],
			[
			'id' => 6,
			'color' => 1,
			],
			[
			'id' => 7,
			'color' => 3,
			],
			[
			'id' => 8,
			'color' => 0,
			],
			[
			'id' => 9,
			'color' => 2,
			],
			[
			'id' => 10,
			'color' => 3,
			],
			[
			'id' => 11,
			'color' => 1,
			],
	],
];

echo('<table class="table table-bordered">
<thead>
	<tr>
		<th scope="col">Пользователь</th>
		<th scope="col">Зеленый</th>
		<th scope="col">Желтый</th>
		<th scope="col">Красный</th>
		<th scope="col">Значение отсутствует</th>
		<th scope="col">Всего "клиентов"</th>
	</tr>
</thead>
<tbody>
');

for ($i = 0; $i < count($data); $i++) {
	$first = $data[$i]['FIRST_NAME'];
	$last = $data[$i]['LAST_NAME'];
	$colors = [
		0=>0,
		1=>0,
		2=>0,
		3=>0,
	];
	$count = 0; 
	for ($k = 0; $k < count($obRes[$data[$i]['id']]); $k++) {
		$colors[$obRes[$data[$i]['id']][$k]['color']] += 1;
		++$count;
	}
	echo("<tr>
	<th scope='row'>$first $last</th>
	<td>$colors[0]</td>
	<td>$colors[1]</td>
	<td>$colors[2]</td>
	<td>$colors[3]</td>
	<td>$count</td>
  </tr>");
}	
?>
</body>
</html>
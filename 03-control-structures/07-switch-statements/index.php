<?php
$dayOfWeek =array('Moan day', 'Tongue day', 'Wet dat', 'Thirst day', 'Freak day', 'Sex day');
foreach ($dayOfWeek as $day) {
    switch ($day) {
            case 'Moan day':
                $message = 'moan day  😩';
                $color = "red";
                break;

            case 'Tongue day':
                    $message = 'Tongue day 👅';
                    $color = 'orange';
                    break;

            case 'Wet day':
                $message = 'Wet day 💦';
                $color = 'blue';
                break;

            case 'Thirst day':
                $message = 'Thirst day🥤';
                $color = 'purple';
                break;

            case 'Freak day':
                $message = 'Freak day 🤪';
                $color = 'green';
                break;

            case 'Sex day':
                $message = 'Sex day 😈';
                $color = 'pink';
                break;

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>What Day Is It?</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: <?= $color ?>;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>

<body>
  <h1><?= strtoupper($message) ?></h1>
</body>

</html>
<?php
$output = null;

$ids = [100, 20, 30, 60,60,258,284];
echo array_sum($ids);
$user = ["user1", "user", "user3", "user4"];

$output = 'user3 is' . array_search("user3", $user );
$output= count($ids);

sort($ids);
sort($user);

rsort($ids);
rsort($user);

array_push($user, "user12222");

array_pop($ids);

array_shift($user);
array_unshift($user, "user12222");
$ids2 = array_slice($user, 2, 4);
var_dump($ids2);

array_splice($ids, 1, 1, -5);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <!-- Output -->
            <p class="text-xl"><?= $output ?></p>
            <h2 class=" text-xl font-semibold my-10 ">Ids Array:</h2>
            <p>
            <pre>
                <?php print_r($ids); ?>
            </pre>
            <h2 class=" text-xl font-semibold my-10 ">Users:</h2>
            <p>
            <pre>
                <?php print_r($user ); ?>
            </pre>
            </p>
            </p>
        </div>
    </div>
</body>

</html>
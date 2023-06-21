<?php
require 'db.php';
require_once __DIR__ . '/models/movie_class.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>OOP Movie</title>
</head>

<body class="bg-slate-900 text-white min-w-[1600px] max-w-screen-2xl mx-auto">

    <!-- Page title -->
    <header class="py-7">
        <h1 class="text-center font-bold text-5xl text-red-600">🍿 MOVIES</h1>
    </header>

    <!-- Main Contents -->
    <main class="flex gap-4 overflow-y-scroll w-full">

        <!-- Movie Cards -->
        <?php foreach ($movies as $film) { ?>
            <div class="border py-4 px-3 min-w-[280px] text-sm border-neutral-800">

                <!-- Movie Cover & Info -->
                <ul>
                    <?php foreach ($film as $property => $value) { ?>
                        <li class="my-1.5">
                            <?php if ($property == 'cover') { ?>

                                <!-- Movie Cover -->
                                <div class="flex justify-center mb-4">
                                    <img src="<?= $value ?>" alt="<?= str_replace(' ', '_', $film->title) ?>_cover" class="w-[250px] h-[285px] object-cover object-center">
                                </div>

                            <?php } elseif ($property != 'genres') { ?>

                                <!-- Movie Details -->
                                <strong><?= strtoupper($property) ?>: </strong>
                                <span><?= $value ?></span>

                            <?php } else { ?>

                                <!-- Movie Genres -->
                                <strong><?= strtoupper($property) ?>: </strong>
                                <span> <?= implode(', ', $film->genres) ?></span>

                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        <?php } ?>

    </main>
</body>

</html>
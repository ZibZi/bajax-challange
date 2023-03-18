<?php

$file = 'user.json';
$json = json_decode(file_get_contents($file), true);
$random = rand(0, 5);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container my-2 py-4">
        <div class="card">
            <div class="card-header">
                Clue
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                    <p>
                        <?php
                        echo $json[$random]['hint'];
                        ?>
                    </p>
                </blockquote>
            </div>
        </div>
        <form class="row mt-5" method="post" action="cek.php">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password">
            </div>
            <div class="col text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="https://docs.google.com/spreadsheets/d/17Nj4vjFhmmlJDh13GZtD-IfwgYRm9RBMedceVH8dxew/edit?usp=sharing" target="_blank" class="btn btn-success">Open Google Sheet</a>
            </div>
            <input type="hidden" name="random" value="<?php echo $random; ?>">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

</body>

</html>
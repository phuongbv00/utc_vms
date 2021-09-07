<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include_once('./core/helpers.php');
    $url = $_GET['url'] ?? 'home';
    $url = $url == 'admin' || $url == 'admin/' ? 'admin/home' : $url;
    $path = './views/' . $url . '.php';
    $layout_content = file_exists($path)
        ? render($path)
        : render('./views/404.php');
    if (str_contains($path, 'admin')) {
        include_once('./views/layouts/admin.php');
    } else if (str_contains($path, 'login')) {
        echo $layout_content;
    } else {
        include_once('./views/layouts/default.php');
    }
    ?>
</body>

</html>
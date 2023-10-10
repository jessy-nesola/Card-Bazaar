<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Project_by_DevelHOPErs">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <title>CardBazaar</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/bootstrap.min.css', 'resources\css\tiny-slider.css', 'resources/js/app.js', 'resources/js/bootstrap.bundle.min.js', 'resources/js/bootstrap.js', 'resources\js\custom.js', 'resources\js\tiny-slider.js','resources/scss/style.scss'])
    @livewireStyles
</head>

<body>
    {{ $slot }}
    @livewireScripts
</body>

</html>

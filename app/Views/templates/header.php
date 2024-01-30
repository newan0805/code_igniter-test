<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title><?= (isset($meta_title) ? $meta_title : 'Codeigniter default title') ?></title>
</head>
<body>
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-light"> -->
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
<div class="container">
        <!-- <div class="container-fluid"> -->
            <a class="navbar-brand" href="/">Ci4 Default</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/newan0805/public/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/newan0805/public/blog/post">Post</a>
                    </li>
                </ul>
            </div>
        </div>
</div>
</nav>
<div class="container">
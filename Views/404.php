<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= $base_url ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?= $seo_description ?>">
	<meta name="author" content="Omnix Technologies">
	<meta name="keywords" content="<?= $seo_keywords ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>404</title>
      <link rel="icon" type="image/x-icon" href="admin/assets/img/<?= $favicon ?>"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="auth/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="auth/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="auth/assets/css/pages/error/style-400.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES --> 
    
</head>
<body class="error404 text-center">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mr-auto mt-5 text-md-left text-center">
                <a href="index.html" class="ml-md-5">
                    <img alt="image-404" src="admin/assets/img/<?= $logo ?>" class="theme-logo">
                </a>
            </div>
        </div>
    </div>
    <div class="container-fluid error-content">
        <div class="">
            <h1 class="error-number">404</h1>
            <p class="mini-text">Ooops!</p>
            <p class="error-text mb-4 mt-1">The page you requested was not found!</p>
            <a href="" class="btn btn-primary mt-5">Go Back</a>
        </div>
    </div>    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="auth/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="auth/bootstrap/js/popper.min.js"></script>
    <script src="auth/bootstrap/js/bootstrap.min.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>
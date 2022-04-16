
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Tables</title>
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Nunito:wght@400;600&display=swap"
        rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="/assets/lib/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- linking boostrap 5 -->
    <link rel="stylesheet" href="/assets/lib/css/bootstrap.min.css">
    <!-- linking local css -->
    <link rel="stylesheet" href="/assets/css/styles.css">
    @routes
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
<div class="container">
    @inertia
</div>


 <!-- linking boostrap files -->
 <script src="/assets/lib/jquery-3.6.0.min.js"></script>
 <script src="/assets/lib/popper.min.js"></script>
 <script src="/assets/lib/js/bootstrap.min.js"></script>
</body>

</html>

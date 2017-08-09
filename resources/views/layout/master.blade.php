<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Album example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/app.css" rel="stylesheet">
  <style>#content > #right > .dose > .dosesingle,
#content > #center > .dose > .dosesingle
{display:none !important;}</style></head>

  <body>

    @include('layout.nav')
    @yield('top-header')

    <div class="container">
        <div class="row">
            
            @yield('content')
            @include('layout.sidebar')

        </div>     
    </div>  



    @include('layout.footer')
  

</body>

</html>
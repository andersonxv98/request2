<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>request 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
#card-footer {
    height: 0;
  visibility: hidden;
  opacity: 0.0;
transition: 3s
}
.card:hover #card-footer{
    opacity: 1;
    visibility: visible;
    
    }
</style>
</head>
  <body class="bg-dark">
    <header>
    <h1 class="text-white d-flex justify-content-center">Our Pricing</h1>
    </header>

    <?php include_once 'request2.php';
        $packages = [
        $pkg1 = new Package("Pick One Service","#545454", "1,999", "Monthly"),
        $pkg2 = new Package("Get It All","#e66d3d", "3,999", "Monthly"),
        $pkg3 = new Package("Creative BFF", "#3f2944",  "4,999", "Monthly"),
        $pkg4 = new Package("The Full Dingus","#684168","7,999", "Monthly"),
        ];

        echo '<div class="text-center d-flex justify-content-center" style= "display: flex; flex-wrap: wrap;">';
        foreach($packages as $pkg){
            echo '<div class="card m-1 d-flex col-lg-2">';
            echo '<div class="card-header"  style= "color: white; background-color:'.$pkg->getBgColorValues().'"><h5>'.$pkg->getTextValues().'</h5></div>';
            echo '<div class="card-body">';
            echo '<div class="row ">';
            echo '<h5 class="card-title" syle="font-weight: bolder;" >$ '.$pkg->getPriceValues().'</h5>';
            echo '</div>';
            echo '<small class="text-muted">'.$pkg->getPaymentType().'</small>';
            
            echo '</div>';
            echo '<div id= "card-footer">';
            echo '<ul class="list-group list-group-flush">';
            echo '<li class="list-group-item">text1</li>';
            echo '<li class="list-group-item">text2</li>';
            echo '<li class="list-group-item">text3</li>';
            echo '<li class="list-group-item">text4</li>';
            echo '<li class="list-group-item">text5</li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';

            
        }
        echo '</div>';
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
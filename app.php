<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <title>Tricky</title>
    
    <script type="text/javascript" src="bower_components/angular/angular.js"></script>
    <script type="text/javascript" src="app.js"></script>
    <script type="text/javascript" src="routing.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/home.css">

     <!-- social media icon -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!-- end icon -->

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Glegoo|Indie+Flower" rel="stylesheet">
    <!-- end google fonts -->

    <!-- Controllers -->

    <!-- Services -->

    <!-- Directives -->
    <script type="text/javascript" src="src/directives/navDecorator.js"></script>
    <!-- Filters -->


</head>
<body ng-controller='navController'>

            <?php  include('src/views/header/header.php')  ?>
            
            <!-- text au début-->
            <div class="text-gallery">
                <p>Discover our Gallery</p>
            </div>  


             <!-- élément de la galerie pour permettre la redirection-->
             <div class="gallery">

                <div class="card" id="">
                    <img class="card-img-top" src="https://www.hospitalitynet.org/picture/153036639.jpg?v=1308320391" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Hotels</h5>
                        <p class="card-text">You wanna pass a wonderfull journey ? Come over here and discover the best places to go !</p>
                        <a href="src/views/gallery/hotels.php" class="btn btn-primary">Learn more...</a>
                    </div>
                    <div class="card-footer">
                            <small class="text-muted">Last seen 3 mins ago</small>
                    </div>
                </div>
        
                <div class="card" >
                    <img class="card-img-top" src="http://www.detainee063.com/wp-content/uploads/2015/08/elegant-kitchen-restaurant-ideas-long-rectangle-abc-kitchen-open-table-wooden-dark-brown-ceiling-ideas-wooden-kitchen-chairs-leather-cushion-grey-large-tile-flooring.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Restaurent / Café</h5>
                        <p class="card-text">You wanna eat the best food ? Come over here and discover the best places to go !</p>
                        <a href="src/views/gallery/cafe.php" class="btn btn-primary">Learn more...</a>
                    </div>
                    <div class="card-footer">
                            <small class="text-muted">Last seen 3 mins ago</small>
                    </div>
                </div>
    
                <div class="card" id="">
                    <img class="card-img-top" src="http://www.yankodesign.com/images/design_news/2008/06/30/multikino.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Cinéma</h5>
                        <p class="card-text">You wanna watch a movie in a cinema ? Come over here and discover the best places to go !</p>
                        <a href="src/views/gallery/cinema.php" class="btn btn-primary">Learn more...</a>
                    </div>
                    <div class="card-footer">
                            <small class="text-muted">Last seen 3 mins ago</small>
                    </div>
                </div>

                <div class="card" >
                    <img class="card-img-top" src="https://d18lkz4dllo6v2.cloudfront.net/cumulus_uploads/entry/2014-10-23/Dubai%20Malls.jpg?w=660" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Shopping / Mall</h5>
                        <p class="card-text">You wanna go shopping ? Come over here and discover the best places to go !</p>
                        <a href="src/views/gallery/shopping.php" class="btn btn-primary">Learn more...</a>                        
                    </div>
                    <div class="card-footer">
                            <small class="text-muted">Last seen 3 mins ago</small>
                    </div>
                </div>
        
                <div class="card" id="">
                    <img class="card-img-top" src="https://risherco.com/wp-content/uploads/2013/05/Chase-Tower_all-photos_Page_02.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">GYM-FITNESS</h5>
                        <p class="card-text">You wanna get that shape that will make you feel better ? Come over here and discover the best places to go !</p>
                        <a href="src/views/gallery/gym.php" class="btn btn-primary">Learn more...</a>
                    </div>
                    <div class="card-footer">
                            <small class="text-muted">Last seen 3 mins ago</small>
                    </div>
                </div>       

             </div>

             <!-- footer -->
            <?php  include('src/views/footer/footer.php')  ?>
            

</body>
</html>
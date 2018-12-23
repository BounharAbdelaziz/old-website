<?php
    $bdd = new PDO('mysql:host=localhost;dbname=gallery;charset=utf8', 'root', '');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <title>Tricky</title>
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="cafe.css">

    
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js" integrity="sha256-C6CB9UYIS9UJeqinPHWTHVqh/E1uhG5Twh+Y5qFQmYg=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"> 
    <!-- social media icon -->
    
     <!-- font awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    
    <!-- google fonts -->
   
    <!-- Controllers -->

    <!-- Services -->

    <!-- Directives -->

    <!-- Filters -->


</head>
<body ng-controller='navController'>

            <?php  include('../header/header.php')  ?>
            
            <!-- text au début-->
            <div class="text-gallery">
                <p>Vos Salle de sport et bien-être</p>
            </div>  

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-2 col-lg-2 col-md-2 ">

                        <p class="text-filtre" id="Filtre">
                            <i class="fas fa-sliders-h"></i>
                            Filtre
                        </p>

                        <form action="gym.php" method="post">
                            <div class="filtre-ville ">
                                <select class="form-control " name="ville" id="ville">
                                    <option > all</option>
                                    <?php
                                        $query = "SELECT distinct ville FROM tbl_gym_fitness  ORDER BY id DESC " ;
                                        $result = $bdd->query($query);
                                        while ($row = $result->fetch()){
                                        ?>
                                            <option >  <?php echo $row['ville'] ?></option>
                                        <?php  } ?>
                                        
                                </select>
                            </div>               

                            <div class="filtre-quartier">
                                <select  class="form-control" name="quartier" id="">
                                    <option selected>Quartier</option>
                                    <option value="maarif">Maarif</option>
                                    <option value="derbSultan">Derb sultan</option>
                                </select>
                            </div>

                            <div class="filtre-note">
                                <select  class="form-control " name="" id="">
                                    <option selected>Note</option>
                                    <option value="">1</option>
                                    <option value="">3</option>
                                </select>
                            </div>

                                <center> <input type="submit" class="btn btn-outline-danger btn-lg" name="filtre_btn">  </center>

                            
                        </form>

                        

                        
                        
                    </div>

                    <!-- récupération des images de la BD -->

                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="row" >
                            <!-- récupération des images de la BD -->
                            <?php
                                if (isset($_POST['filtre_btn'])){
                                    $ville = $_POST['ville'];

                                    $true = strcmp ($ville , 'all');
        
                                    if ($true != 0) { 
                                        $query = "SELECT * FROM tbl_gym_fitness WHERE ville LIKE '$ville'  ORDER BY id DESC " ;
                                    }
                                    else $query = "SELECT * FROM tbl_gym_fitness  ORDER BY id DESC " ;
                                }
                               
                                else $query = "SELECT * FROM tbl_gym_fitness  ORDER BY id DESC " ;

                                $result = $bdd->query($query);
                                while ($row = $result->fetch()){
                                    ?>
                                            <div class="card">
                                                <img class="card-img-top" src=" <?php echo $row["img_url"]?> " alt="Card image cap">
                                                <div class="card-body">
                                                    <p class="card-title"> 
                                                        <?php echo $row["nom"]?> 
                                                        <i class="fas fa-heart " style="float : right; color : red"></i>
                                                        
                                                    </p>
                                                    <p class="card-text"> 
                                                    <?php echo '<script>console.log(decodeURI("'.$row["descrip"].'"));</script>';?>
                                                        <?php echo $row["descrip"]?> 
                                                        <center><a href="" class="btn-decouvrir" style="text-decoration: none;"><button type="button" class="btn btn-outline-danger btn-block">Je découvre</button></a></center>
                                                    </p>
                                                    
                                                    
                                                </div>
                                            </div>                   
                                    <?php    
                                }
                                ?>                             
                        </div>                        
                    </div>
                </div>
            </div>

            <!-- footer -->
            <?php  include('../footer/footer.php')  ?>


</body>
</html>
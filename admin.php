<?php
    //$connect = mysqli_connect("localhost","root","","gallery");
     $bdd = new PDO('mysql:host=localhost;dbname=gallery;charset=utf8', 'root', '');
     if ($bdd) echo 'good';
     else echo 'bad';
    
    /*
    if ( isset($_POST['submit']) ){
        $table = $_POST['selectTable'];echo $table;
        $id = $_POST['id'];
        $ville = $_POST['ville'];
        $imgUrl = $_POST['imgUrl'];
        $query = "INSERT INTO '$table' ( id , ville , img_url ) VALUES ( '$id' ,  '$ville' , '$imgUrl'  ) ";

        if (mysqli_query($connect , $query)) echo 'good';
        else echo 'bad';

    }*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="cafe.css">

    
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js" integrity="sha256-C6CB9UYIS9UJeqinPHWTHVqh/E1uhG5Twh+Y5qFQmYg=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="  crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css"> 
    <!-- social media icon -->
    
     <!-- font awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    
    <style>
        .container-fluid {
            margin : 0;
            padding :0;
        }
        .formulaire_insertion  {
            margin-top: 50px;
            width : auto;
            border-width:2px;
            border-style:solid;
            border-color:black;
        }
            .formulaire_insertion .container-fluid .row .item{
                margin :10px;
            }
    </style>


</head>

<body>

    <?php  include('src/views/header/header.php')  ?>

    <center>
        <form action="admin.php" method="post" class="formulaire_insertion">            
                <div class="container-fluid ">
                    <div class="row" >
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="col-6 selection_table item">
                                <label for="">Selectionner la table de la base de donnée :</label>
                                <select name="selectTable" id="select_table" class="form-control">
                                    <option value="select">select table</option>
                                    <option value="tbl_cafe">Table Cafe</option>
                                    <option value="tbl_hotels">Table Hotels</option>
                                    <option value="tbl_cinema">Table Cinéma</option>
                                    <option value="tbl_shopping_mall">Table Shopping / Mall</option>
                                    <option value="tbl_gym_fitness">Table GYM / Fitness</option>
                                </select>
                            </div>
                            
                            <div class="col-6 item">
                                <label>ID de l'élément :</label>
                                <input type="text" name="id" placeholder="ID..." class="form-control" readonly>
                            </div>

                            <div class="col-6 item">
                                <label>Nom de l'élément :</label>
                                <input type="text" name="nom" placeholder="Nom..." class="form-control">
                            </div>

                            <div class="col-6 item">
                                <label>Adresse de l'élément :</label>
                                <input type="text" name="adresse" placeholder="Adresse..." class="form-control">
                            </div>

                            <div class="col-6 item">
                                <label>Site de l'élément :</label>
                                <input type="text" name="urlSite" placeholder="Url site..." class="form-control">
                            </div>

                            <div class="col-6 item">
                                <label>Ville de l'élément :</label>
                                <input type="text" name="ville" placeholder="Ville..." class="form-control">
                            </div>

                            <div class="col-6 item">
                                <label>Site de l'image de l'élément :</label>
                                <input type="text" name="imgUrl" placeholder="Url image..." class="form-control">
                            </div>

                            <div class="col-6 item">
                                <label>Description de l'élément :</label>
                                <input type="text" name="descrip" placeholder="Description..." class="form-control">
                            </div>
                    
                            <input type="submit" name="submit"  class="btn btn-success">

                        </div>
                    </div>
                </div>      
            </form>
    </center>
    <?php 
        if ( isset($_POST['submit']) ){
            $table = $_POST['selectTable'];
            $id = $_POST['id']; 
            $nom = $_POST['nom'];
            $adresse = $_POST['adresse'];
            $urlSite = $_POST['urlSite'];
            $ville = $_POST['ville'];
            $imgUrl = $_POST['imgUrl'];
            $descrip = $_POST['descrip'];  

            // ici on récupère le max des ID de la table à modifier

            $req_id = $bdd->query("SELECT MAX(id) as max_id FROM {$table} ");
            $donnee = $req_id->fetch();
            echo $donnee['max_id'];
            $id_max = intval($donnee['max_id']);
            $id_max = $id_max + 1;
            echo ' max = ' .$id_max;
            

            
            $req = $bdd->prepare('insert into '. $table .'( id , nom , adresse , site_web  , ville , img_url , descrip ) VALUES( :id , :nom , :adresse , :urlSite, :ville , :imgUrl , :descrip )');
            
            if ( $req->execute(array(
                    'id' =>  $id_max,
                    'nom' =>  $nom,
                    'adresse' =>  $adresse,
                    'urlSite' =>  $urlSite,
                    'ville' =>  $ville,
                    'imgUrl' =>  $imgUrl,
                    'descrip' =>  $descrip,

                ))
            ) echo '             INSERTION : good insert on table : '.$table.' !!';
            else echo '             INSERTION : bad insert on table : '.$table.' !!';
        }
    ?>                       
        
  

    
    
</body>
</html>
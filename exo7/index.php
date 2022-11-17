<?php
// tableau aves les roles, changement du text en fonction du role
$roles = ["Admin", "Membre", "Gestionnaire"];
    function role(){
        if(isset($_POST['role'])){
            if($_POST['role']=='Admin'){
                echo "<p> Vous êtes l'Administrateur du site.</p>";
            }
            if($_POST['role']=='Membre'){
                echo "<p> Vous êtes membre du site. </p>";
            }
            if($_POST['role']=='Gestionnaire'){
                echo "<p> Vous êtes gestionnaire du site. </p>";
            }
        }else{
            echo "<p>Vous n'avez actuellement pas de rôle, veuillez en choisir un</p>";
        };
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo7</title>
</head>
<body>
    <div class ="container">
        <div>
            <!-- appel fonction -->
            <?php
                role();
            ?>
        </div>
        <!-- boucle avec les options -->
        <form action="" method="post">
            <select name="role" id="role">
                <?php foreach ($roles as $key => $role){ ?>
                <option value="<?php echo $role; ?>"><?php echo $role; ?></option>
                <?php }; ?>
            </select>
            <input type="submit">
        </form>
    </div>
</body>
</html>
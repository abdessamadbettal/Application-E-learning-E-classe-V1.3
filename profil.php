<?php
/* $nom = null;
if (!empty($_GET['action']) && $_GET['action'] == 'deconnecter') {
    unset($_COOKIE['user']);
    setcookie('user', '' , time() - 10) ;
}
if (!empty($_COOKIE['user'])   ) {
    // dans cas la est  false donc si la cokies est vide ne entre pas
    $nom = $_COOKIE['user'];
}
if (!empty($_POST['nom'])) {
    setcookie('user', $_POST['nom']);
    $nom = $_POST['nom'];
} */
require 'header.php';
?>
<?php if ($nom): ?>
    <h1>bonjour <?php echo htmlentities($nom)  ;?> </h1>
    <a href="profil.php?action=deconnecter"> se deconncter</a>
<?php else: ?>
<form action="" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" name="nom" placeholder="entrer votre nom">
        </div>
        <button class="btn btn-primary"> se connecter</button>
</form>
<?php endif; ?>
<h1>bonjour <?php htmlentities($nom) ?> </h1>
<form action="" method="POST">
        <div class="form-group">
            <input type="text" class="form-control" name="nom" placeholder="entrer votre nom">
        </div>
        <button class="btn btn-primary"> se connecter</button>
    </form>
 

<?php
var_dump($_COOKIE) ;
echo'<br>';
var_dump($nom) ;
require 'footer.php';
?>
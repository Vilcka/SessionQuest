<?php require 'inc/head.php';

if(!isset($_SESSION)) {
    session_start();
}
if(isset($_COOKIE['cookieCart'])) {
    $_SESSION['cart'] = $_COOKIE['cookieCart'];
}

?>
<section class="cookies container-fluid">
    <div class="row">
      <p>Ajout du produit n° <?= $_SESSION['cart'] ?></p>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

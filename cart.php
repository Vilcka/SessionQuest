<?php require 'inc/head.php';

$products = [
        '46' => 'Pecan nuts',
        '58' => 'Chocolate cookie',
        '36' => 'Chocolate Chips',
        '32' => 'M&M\'s&copy; cookies',
        ];

if(!isset($_SESSION)) {
    session_start();
}

if(isset($_COOKIE['cookieCart'])) {
    $datas = unserialize($_COOKIE['cookieCart']);
    $_SESSION['cart'] = $datas;
}

?>
<section class="cookies container-fluid">
    <div class="row">
      <?php foreach($products as $id => $product) {
            foreach ($datas as $data => $nb) {
                if ($data == $id) {
                    echo "<p>Vous avez commandez l'article suivant : $product, $nb fois";
                }
            }
      } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

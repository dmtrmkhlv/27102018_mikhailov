<?php
$cssFiles = [
    '/css/style.css',
    '/css/catalog.css'
];
    include($_SERVER['DOCUMENT_ROOT'].'/parts/header.php');

    $template = [
        'product'=>[],
        'product_sizes'=>[]
    ];

    if(isset($_GET['id'])){
        $product_id = $_GET['id'];
        $sql = "SELECT * FROM products WHERE id={$product_id}";
        $result = mysqli_query($db, $sql);

        $template['product']=mysqli_fetch_assoc($result);


     
        $sql_sizes = "SELECT * FROM product_sizes WHERE product_id={$product_id}";
        $result_sizes = mysqli_query($db, $sql_sizes);

        while ($row = mysqli_fetch_assoc($result_sizes) ){
            $template['product_sizes'][] = $row;
        }


    }
    echo "<pre>";
    print_r( $template['product_sizes']);
    echo "</pre>";
?>
<h1><?php echo $template['product']['name']?></h1>
<div class='product__img_item'style='background-image:url(<?php echo $template['product']['photo']?>)'></div>
<div class='product__name'><?php echo $template['product']['description']?></div>
<div class='product__price'><?php echo $template['product']['price']?> руб.</div>
<div>
    <?php foreach($template['product_sizes'] as $size):?>
    <span class="product__size"><?=$size['size']?></span>
    <?php endforeach; ?>
</div>


<div class="catalog">
Text
</div>
<script src="/js/catalog.js"></script>
<?php
    include($_SERVER['DOCUMENT_ROOT'].'/parts/footer.php');
?>
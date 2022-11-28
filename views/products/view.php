<?php require_once(ROOT_PATH.'views/inc/header.php'); ?>
<?php require_once(ROOT_PATH.'views/inc/nav.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center p-5 my-5 border border-success bg-info"> View All Products </h1>
            <div>
                <a href="<?php echo URL."products/index.php?page=create"; ?>" class="btn btn-success">Add New Product</a>
            </div>
        </div>
    </div>
</div>


<?php require_once(ROOT_PATH.'views/inc/footer.php'); ?>

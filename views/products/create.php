<?php require_once(ROOT_PATH.'views/inc/header.php'); ?>
<?php require_once(ROOT_PATH.'views/inc/nav.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center p-5 my-5 border border-success bg-info"> Create New Product </h1>
            <div>
                <a href="<?php echo URL."products/index.php?page=all"; ?>" class="btn btn-primary">View All Products</a>
            </div>
        </div>
        <div class="col-8 mx-auto">
            <?php if(Session::getSession('success')): ?>
            <div class="my-5 alert alert-success"><?php echo Session::flashSession('success'); ?></div>
            <?php endif; ?>
            <form action="<?php echo $_SERVER['PHP_SELF']."?page=store" ?>" method="POST" class="border border-primary my-3 p-5">
                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name"  class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Price</label>
                    <input type="number" name="price"  class="form-control">
                </div>

                <div class="mb-3">
                    <input type="submit" value="Save"  class="form-control bg-primary">
                </div>
            </form>
        </div>
    </div>
</div>


<?php require_once(ROOT_PATH.'views/inc/footer.php'); ?>

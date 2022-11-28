<?php require_once(ROOT_PATH.'views/inc/header.php'); ?>
<?php require_once(ROOT_PATH.'views/inc/nav.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center p-5 my-5 border border-primary border-3 bg-secondary"> View All Users </h1>
            <div>
                <a href="<?php echo URL."users/index.php?page=create"; ?>" class="btn btn-primary">Add New User</a>
            </div>
        </div>
    </div>
</div>


<?php require_once(ROOT_PATH.'views/inc/footer.php'); ?>

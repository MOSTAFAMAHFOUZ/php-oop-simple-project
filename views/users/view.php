<?php require_once(ROOT_PATH.'views/inc/header.php'); ?>
<?php require_once(ROOT_PATH.'views/inc/nav.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center p-5 my-5 border border-primary border-3 bg-secondary"> View All Users </h1>
            <div class="mb-5">
                <a href="<?php echo URL."users/index.php?page=create"; ?>" class="btn btn-primary">Add New User</a>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; foreach($users as $user): ?>
                    <tr>
                        <td><?php echo ++$i; ?> </td>
                        <td> <?php echo $user['name']; ?> </td>
                        <td> <?php echo $user['email']; ?> </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</div>


<?php require_once(ROOT_PATH.'views/inc/footer.php'); ?>

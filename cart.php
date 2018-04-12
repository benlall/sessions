<?php require 'inc/head.php';

if (!isset($_SESSION['loginname'])) {
    header('Location: login.php');
    die;
}

?>

<section class="cookies container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                <?php if (isset($_GET['result'])  && isset($_SESSION['product-46'])) {?>
                    <tr>
                        <td><?php if (isset($_SESSION['name product-46'])) echo
                            $_SESSION['name product-46'] ;?></td>
                        <td><?php echo $_SESSION['product-46'] ;?></td>
                    </tr>
                <?php }?>
                <?php if (isset($_GET['result']) && isset($_SESSION['product-36'])) {?>
                    <tr>
                        <td><?php if (isset($_SESSION['name product-36'])) echo $_SESSION['name product-36'] ;?></td>
                        <td><?php echo $_SESSION['product-36'] ;?></td>
                    </tr>
                <?php }?>
                <?php if (isset($_GET['result']) && isset($_SESSION['product-58'])) {?>
                    <tr>
                        <td><?php if (isset($_SESSION['name product-58'])) echo
                            $_SESSION['name product-58'] ;?></td>
                        <td><?php echo $_SESSION['product-58'] ;?></td>
                    </tr>
                <?php }?>
                <?php if (isset($_GET['result']) && isset($_SESSION['product-32'])) {?>
                    <tr>
                        <td><?php if (isset($_SESSION['name product-32'])) echo
                            $_SESSION['name product-32'] ;?></td>
                        <td><?php echo $_SESSION['product-32'] ;?></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php require 'inc/foot.php'; ?>

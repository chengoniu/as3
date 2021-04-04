<?php
$profpic = "shop.jpg";
require 'users/users.php';
$users = getUsers();
include 'partials/header.php';
?>

<html>
<head>
<style type="text/css">
body {
background-image: url('<?php echo $profpic;?>');
background-repeat: no-repeat;
              background-attachment: fixed;
              background-size: cover;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
</body>
</html>

<div class="container">
    <p>
        <a class="btn btn-success" href="create.php">Create new User</a>
    </p>

    <table class="table">
        <thead>
        <tr class="text-white">
            <th>Image</th>
            <th>Car Manifacture</th>
            <th>Year</th>
            <th>Car model</th>
            <th>Motor type</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td class="text-white">
                    <?php if (isset($user['extension'])): ?>
                        <img style="width: 60px" src="<?php echo "users/images/${user['id']}.${user['extension']}" ?>" alt="">
                    <?php endif; ?>
                </td>
                <td class="text-white"><?php echo $user['manifacture'] ?></td>
                <td class="text-white"><?php echo $user['year'] ?></td>
                <td class="text-white"><?php echo $user['model'] ?></td>
                <td class="text-white"><?php echo $user['type'] ?></td>
                <td class="text-white"><?php echo $user['price'] ?></td>
                <td class="text-white">
                    <a href="view.php?id=<?php echo $user['id'] ?>" class="btn btn-sm btn-outline-info">View</a>
                    <a href="update.php?id=<?php echo $user['id'] ?>"
                       class="btn btn-sm btn-outline-secondary">Update</a>
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
</div>

<?php include 'partials/footer.php' ?>
<?php
$profpic = "shop.jpg";
include 'partials/header.php';
require __DIR__ . '/users/users.php';

if (!isset($_GET['id'])) {
    include "partials/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "partials/not_found.php";
    exit;
}

?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>View User: <b><?php echo $user['manifacture'] ?></b></h3>
        </div>
        <div class="card-body">
            <a class="btn btn-secondary" href="update.php?id=<?php echo $user['id'] ?>">Update</a>
            <form style="display: inline-block" method="POST" action="delete.php">
                <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                <button class="btn btn-danger">Delete</button>
            </form>
        </div>
        <table class="table">
            <tbody>
            <tr>
                <th>Car Manifacture:</th>
                <td><?php echo $user['manifacture'] ?></td>
            </tr>
            <tr>
                <th>Year:</th>
                <td><?php echo $user['year'] ?></td>
            </tr>
            <tr>
                <th>Car model:</th>
                <td><?php echo $user['model'] ?></td>
            </tr>
            <tr>
                <th>Motor type:</th>
                <td><?php echo $user['type'] ?></td>
            </tr>
            <tr>
                <th>Price:</th>
                <td><?php echo $user['price'] ?></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'partials/footer.php' ?>

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
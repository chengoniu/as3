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

$errors = [
    'manifacture' => "",
    'year' => "",
    'model' => "",
    'type' => "",
    'price' => "",
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = updateUser($_POST, $userId);
        uploadImage($_FILES['picture'], $user);
        header("Location: index.php");
    }
}
?>
<?php include '_form.php' ?>

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
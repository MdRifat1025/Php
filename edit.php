<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];

    $sql = "UPDATE users SET name=?, email=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$name, $email, $id]);

    echo "Updated Successfully!";
}
?>

<form method="post">
    Name: <input type="text" name="name" value="<?= $user['name'] ?>"><br><br>
    Email: <input type="text" name="email" value="<?= $user['email'] ?>"><br><br>
    <button type="submit" name="update">Update</button>
</form>

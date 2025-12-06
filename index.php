<?php
include 'db.php';

$sql = "SELECT * FROM users";
$stmt = $conn->prepare($sql);
$stmt->execute();

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Action</th>
</tr>

<?php foreach($users as $u): ?>
<tr>
    <td><?= $u['id'] ?></td>
    <td><?= $u['name'] ?></td>
    <td><?= $u['email'] ?></td>
    <td>
        <a href="edit.php?id=<?= $u['id'] ?>">Edit</a> |
        <a href="delete.php?id=<?= $u['id'] ?>">Delete</a>
    </td>
</tr>
<?php endforeach; ?>
</table>

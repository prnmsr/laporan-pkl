<?php
include '../config.php';
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>
<h2>Manajemen Pengguna</h2>
<table border="1">
    <tr>
        <th>Username</th>
        <th>Role</th>
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?= $row['username']; ?></td>
            <td><?= $row['role']; ?></td>
        </tr>
    <?php } ?>
</table>
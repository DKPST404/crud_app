<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form action="/students/update/<?= $student['id'] ?>" method="post">
        <label>Name: <input type="text" name="name" value="<?= $student['name'] ?>"></label><br>
        <label>Email: <input type="email" name="email" value="<?= $student['email'] ?>"></label><br>
        <label>Address: <textarea name="address"><?= $student['address'] ?></textarea></label><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

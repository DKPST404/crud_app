<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>
    <form action="/students/store" method="post">
        <label>Name: <input type="text" name="name"></label><br>
        <label>Email: <input type="email" name="email"></label><br>
        <label>Address: <textarea name="address"></textarea></label><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>

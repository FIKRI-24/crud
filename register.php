<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

.container {
    width: 300px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

label {
    display: block;
    margin-bottom: 10px;
}

input[type="text"], input[type="password"], input[type="password"] {
    width: 100%;
    height: 40px;
    margin-bottom: 20px;
    padding: 10px;
    border: 1px solid #ccc;
}

input[type="submit"] {
    width: 100%;
    height: 40px;
    background-color: #4CAF50;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #3e8e41;
}  
</style>
<body>

    <div class="container">
        <h1>Registrasi</h1>
        <form action="" method="POST">
            <label>nama lengkap</label>
            <input type="text" name="username" required><br><br>
            <label>username</label>
            <input type="username" name="username" required><br><br>
            <label>password</label>
            <input type="password" name="password" required><br><br>
            <label>konfirmasi password</label>
            <input type="password" name="password" required><br><br>
            <input type="submit" name="register" value="Register">
        </form>
    </div>
</body>
</html>
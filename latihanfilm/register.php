<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.form {
    width: 50%;
    margin: 50px auto;
    border: 1px solid #ddd;
    border-radius: 12px;
    background: #ffff;
    padding: 30px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
}

.form h2 {
    text-align: center;
    display: block;
    font-weight: bold;
}

.form label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #333;
}

.form input[type="text"],
      input[type="password"],
      input[type="email"] {
        width: 95%;
        display: block;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        outline: none;
        margin: 0 auto 20px;
        font-size: 14px;
      }

.form input[type="text"]:focus,
      input[type="password"]:focus,
      input[type="email"]:focus {
        border-color: #006ff7ff;
      }
.form input[type="submit"] {
    width: 100%;
    display: block;
    padding: 15px;
    background-color: #0062ff;
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    margin: 20px auto;
}

.form input[type="submit"]:hover {
    background-color: #005becff;
}

    </style>
</head>
<body>
    <div class="form">
        <h2>Form Register</h3>
    <form action="" method="post">
        <label for="">Username</label>
        <input type="text" name="" id="">

        <label for="">Email</label>
        <input type="email" name="" id="">

        <label for="">Password</label>
        <input type="password" name="" id="">

        <input type="submit" value="register">
    </form>
    </div>
</body>
</html>
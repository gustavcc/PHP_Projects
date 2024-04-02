<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <form class="form" method="POST" action="check.php">
        <p class="title">Register </p>
        <p class="message">Signup now and get full access to our app. </p>
            <label>
                <input required="" name="username" placeholder="" type="text" class="input">
                <span>Name</span>
            </label>
        <label>
            <input required="" name="email" placeholder="" type="email" class="input">
            <span>Email</span>
        </label> 
        <div class="flex">
            <label>
                <input required="" name="password" placeholder="" type="password" class="input">
                <span>Password</span>
            </label>
            <i class="fa-solid fa-eye-slash"></i>
        </div>
        <button class="submit">Submit</button>
        <!-- <p class="signin">Already have an acount ? <a href="#">Signin</a> </p> -->
    </form>
</body>
</html>
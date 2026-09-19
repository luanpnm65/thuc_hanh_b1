<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkpass.php" method=POST>
        <table>
            <tr>Registration</tr>
            <tr>
                <th>Full name</th>
                <th>Username</th>
            </tr>
            <tr>
                <th><input type="text" name="fullname" size = 20></th>
                <th><input type="text" name="username" size = 20></th>
            </tr>
            <tr>
                <th>Email</th>
                <th>Phone number</th>
            </tr>
            <tr>
                <th><input type="email" name="email" size = 20></th>
                <th><input type="number" name="phone" size = 20></th>
            </tr>
            <tr>
                <th>Password</th>
                <th>Confirm password</th>
            </tr>
            <tr>
                <th><input type="password" name="pass" size = 20></th>
                <th><input type="password" name="cpass" size = 20></th>
            </tr>
           
            <tr> 
                <th>Gender</th>
                <th><input type="radio" id="male" name="gender" value="Male">Male</th>
                <th><input type="radio" id="female" name="gender" value="Female">Female</th>
                <th><input type="radio" id="not" name="gender" value="Prefer not to say">Prefer not to say</th>
            </tr>
          

        </table> 
        <input type="submit" name = "submit" value="Register">
    </form>
</body>
</html>
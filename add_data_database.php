<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="form.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>

<body>
    <form method="POST" action="register.php">

        <table>
            <tr>
                <td>
                    First Name :
                </td>
                <td>
                    <!-- field ekk require karanna saha ena msg eke wenas karanna  -->
                    <input type="text" required oninvalid="this.setCustomValidity('name ?')"
                        oninput="this.setCustomValidity('')" name="firstName" placeholder="First Name"></input>
                </td>
            </tr>
            <tr>
                <td> Last Name : </td>
                <td><input type="text" required name="lastName" placeholder="Last Name"></input></td>
            </tr>
            <tr>
                <td> Email :</td>
                <td> <input type="email" required name="email" placeholder="email"></input></td>
            </tr>
            <tr>
                <td> Pass Word:</td>
                <td> <input type="password" required name="passWord" placeholder="passWord"></input></td>
            </tr>

        </table>
        <button class="button" type="submit" required name="submit">Register</button>

    </form>

</body>

</html>
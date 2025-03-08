<html>
    <head>
        <title>DATABASE CONNECTION</title>
        <style>
            table{
                margin-top: 100px;
                margin-left: 500px;
            }
            h2{
                margin-top: 100px;
                margin-left: 500px;
            }
            input{
                border-radius: 5px;
            }
        </style>
    </head>
    <body>
        <h2>Welcome to my REGISTRATION PAGE</h2>
        <form method="post">
            <table>
                <tr>
                    <td>Enter your id:</td>
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Enter your name:</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Enter your email:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td>Enter your password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>
        </form>

        <?php
        // local host connection
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "customer_info";//database name

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        } else {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $id = $_POST["id"];
                $name = $_POST["name"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                // Using prepared statements
                //ueser table has 4 columns id,name,email,password
                $stmt = $conn->prepare("INSERT INTO user (id, name, email, password) VALUES (?, ?, ?, ?)");
                $stmt->bind_param("ssss",$id, $name, $email, $password);

                if ($stmt->execute()) {
                    echo "Record inserted successfully";
                } else {
                    echo "Error: " . $stmt->error;
                }

                $stmt->close();
            }
        }

        mysqli_close($conn);
        ?>
    </body>
</html>

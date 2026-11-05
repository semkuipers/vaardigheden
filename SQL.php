<!-- <?php
    $host = "";
    $dbname = "";
    $username = "";
    $password = "";

   try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // require "require/conn.php";
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = trim($_POST['username']);
            // $user = htmlspecialchars($userL, ENT_QUOTES, 'UTF-8');
            $pass = $_POST['password'];
            // $pass = htmlspecialchars($passL, ENT_QUOTES, 'UTF-8');
            if (!empty($user) && !empty($pass)) {
                $sql = "INSERT INTO gebruikers (username, password) VALUES (:username, :password)";
                $statement = $pdo->prepare($sql);
                $options = [
                'cost' => 11,
                ];
                $pass = password_hash($_POST['password'], PASSWORD_BCRYPT, $options);
                $statement->bindParam(':username', $_POST['username']);
                $statement->bindParam(':password', $pass);
                $statement->execute();

            
            } else {
                echo "Vul alle velden in. <br> <br>";
            }
        }
    } catch (PDOException $e) {
        error_log(
            $e->getMessage() . PHP_EOL,
            3,
            __DIR__ . '/errors.log'
        );

        echo "Er is iets misgegaan.";
    }
?>
<br>
<h1 class ="akgtext">welcome to mbosoccer!</h1>
<br>

<form method="POST" class="regipage">
    <br>
    <article>
        <h2>USERNAME:</h2>
        <input type="text" id="username" name="username" required>
    </article>
    <br>
    <article>
        <h2>PASSWORD:</h2>
        <input type="password" id="password" name="password" required>
    </article>
    <br>
    <br>
    <button type="submit" id="submitpassword">Sign up</button>
    <br>
    <br>
    <h3>already have an account? 
    <a href="login.php">login</a>
</h3>
</form> -->
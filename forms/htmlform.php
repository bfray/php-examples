<html>
    <head>
    </head>
        <body>
            <form action="foo.php" method="post">
                Name: <input type="text" name="name" /><br/>
                Email: <input type="text" name="age" /><br/>
                <p><input type="submit" /></p>
            </form>
            <?php
                echo $_POST['username'];
                echo $_REQUEST['username'];
            ?>
            Hi <?php echo htmlspecialchars($_POST['name']); ?>.
            You are <?php echo (int)$_POST['age']; ?> years old. 
        </body>
</html>


#! php -S localhost:8000/http.get
<html>
  <head>
     <title> PHP Test </title>
  </head>
  <body>
   <h2> Contents of $_GET array </h2>
    <p> using print_r </p>
    <pre>
        <?php
            print_r($_GET);
        ?>
    <p> using var_dump </p>
        <?php
            var_dump($_GET);
        ?>
    </pre>
    <a href="/HTTP/get.php?x=2&y=4"> Click </a>    
</body>
</html>

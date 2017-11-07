<html>
    <head>
        <title>Home</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h3>Home</h3>
        <?php
            $user = new Acme\Models\UserModel;
            $users = $user->read();
            dump($users);
        ?>
    </body>
</html>
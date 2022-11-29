<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>En ce <?php setlocale(LC_TIME, 'fr_FR.utf8', 'fra'); echo (strftime("%A %d %B %Y"));?>, 
sur le serveur <?php echo $_SERVER ["SERVER_NAME"]; ?>, 
il est <?php echo strftime('%T'). '<br>'; ?>
<h3>Variable http serveur (getenv() )</h3>
<table border="1">
    <tr>
        <td><b>Variable</b></td>
        <td><b>Valeur</b></td>
    </tr>
    <tr>
        <td><?php echo "GATEWAY_INTERFACE" ; ?></td>
        <td><?php echo getenv ("GATEWAY_INTERFACE") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "SERVER_NAME" ; ?></td>
        <td><?php echo getenv ("SERVER_NAME") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "SERVER_SOFTWARE" ; ?></td>
        <td><?php echo getenv ("SERVER_SOFTWARE") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "SERVER_PROTOCOL" ; ?></td>
        <td><?php echo getenv ("SERVER_PROTOCOL") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "REQUEST_METHOD" ; ?></td>
        <td><?php echo getenv ("REQUEST_METHOD") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "QUERY_STRING" ; ?></td>
        <td><?php echo getenv ("QUERY_STRING") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "DOCUMENT_ROOT" ; ?></td>
        <td><?php echo getenv ("DOCUMENT_ROOT") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_ACCEPT" ; ?></td>
        <td><?php echo getenv ("HTTP_ACCEPT") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_ACCEPT_CHARSET" ; ?></td>
        <td><?php echo getenv ("HTTP_ACCEPT_CHARSET") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_ACCEPT_ENCODING" ; ?></td>
        <td><?php echo getenv ("HTTP_ACCEPT_ENCODING") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_ACCEPT_LANGUAGE" ; ?></td>
        <td><?php echo getenv ("HTTP_ACCEPT_LANGUAGE") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_CONNECTION" ; ?></td>
        <td><?php echo getenv ("HTTP_CONNECTION") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_ACCEPT" ; ?></td>
        <td><?php echo getenv ("HTTP_ACCEPT") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_HOST" ; ?></td>
        <td><?php echo getenv ("HTTP_HOST") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_REFERER" ; ?></td>
        <td><?php echo getenv ("HTTP_REFERER") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "HTTP_USER_AGENT" ; ?></td>
        <td><?php echo getenv ("HTTP_USER_AGENT") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "REMOTE_ADDR" ; ?></td>
        <td><?php echo getenv ("REMOTE_ADDR") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "SCRIPT_FILENAME" ; ?></td>
        <td><?php echo getenv ("SCRIPT_FILENAME") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "SERVER_ADMIN" ; ?></td>
        <td><?php echo getenv ("SERVER_ADMIN") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "SERVER_PORT" ; ?></td>
        <td><?php echo getenv ("SERVER_PORT") ; ?>&nbsp</td>
    </tr>
    <tr>
        <td><?php echo "SERVER_SIGNATURE" ; ?></td>
        <td><?php echo getenv ("SERVER_SIGNATURE") ; ?>&nbsp</td>
    </tr>
</body>
</html>
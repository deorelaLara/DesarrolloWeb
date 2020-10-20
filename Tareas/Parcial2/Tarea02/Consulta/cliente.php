<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <div class="header">
        <h1>CLIENTE</h1>
    </div>

    <form name="id_form" id="id_form" action="#" method="post" accept-charset="utf-8" onsubmit="return valida_form();">
        <div name="inf" id="inf" class="col-25">
            <div class="col-75">
                <label>Full Name: </label>
            </div>
            <input type="text" id="i_name" name="i_name" placeholder="Name" required>

            <br><br>
            <div id="col-75">
                <label>Email: </label>
            </div>
            <input type="email" id="i_email" name="i_email" placeholder="Email" required>
        </div>
        <br>
        <input type="submit" id="btn_save" name="btn_save" value="Save">
    </form>
    <script src="js/functions.js" type="text/javascript"></script>
    
</body>
</html>
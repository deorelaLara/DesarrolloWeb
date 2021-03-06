<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Enquiry</title>

</head>

<body>
    <div class="header">
        <h1>Information</h1>
    </div>

    <form name="id_form" id="id_form" action="#" method="post" accept-charset="utf-8" onsubmit="return valida_form();">
        <div name="inf" id="inf" class="col-25">
            <div class="col-75">
                <label>Name: </label>
            </div>
            <input type="text" id="i_name" name="i_name" placeholder="Name" required="true">

            <br><br>
            <div id="col-75">
                <label>Email: </label>
            </div>
            <input type="email" id="i_email" name="i_email" placeholder="Email" required="true">
        </div>

        <br><br>
        <label>Product: </label>
            <br><input type="radio" id="i_prod" name="i_prod"><label>Adobe ColdFusion Builder</label>
            <br><input type="radio" id="i_prod" name="i_prod"><label>Adobe Flash Builder</label>

        <br><br>
        <input type="checkbox" id="i_notif" name="i_notif"><label>Please notify me of product updates by email</label>

        <br><br>
        <label>Enquiry:</label>
        <select name="s_enquiry" id="s_enquiry">
            <!-- Opciones de la lista -->
            <option value="0">Select Option</option>
            <option value="1">Sales</option>
            <option value="2">Economy</option> 
            <option value="3">Technology</option>
          </select>
          
          <br><br>
          <textarea name="t_Enquiry" id="t_Enquiry" rows="5" cols="40" minlength="10" maxlength="100" placeholder="Tell us about your enquiry" required="true"></textarea>

          <br><br>
          <input type="submit" id="btn_save" name="btn_save" value="Save" background="Orange">
    </form>
    <script src="js/functions.js" type="text/javascript"></script>
</body>
</html>
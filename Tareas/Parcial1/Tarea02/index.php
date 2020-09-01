<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Tarea 01</title>

</head>

<body>
    <h1 align="Center">Information</h1>
    <form name="Tarea01" id="id_form" action="#" method="post" accept-charset="utf-8">
        <label>Name: </label>
        <input type="text" id="i_name" name="i_name" placeholder="Name">

        <br><br>
        <label>Email: </label>
        <input type="email" id="i_email" name="i_email" placeholder="Email">

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
            <option value="1">Sales</option>
            <option value="2">Economy</option> 
            <option value="3">Technology</option>
          </select>
          
          <br><br>
          <textarea name="Enquiry" rows="5" cols="40" minlength="10" maxlength="100" placeholder="Tell us about your enquiry"></textarea>

          <br><br>
          <input type="submit" id="btn_save" name="btn_save" value="Save" background="Orange">

    </form>
</body>
</html>
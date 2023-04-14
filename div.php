<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="submit/submit_div.php" action="post">
    <table border="2" align="center" cellpadding="20px" style="50pxtop">
        <tr>
            <td>Enter Height of Div</td>
            <td>
                <input type="number" name="height">
            </td>
        </tr>
        <tr>
            <td>Enter Width of Div</td>
            <td>
                <input type="number" name="width">
            </td>
        </tr>
        <tr>
            <td>Enter Number of Div</td>
            <td>
                <input type="number" name="no_of_div">
            </td>
        </tr>
        <tr>
            <td align="center">
                <input type="submit" value="Submit" >
            </td>
            <td align="center">
                <input type="reset" value="Reset">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
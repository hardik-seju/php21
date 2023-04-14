<body>
    <form action="" name="frm1" method="post">
    <h3>Student_Form</h3>
    <hr>
    <table border="0">
        <tr>
            <td>
                Name : 
            </td>
            <td>
                <input type="text" name="txtname" size="20">
            </td>
        </tr>
        <tr>
            <td>
                Password : 
            </td>
            <td>
                <input type="password" name="txtpwd" size="20">
            </td>
        </tr>
        <tr>
            <td>
                Mobile : 
            </td>
            <td>
                <input type="number" name="txtmobile" size="20">
            </td>
        </tr>
        <tr>
            <td>
                Stream : 
            </td>
            <td>
                <input type="radio" name="optstream" value="BCA" checked="checked">BCA
                 <input type="radio" name="optstream" value="MCA">MCA
                <input type="radio" name="optstream" value="MSCit">MCSit
            </td>
        </tr>
        <tr>
            <td>
                Mobile : 
            </td>
            <td>
                <textarea name="txtarea" id="" cols="30" rows="5"></textarea>
            </td>
        </tr>
        <tr>
            <td>
                City
            </td>
            <td>
                <select name="cmbcity" id="">
                    <option value="select" selected>select</option>
                    <option value="bhavnagar">bhavnagar</option>
                    <option value="surat">surat</option>
                    <option value="rajkot">rajkot</option>
                    <option value="baroda">baroda</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3">
                <input type="submit" name="btnsubmit" value="submit">
                <input type="reset" name="btnreset" value="reset">
            </td>
        </tr>

    </table>

    </form>
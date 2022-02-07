<?php include('header.php');?>
    <div align=center >
    <h3>Registeration</h3>
    <table >
    <form action=serverregistration.php method=post >
        <div><tr id=>
            <td>Name</td>
            <td> <input type=text name=Name maxlength="10" pattern="[A-Za-z]{1,10}"></td>
        </tr><tr>
            <td>Age </td>
            <td><input type=text name=Age maxlength="2" pattern="[0-9]{1}" title=""></td>
        </tr><tr>
            <td>Address </td>
            <td><input type=textarea name=Address></td>
        </tr>
        <tr>
            <td>Course </td>
            <td><select name="" id="">
                <option value="">MCA</option>
                <option value="">MBA</option>
            </select></td>
            
        </tr>
        <tr>
            <td><input type="submit" id=submit-button></td></tr>
        
        </div>
    </form>     
</table>
<br><br>
    <a href="index.php">Home Page</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<body>
<h1>Please fill up the form </h1>
<hr>
<form action="" method="post" >
    <table>
        <tr>
            <td>First Name:</td>
            <td><input type="text" name="fname"></td>
</tr>
<tr>
            <td>Last Name:</td>
            <td><input type="text" name="lname"></td>
</tr>

<tr>
 <td><label for="email">E-mail:</label></td>
 <td><input type="email" name="email"></td>
 </tr>

<tr>
    <td> Gender:</td>
    <td>
    <input type="radio" id="Male" name="gender" value="Male">
    <label for="Male">Male</label>

    <input type="radio" id="Female" name="gender" value="Female">
    <label for="Female">Female</label>
                         
     
</td>
</tr>

<tr>
            <td>Mobile No:</td>
            <td><input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"></td>
</tr>

<tr>
            <td>Date of Birth:</td>
            <td><input type="date" name="dob"></td>
</tr>

<tr>
            <td>HSC results:</td>
            <td><input type="text" name="hscR"></td>
</tr>



<tr>
            <td>SSC results:</td>
            <td><input type="text" name="sscR"></td>
</tr>




<tr>
    <td> Select a course you want to enroll:</td>
    <td>
    <input type="radio" id="CSE" name="course" value="CSE">
    <label for="CSE">CSE</label>

    <input type="radio" id="EEE" name="course" value="EEE">
    <label for="EEE">EEE</label>

    <input type="radio" id="SE" name="course" value="SE">
    <label for="SE">SE</label>
                         
     
</td>
</tr>

<tr>
    <td> Choose a year enrolling year:</td>
    <td>
    <input type="radio" id="2021" name="year" value="2021">
    <label for="2021">2021</label>

    <input type="radio" id="2020" name="year" value="2020">
    <label for="2020">2020</label>

    <input type="radio" id="2019" name="year" value="2019">
    <label for="2019">2019</label>
                         
     
</td>
</tr>

<tr>
    <td> Choose a year enrolling session:</td>
    <td>
    <input type="radio" id="Summer" name="session" value="Summer">
    <label for="Summer">Summer</label>

    <input type="radio" id="Fall" name="session" value="Fall">
    <label for="Fall">Fall</label>

    <input type="radio" id="Spring" name="session" value="Spring">
    <label for="Spring">Spring</label>
                         
     
</td>
</tr>


<tr>
<td><button type="submit" value="Submit">Insert Data</button></td>
</tr>

 </table>
</form>
</body>
</html>

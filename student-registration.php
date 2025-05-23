<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(!$_POST){
        echo "<a href='index.html'>" . "Home" . "</a>";
        exit();

    }
    ?>
    <form action="" method="post">
    <fieldset>
        <legend>Student Registration</legend>
<table>
     <tr>
        <th><label for="admissionno">Admission No:</label></th>
        <td><input type="text" id="admissionno" name="admissionno" value=<?php echo $_POST['admissionno'] ?>></td>
     </tr>
   <tr>
        <th><label for="fathername">Father Name:</label></th>
        <td><input type="text" id="fathername" name="fathername" value=<?php echo $_POST['fathername'] ?>></td>
    </tr>
    <tr>
        <th><label for="studentname">Student Name:</label></th>
        <td><input type="text" id="studentname" name="studentname" value=<?php echo $_POST['studentname'] ?>></td>
    </tr>
   <tr>
    <th>Gender:</th>
    <?php echo $gender = $_POST['gender'] 
    
    ?>
    <td><input type="radio" id="male" name="gender"  <?php echo htmlspecialchars($_POST['gender']) == "Male" ? 'checked' : '' ?> >
    <label for="male">Male</label>
    <input type="radio" id="female" name="gender"   <?php echo htmlspecialchars($_POST['gender']) == "Female" ? 'checked' : 'false' ?>>
    <label for="female">Female</label>
</td>
   </tr>
   <th><label for="grade">Grade:</label></th>
      <td><select name="grade" id="grade">
            <option value="10A"  <?php echo htmlspecialchars($_POST['grade']) == "10A" ? 'selected' : '' ?> >10A</option>
            <option value="10B" <?php echo htmlspecialchars($_POST['grade']) == "10B" ? 'selected' : '' ?>>10B</option>
            <option value="10C" <?php echo htmlspecialchars($_POST['grade']) == "10C" ? 'selected' : '' ?>>10C</option>
      </select></td>
</tr>
<tr>
<th><label for="subjects">Subjects:</label></th>
<td>
    <input type="checkbox" id="subjects" name="subjects[]" value="English" <?php echo in_array('English',$_POST['subjects'])  ? 'selected' : '' ?>>English<br>
    
    <input type="checkbox" id="subjects" name="subjects[]" value="Maths" <?php echo in_array('Maths',$_POST['subjects'])  ? 'selected' : '' ?>>Maths<br>
    
    <input type="checkbox" id="subjects" name="subjects[]" value="Science" <?php echo in_array('Science',$_POST['subjects'])  ? 'selected' : '' ?>>Science<br>
   
</td>
</tr>
<tr>
<th><label for="dob">Date of Birth</label></th>
<td><input type="date" id="dob" name="dob" value=<?php echo $_POST['dob'] ?>></td>
</tr>
<tr>
<th><label for="house">House:</label></th>
<td> <select name="house">
        <option value="red" <?php echo htmlspecialchars($_POST['house']) == "red" ? 'selected' : '' ?>>Red</option>
        <option value="blue" <?php echo htmlspecialchars($_POST['house']) == "blue" ? 'selected' : '' ?>>Blue</option>
        <option value="green" <?php echo htmlspecialchars($_POST['house']) == "green" ? 'selected' : '' ?>>Green</option>
</select></td>
</tr>
  <tr>
    <th><label for="sports">Sports:</label></th>
    <td>
      <select name="sports[]" id="sports" multiple>
            <option value="100m" id="sports" name="sports" <?php echo in_array('100m',$_POST['sports'])  ? 'selected' : '' ?> >100m race</option>
            <option value="highjump" id="sports" name="sports" <?php echo in_array('highjump',$_POST['sports'])  ? 'selected' : '' ?>>High Jump</option>
            <option value="longjump" id="sports" name="sports" <?php echo in_array('longjump',$_POST['sports'])  ? 'selected' : '' ?> >Long Jump</option>
             <option value="200m" id="sports" name="sports" <?php echo in_array('200m',$_POST['sports'])  ? 'selected' : '' ?>>200m race</option>
            <option value="1500m" id="sports" name="sports" <?php echo in_array('1500m',$_POST['sports'])  ? 'selected' : '' ?>>1500m race</option>
      </select>
    </td>
  </tr>
  <tr>
    <th><label for="address">Address:</label></th>
    <td><textarea id="address" name="address" > <?php echo $_POST['address'] ?> </textarea></td>
  </tr>
</table>
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</fieldset>
</form>

    
</body>
</html>







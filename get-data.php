<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
            <th colspan="2">Student Details</th>
        </tr>
        <tr>
            <th>Addmission No</th>
            <td><?php echo $_POST["admissionno"]?></td>
        </tr>
        <tr>
            <th>Father Name</th>
            <td><?php echo $_POST["fathername"] ?? 'No Value'?></td>
        </tr>
          <tr>
            <th>Student Name</th>
            <td><?php echo $_POST["studentname"] ?? 'No value'?></td>
        </tr>
         <tr>
            <th>Gender</th>
            <td><?php echo $_POST["gender"] ?? 'No value'?></td>
        </tr>
          <th>Grade</th>
            <td><?php echo $_POST["grade"] ?? 'No value'?></td>
        </tr>
          <th>Subjects</th>
            <td><?php
           $subjects= $_POST["subjects"] ?? 'No value';
           if(is_array($subjects)){
            foreach($subjects as $subject)
            echo $subject."<br>";
           }else{
            echo "No subjects selected";
           }
           
            ?>
          </td>
        </tr>
        <tr>
            <th>Date of Birth</th>
            <td><?php echo $_POST["dob"]?></td>
        </tr>
        <tr>
            <th>House</th>
            <td><?php echo $_POST["house"]?></td>
        </tr>
        
        <tr>
            <th>Sports</th>
            <td>
                 <?php
            $sports= $_POST["sports"] ?? 'No Value';
          if(is_array($sports)){
            foreach($sports as $sport)
            echo $sport . "<br>";
          }else{
            echo "No Sports selected";
          }
           
            ?>
            </td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $_POST["address"] ?></td>
        </tr>
    </table>
</body>
</html>







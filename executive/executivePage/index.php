<!DOCTYPE html>
<html>
<head>
<style>
 
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
  margin-left : 30%;
  margin-top : 10%;
  border-radius: 10px;
}

.wrapper {
 
  width: 80%;
  margin-left : 20%;
  padding-right : 20%;
  margin-top : 20px;
  padding-bottom : 20px;
  padding-top : 20px;
}
input[type=text] {
    width: 60%;
    padding: 16px 8px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    }

input[type=submit] {
    background-color: #8ebf42;
    color: white;
    padding: 14px 0;
    margin: 10px 0;
    border: none;
    cursor: grabbing;
    width: 20%;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    }
table {
  border-collapse: collapse;
  border: 1px solid #ccc;
  width: 80%;
  margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
}
th, td {
  text-align: left;
  padding: 8px;
}
tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
    margin-left: auto;
    margin-right: auto;
    width: 8em
}
</style>
<title>Executive Page</title>
</head>
<body>
    <div class="card">
        <div class="wrapper">
            <div>
            <h2>Search Student</h2>
                <form method="POST" action="index.php">
                    <input type="text" placeholder = "ID Number" name="roll_no2">
                    <!-- <label>Lastname:</label><input type="text" name="lastname"> -->
                    <input type="submit" value="Search" name="save">
                </form>
            </div>
            <br>
            <div>
                <table border="1">
                    <thead>
                        <th>ID Number</th>
                        <th>First Name</th>
                        <th>Subject/Non-Teaching</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                    <?php
                        error_reporting(0);
                        $conn = mysqli_connect("localhost","root","","studentdata");
                        if(count($_POST)>0) {
                        $roll_no='president';
                        $roll_no2=$_POST['roll_no2'];
                        $roll_no3='Approved';
                        $result = mysqli_query($conn,"SELECT * FROM student where inform = '$roll_no2'");
                        }
                        ?>
                        <?php
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                        ?>
                            
                                <tr>
                                    <td><?php echo $row['inform']; ?></td>
                                    <td><?php echo $row['lastname']; ?></td>
                                    <td><?php echo $row['programname']; ?></td>
                                    <td><?php echo $row['reqstatus']; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['id']; ?>">Action</a>
                                    </td>
                                </tr>
                                <?php
                            $i++;
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
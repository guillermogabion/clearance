<?php
	include('conn.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `student` where  id='$id'");
	$row=mysqli_fetch_array($query);
?>
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
        input[type=text], select, option {
        width: 60%;
        padding: 16px 8px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
        box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        }
        .select-selected {
        background-color: DodgerBlue;
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
</style>
<title>Actions</title>
</head>
<body>
    
<div class="card">
    <div class="wrapper">
        <h2>Action</h2>
        <form method="POST" action="update.php?id=<?php echo $id; ?>">
            <input type="text" value="<?php echo $row['inform']; ?>" name="inform" readonly>
            <input type="text" value="<?php echo $row['lastname']; ?>" name="lastname" readonly>
            <input type="text" value="<?php echo $row['programname']; ?>" name="programname" readonly>
            <input type="text" value="<?php echo $row['mobile']; ?>" name="mobile" readonly>
            <select name="reqstatus" >
                <option value="Cleared">Cleared</option>
                <option value="Rejected">Rejected</option>
            </select><br>
            <input type="submit" name="submit">
            <a href="index.php">Back</a>
        </form>
    </div>
</div>
</body>
</html>
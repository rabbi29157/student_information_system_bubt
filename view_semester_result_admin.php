<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Semester Result</title>
<link rel="stylesheet" type="text/css" href="Style/viewtablesearch.css" />
<style>
a:link, a:visited {
    background-color: #4CAF50;
    color: white;
    padding: 5px 5px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}


a:hover, a:active {
    background-color: green;
}
</style>
</head>
<body>
<br>
<center><font size="8" color="green">Student Information System</font></center>
<center><h1><font color="green">Result Information</font></h1></center>
<br>
	<table>
    	<tr>
		<th>ID</th>
			<th>Semester</th>
			<th>CGPA</th>
			<th>SGPA</th>
            <th>Subject 1</th>
            <th>Subject 2</th>
            <th>Subject 3</th>
			 <th>Subject 4</th>
			 <th>Subject 5</th>
			 <th>Subject 6</th>
			 <th>Subject 7</th>
			 <th>Subject 8</th>

    	</tr>
        <?php
			include "connect.php";
			$i = "select * from result";
			$h = mysql_query($i);
			while($tr=mysql_fetch_array($h))
			{
		?>
        <tr>
        	<td><?php echo $tr[0]; ?></td>
            <td> <?php echo $tr[1]; ?></td>
            <td><?php echo $tr[2]; ?></td>
            <td><?php echo $tr[3]; ?></td>
            <td><?php echo $tr[4]; ?></td>
			<td><?php echo $tr[5]; ?></td>
			<td><?php echo $tr[6]; ?></td>
			<td><?php echo $tr[7]; ?></td>
			<td><?php echo $tr[8]; ?></td>
			<td><?php echo $tr[9]; ?></td>
			<td><?php echo $tr[10]; ?></td>
			<td><?php echo $tr[11]; ?></td>
        </tr>
        <?php
			}
		?>

    </table>
</body>
</html>

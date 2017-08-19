<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDb = "hng_testdb";
$con = mysqli_connect($servername, $username, $password, $myDb);
$dbselect = mysqli_select_db($myDb);
if (!$con) {
        die('could not connect: ' . mysql_error());
    }
$sql = 'SELECT * FROM profile';
		
$query = mysql_query($sql);
if (!$query) {
	die ('SQL Error');
}
?>

<html>
    <head>
        <title>HNG Stage 1</title>
<style>
    body {background-color:lightgray}
        div.content {
            margin: 100px auto;
            width: 50%;
            padding: 50px;
            float: center
        }
       
		.table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}
		.table th, 
		.table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.table thead th {
			background-color: #508abb;
			color: #FFFFFF;
		}
        </style>
    </head>
<body>
<div class="content">
    <table class="table">
		<thead>
			<tr>
				<th>NO</th>
				<th>FULLNAME</th>
				<th>GENDER</th>
				<th>JOB</th>
			</tr>
		</thead>
		<tbody>
		<?php
		$no 	= 1;
		while ($row = mysql_fetch_array($query))
		{
			
			echo '<tr>
					<td>'.$no.'</a></td>
					<td>'.$row['FullName'].'</td>
					<td>'.$row['Gender'].'</td>
                    <td>'.$row['Job'].'</td>
				</tr>';
			
			$no++;
		}?>
		</tbody>
		
	</table>
    </div>
    </body>
</html>
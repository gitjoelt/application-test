<?php

$people = array(
    array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
    array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
    array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
    array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
    array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
 );

?>

<!doctype html>
	<head>
	    <title>eBASE Application Test</title>
	    <style>
	    	.html, body{
	    		width:100%;
	    		margin:0;
	    		padding:0;
	    	}
	    	section{
	    		width:480px;
	    		margin:25px auto;
	    	}
	    	table{
	    		width:100%;
	    		border:1px solid #CCC;
	    		border-collapse: collapse;
	    	}
	    	thead tr td{
	    		font-weight:bold;
	    		border-bottom:1px solid #CCC;
	    	}
	    	td{
	    		padding:10px;
	    		text-align:center;
	    	}
	    </style>
	</head>
	<body>
	    <section>
	        <table>
	            <thead>
	                <tr>
	                	<td>ID</td>
	                    <td>Full Name</td>
	                    <td>Email</td>
	                    <td></td>
	                </tr>
	            </thead>
	            <tbody>   
	                <?php 
	                foreach($people as $person): 
	                $fullname = $person["first_name"] . " " . $person["last_name"];
	                ?>
	                <tr>
	                    <td><?= $person["id"] ?></td>
	                    <td><?= $fullname ?></td>
	                    <td><?= $person["email"] ?></td> 
	                    <td>
	                    	<button onclick="showDetails('<?= $fullname ?>', '<?= $person["email"]?>')">Details</button>
	                    </td> 
	                </tr>
	                <?php endforeach; ?>
	            </tbody>
	        </table>
	    </section>
	    <script>
	        function showDetails(fullname, email) {
	            alert(fullname + "\n" + email);
	        }
	    </script>
	</body>
</html>

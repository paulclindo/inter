<?php
	function apiInter(){
		$api_token = '4f86a4c7e8f1b2505ff9ba5ae58f3c53';
			$url = 'https://crm.zoho.com/crm/private/json/Contacts/getRecords?authtoken='.$api_token.'&scope=crmapi';
		$content = file_get_contents($url);
		$json = json_decode($content,true);
		$data = $json['response']['result']['Contacts']['row'];
		echo "<table>";
		echo "<tr>";
		echo "<th>First Name</th>";
		echo "<th>Last Name</th>";
		echo "<th>Email</th>";
		echo "</tr>";
	    foreach($data as $i => $item) {
				echo "<tr>";
	    		echo "<td>". $data[$i]['FL'][3]['content'] . "</td>";
	    		echo "<td>". $data[$i]['FL'][4]['content'] . "</td>";
	    		echo "<td>". $data[$i]['FL'][5]['content'] . "</td>";
	    	echo "</tr>";
			}
			echo "</table>";
	}

	if($_SERVER['REQUEST_METHOD'] == "POST")
    {
			apiInter();
    }
?>
<html>
	<head>
		<title>Consuming API Data</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>

		<h1>Get data from Zoho - Paul Ccari </h1>
		<form class="form"  method="post">
    	<input type="submit" value="GO FOR IT!" />
		</form>

	</body>
</html>

<!-- //Taking some notes for php request
		// Sample data for Accounts
		// $url = 'https://crm.zoho.com/crm/private/json/Contacts/getRecords?authtoken='.$api_token.'&scope=crmapi&fromIndex=0&toIndex=4';
		// $url = 'https://crm.zoho.com/crm/private/xml/Leads/getRecords?authtoken='.$api_token.'&scope=crmapi&selectColumns=Leads(First Name,Last Name,Email,Company,Campaign Source)&version=1';

		// var_dump($data[1]);
		// print_r($data);
		// print $data[0]['FL'][3]['content'];
		// print $data[0]['FL'][4]['content'];
		// print $data[0]['FL'][7]['content'];
		// print $data[1]['FL'][3]['content'];

		// print $data[1]['FL'][4]['content'];
		// print $data[1]['FL'][7]['content'];



Script for api -->
		<!-- <script type="text/javascript">
			// const content = document.getElementById('content')
			// // content.addEventListener('click', )

			// const getConnection = () => {
			// const $api_token = '4f86a4c7e8f1b2505ff9ba5ae58f3c53'
			// const URL = 'https://crm.zoho.com/crm/private/json/Leads/getRecords?authtoken='+ $api_token +'	&scope=crmapi';
		//   	fetch(URL, mode{no-cors})
		//   	  .then(response => response.json())
		//   	  .then(response =>
		//   	    {console.log(response);
		//   	    });
			// }
			// getConnection();
		</script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<style>
    th{ 
        color:#fff;
            }
</style>

<div class="month" style=" overflow: scroll; height: calc(50vh - 10px); margin-top:20px ">
<table class="table">
    <tr  class="bg-info">
        <th data-column="month" data-order="desc1">年度 &#9650</th>
        <th data-column="month1" data-order="desc1">現金股利 &#9650</th>
        <th data-column="month2" data-order="desc1">股票股利 &#9650</th>
		<th data-column="month3" data-order="desc1">除息日 &#9650</th>
		<th data-column="month4" data-order="desc1">除權日 &#9650</th>
		<th data-column="month5" data-order="desc1">股東會日期 &#9650</th>
    </tr>

    <tbody id="myTable1">
        
    </tbody>
</table>
</div>
<script>

	

	var myArray = [
	 
		
<?php

require_once('conn.php');






if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$input = $_POST['input'];

	$sql = "SELECT * FROM month  WHERE stock LIKE '%" . $input . "%' ";

	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result)) {
		while ($row = mysqli_fetch_assoc($result)) {










			
			echo "{'month':'$row[date]','month1': '$row[month1]', 'month2': '$row[month2]', 'month3': '$row[month3]', 'month4': '$row[month4]'},  ";
		}
	}
} else {
	require_once('conn.php');







	$input = '2330';

	$sql = "SELECT * FROM month  WHERE stock LIKE '%" . $input . "%' ";

	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result)) {
		while ($row = mysqli_fetch_assoc($result)) {










			echo "{'month':'$row[date]','month1': '$row[month1]', 'month2': '$row[month2]', 'month3': '$row[month3]', 'month4': '$row[month4]'},  ";
		}
	}
}

?>

	]


	$('th').on('click', function(){
		var column = $(this).data('column')
		var order = $(this).data('order')
		var text = $(this).html()
		text = text.substring(0, text.length - 1)

		if(order == 'desc1'){
			$(this).data('order', "asc")
			myArray = myArray.sort((a,b) => a[column] > b[column] ? 1 : -1)
			text += '&#9660'

		}else{
			$(this).data('order', "desc1")
			myArray = myArray.sort((a,b) => a[column] < b[column] ? 1 : -1)
			text += '&#9650'

		}
		$(this).html(text)
		buildTable(myArray)
	})

	buildTable(myArray)

	function buildTable(data){
		var table = document.getElementById('myTable1')
		table.innerHTML = ''
		for (var i = 0; i < data.length; i++){
			var row = `<tr>
							<td data-label='年度'>${data[i].month}</td>
							<td data-label='現金股利'>${data[i].month1}</td>
							<td data-label='股票股利'>${data[i].month2}</td>
							<td data-label='除息日' >${data[i].month3}</td>
							<td data-label='除權日' >${data[i].month4}</td>
						
					  </tr>`
			table.innerHTML += row
			

		}
	}
	

   
  
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<style>
    th{ 
        color:#fff;
            }
</style>


<table class="table">
    <tr  class="bg-info">
        <th data-column="date" data-order="desc">日期 &#9650</th>
        <th data-column="month1" data-order="desc">單月合併營收(千) &#9650</th>
        <th data-column="month2" data-order="desc">去年單月營收(千) &#9650</th>
		<th data-column="month3" data-order="desc">累計合併營收成長 &#9650</th>
		<th data-column="month4" data-order="desc">單月營收年成長 &#9650</th>
    </tr>

    <tbody id="myTable">
        
    </tbody>
</table>

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










			echo "{'date':'$row[date]','month1': '$row[month1]', 'month2': '$row[month2]', 'month3': '$row[month3]', 'month4': '$row[month4]'},  ";
		}
	}
} else {
	require_once('conn.php');







	$input = '2330';

	$sql = "SELECT * FROM month  WHERE stock LIKE '%" . $input . "%' ";

	$result = mysqli_query($con, $sql);

	if (mysqli_num_rows($result)) {
		while ($row = mysqli_fetch_assoc($result)) {










			echo "{'date':'$row[date]','month1': '$row[month1]', 'month2': '$row[month2]', 'month3': '$row[month3]', 'month4': '$row[month4]'},  ";
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

		if(order == 'desc'){
			$(this).data('order', "asc")
			myArray = myArray.sort((a,b) => a[column] > b[column] ? 1 : -1)
			text += '&#9660'

		}else{
			$(this).data('order', "desc")
			myArray = myArray.sort((a,b) => a[column] < b[column] ? 1 : -1)
			text += '&#9650'

		}
		$(this).html(text)
		buildTable(myArray)
	})

	buildTable(myArray)

	function buildTable(data){
		var table = document.getElementById('myTable')
		table.innerHTML = ''
		for (var i = 0; i < data.length; i++){
			var row = `<tr>
							<td data-label='日期'>${data[i].date}</td>
							<td>${data[i].month1}</td>
							<td>${data[i].month2}</td>
							<td>${data[i].month3}</td>
							<td>${data[i].month4}</td>
					  </tr>`
			table.innerHTML += row


		}
	}

</script>
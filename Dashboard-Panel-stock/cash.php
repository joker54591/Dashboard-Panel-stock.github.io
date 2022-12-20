<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<link rel="stylesheet" href="css/style.css">
<style>
	th {
		color: #fff;
	}
</style>

<div class="month" style=" overflow: scroll; height: calc(50vh - 10px); margin-top:20px ">
	<table class="table">
		<tr class="bg-info">
			<th data-column="money" data-order="desc">年度 &#9650</th>
			<th data-column="money1" data-order="desc">現金股利 &#9650</th>
			<th data-column="money2" data-order="desc">股票股利 &#9650</th>
			<th data-column="cash" data-order="desc">股利合計 &#9650</th>
			<th data-column="money3" data-order="desc">除息日 &#9650</th>
			<th data-column="money4" data-order="desc">除權日 &#9650</th>

		</tr>

		<tbody id="myTable2">

		</tbody>
	</table>
</div>
<script>
	var myArray1 = [


		<?php

		require_once('conn.php');






		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$input = $_POST['input'];

			$sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";

			$result = mysqli_query($con, $sql);

			if (mysqli_num_rows($result)) {
				while ($row = mysqli_fetch_assoc($result)) {











					echo "{'money':'$row[date]','money1': '$row[money]', 'money2': '$row[money1]', 'money3': '$row[money3]', 'money4': '$row[money6]', 'cash': '$row[money2]'},  ";
				}
			}
		} else {
			require_once('conn.php');







			$input = '2330';

			$sql = "SELECT * FROM investors  WHERE stock LIKE '%" . $input . "%' ";

			$result = mysqli_query($con, $sql);

			if (mysqli_num_rows($result)) {
				while ($row = mysqli_fetch_assoc($result)) {










					echo "{'money':'$row[date]','money1': '$row[money]', 'money2': '$row[money1]', 'money3': '$row[money3]', 'money4': '$row[money6]', 'cash': '$row[money2]'},  ";
				}
			}
		}

		?>

	]


	$('th').on('click', function() {
		var column = $(this).data('column')
		var order = $(this).data('order')
		var text = $(this).html()
		text = text.substring(0, text.length - 1)

		if (order == 'desc') {
			$(this).data('order', "asc")
			myArray1 = myArray1.sort((a, b) => a[column] > b[column] ? 1 : -1)
			text += '&#9660'

		} else {
			$(this).data('order', "desc")
			myArray1 = myArray1.sort((a, b) => a[column] < b[column] ? 1 : -1)
			text += '&#9650'

		}
		$(this).html(text)
		buildTable(myArray1)
	})

	buildTable(myArray1)

	function buildTable(data) {
		var table = document.getElementById('myTable2')
		table.innerHTML = ''
		for (var i = 0; i < data.length; i++) {
			var row = `<tr>
							<td data-label='年度'>${data[i].money}</td>
							<td data-label='現金股利'>${data[i].money1}</td>
							<td data-label='股票股利'>${data[i].money2}</td>
							<td data-label='股利合計' >${data[i].cash}</td>
							<td data-label='除息日' >${data[i].money3}</td>
							<td data-label='除權日' >${data[i].money4}</td>
							
					  </tr>`
			table.innerHTML += row


		}
	}
</script>
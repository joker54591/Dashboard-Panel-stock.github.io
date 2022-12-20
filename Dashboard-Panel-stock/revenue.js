$(document).ready(function () {
  $('#exampleDataList').keyup(function () {
    var input = $(this).val();
    if (input != "") {
      $.ajax(
        {
          url: 'revenue.php ',
          method: 'POST',
          data: { input: input },
          success: function (data) {
            $('#datalistOptions').html(data);
          }
        })
    }
    else {
      $('#datalistOptions').html('');
    }
    $(document).on('click', 'a', function () {
      $('#exampleDataList').val($(this).text());
      $('#datalistOptions').html('');
    })
  })
})

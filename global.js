$('#add').on('submit', function() {
  var that = (this),
    contents = that.serialize();

  $.ajax({
    url: 'add.php',
    dataType: 'json',
    type: 'post',
    data: contents,
    success: function(data) {
      if(data.success) {
        after('the result is '+data.result);
      }
    }
  });
  return false;
});

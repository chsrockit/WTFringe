$(function () {
  $('#eventinfo').hide();
  $('#expanddescription').click(function (event) {
    $('#eventinfo').slideDown();
    $('#expanddescription').hide();
  });
});

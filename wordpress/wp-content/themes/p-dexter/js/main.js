$(document).ready(function() {

  function filterPKM() {
    var type = $(':checkbox:checked').map(function() {
      return this.value;
    }).get();
    var goodType = type.join(",");
    $(".pokemon").hide().filter(goodType).show();
  }
  filterPKM();
  $(":checkbox").change(filterPKM);

} ); // ends document ready

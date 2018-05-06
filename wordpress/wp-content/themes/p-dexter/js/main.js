jQuery(document).ready(function() {

  function filterPKM() {
    var type = jQuery(':checkbox:checked').map(function() {
      return this.value;
    }).get();
    var goodType = type.join(",");
    jQuery(".pokemon").hide().filter(goodType).show();
  }
  filterPKM();
  jQuery(":checkbox").change(filterPKM);

} ); // ends document ready

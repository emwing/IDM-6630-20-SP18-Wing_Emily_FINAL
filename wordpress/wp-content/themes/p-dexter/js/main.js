jQuery(document).ready(function() {

  // filter pokedex based on pokemon type
  jQuery('.typeBox').off().on('click', function() {
    var $name = jQuery(this).attr("name");
    var $post = jQuery('.pokemon');

    if( jQuery(this).is(':checked')) {
      alert('yay');
      // $("#ProjectListButton").show();
    } else {
      alert('boo');
      // $("#ProjectListButton").hide();
    }
  });
  // $('input[type="checkbox"]').change(function () {
  //   var $name = $(this).attr("name");
  //   var $typeBox = $("#waterCB");
  //   if $typeBox.is(':checked')) {
  //     console.log('yay');
  //   } else {
  //     console.log('boo');
  //   }
  // })

} ); // ends document ready

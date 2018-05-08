(function( $ ) {

  "use strict";

  $(document).ready(function() {

    var $label = $("label.typeBox"); // get all of the filters
    var $showHide = $(".checkbox.all"); // get the reset filter
    var $singleFilter = $(".checkbox.single");

    // start with all filters checked (all pokemon visible)
      // if all pokemon are visible and filter is clicked, pokemon of that type will be hidden and filter will go grey
      // if all pokemon are hidden and filter is clicked, pokemon of that type will be shown and filter will return to color
      // if all pokemon are visible, show/hide is checked
      // if any or all pokemon are hidden, show/hide is unchecked
      // if any or all pokemon are hidden, clicking show hide will set all to checked
    $(".checkbox").change(function() {
      var $self = $(this)
      var checkboxVal = $self.val()
      var selector = checkboxVal === "all" ? ".pokemon" : ".pokemon" + checkboxVal;

      if ($self.is(":checked")) {
        $(selector).show();
      } else {
        $(selector).hide();
      }

      if (checkboxVal === "all") {
        $(".checkbox.single").prop("checked", $self.is(":checked"));
        $label.removeClass("inactive");
      } else {
        if ($singleFilter.is(":checked").length === $singleFilter.length) {
          $showHide.prop("checked", true);
          $showHide.removeClass("inactive");
        } else {
          $showHide.prop("checked", false);
        }
      } // end un/check show/hide if some of others are un/checked

      if ($(".checkbox:checked").size() == 0) {
        $showHide.addClass("inactive");
        $label.addClass("inactive");
      } // end if all are unchecked

      if ($showHide.is(":checked")) {
        $singleFilter.prop("checked", true);
        $showHide.removeClass("inactive");
      } // end if show/hide is checked
    }); // end .change(function)

    $label.click(function() {
      $(this).toggleClass("inactive");
    });

  } ); // ends document ready

})(jQuery);

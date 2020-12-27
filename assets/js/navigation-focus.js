var batpa_Keyboard_loop = function (elem) {
  var batpa_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var batpa_firstTabbable = batpa_tabbable.first();
  var batpa_lastTabbable = batpa_tabbable.last();
  batpa_firstTabbable.focus();

  batpa_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
        e.preventDefault();
        batpa_firstTabbable.focus();
    }
  });

  batpa_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
        e.preventDefault();
        batpa_lastTabbable.focus();
    }
  });

  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
        elem.hide();
    };
  });
};
var bepta_Keyboard_loop = function (elem) {
  var bepta_tabbable = elem.find('select, input, textarea, button, a').filter(':visible');
  var bepta_firstTabbable = bepta_tabbable.first();
  var bepta_lastTabbable = bepta_tabbable.last();
  bepta_firstTabbable.focus();

  bepta_lastTabbable.on('keydown', function (e) {
    if ((e.which === 9 && !e.shiftKey)) {
        e.preventDefault();
        bepta_firstTabbable.focus();
    }
  });

  bepta_firstTabbable.on('keydown', function (e) {
    if ((e.which === 9 && e.shiftKey)) {
        e.preventDefault();
        bepta_lastTabbable.focus();
    }
  });

  elem.on('keyup', function (e) {
    if (e.keyCode === 27) {
        elem.hide();
    };
  });
};
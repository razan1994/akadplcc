
// show number item
function myRowOne() {

    $('#i_show_num').addClass('col-md-12')

    var divs = document.querySelectorAll('#i_show_num');
    for (var i = 0; i < divs.length; i++) {
        divs[i].classList.add('col-md-12');
    }
  }

  function myRowThree() {

    $('#i_show_num').removeClass('col-md-12')

    var divs = document.querySelectorAll('#i_show_num');
    for (var i = 0; i < divs.length; i++) {
        divs[i].classList.remove('col-md-12');
    }
  }

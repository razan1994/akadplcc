$(document).ready(function() {
    'use strict';

    $('.select2').select2({
        minimumResultsForSearch: Infinity
    });
    $('#select-Categories1').select2({
        minimumResultsForSearch: ''
    });
    $('#select-Categories2').select2({
        minimumResultsForSearch: ''
    });
    $('#select-Categories3').select2({
        minimumResultsForSearch: ''
    });
    $('#select-Categories4').select2({
        minimumResultsForSearch: ''
    });
    $('#select-Categories5').select2({
        minimumResultsForSearch: ''
    });
    $('#select-Categories6').select2({
        minimumResultsForSearch: ''
    });
    $('#select-Categories7').select2({
        minimumResultsForSearch: ''
    });
    $('#select-Categories8').select2({
        minimumResultsForSearch: ''
    });
    $('#select-Categories9').select2({
        minimumResultsForSearch: ''
    });
    $('#select-Categories10').select2({
        minimumResultsForSearch: ''
    });

    // Select2 by showing the search
    $('.select2-show-search').select2({
        minimumResultsForSearch: '',
    });

    $('#job').select2({
        minimumResultsForSearch: '',

    });
    $('#employe').select2({
        minimumResultsForSearch: '',
    });

    function formatState(state) {
        if (!state.id) {
            return state.text;
        }
        if (state.element.value.toLowerCase() != "country" && state.element.value.toLowerCase() != "do1" && state.element.value.toLowerCase() != "in1") {
            var $state = $(
                '<span><img src="../front_end_style/assets/images/flags/' + state.element.value.toLowerCase() +
                '.svg" class="img-flag" /> ' +
                state.text + '</span>'
            );
            return $state;
        }
    };

    $(".select2-flag-search").select2({
        templateResult: formatState,
        templateSelection: formatState,
        escapeMarkup: function(m) { return m; }
    });

    $("select2").select2({
        width: '100%'
    });
    $(".ad-post-status").select2({
        width: '100%',
        theme: "classic"
    });
    $(".select2-show-search").select2({
        width: '100%'
    });
    $(".search-price-max").select2({
        width: '100%'
    });
    $(".search-loaction").select2({
        width: '100%'
    });
    $(".make").select2({
        width: '100%'
    });
    $(".model").select2({
        width: '100%'
    });
    $(".bodytype").select2({
        width: '100%'
    });
    $(".search-year").select2({
        allowClear: true,
        width: '100%'
    });

});
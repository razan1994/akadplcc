$(document).ready(function() {
    setTimeout(() => {
        getHospitalRegions();
        getDoctorRegions();
        getPharmacyRegions();
        getGymRegions();
        getLifeCoachRegions();
        getMedicalCenterRegions();
        getRadiologyCenterRegions();
        getLabRegions();
    }, 500);


    $(document).on("change", "#country_id_hospital", function() {
        getHospitalRegions($(this));
    });

    $(document).on("change", "#country_id_doctor", function() {
        getDoctorRegions($(this));
    });

    $(document).on("change", "#country_id_pharmacy", function() {
        getPharmacyRegions($(this));
    });

    $(document).on("change", "#country_id_gym", function() {
        getGymRegions($(this));
    });


    $(document).on("change", "#country_id_life_coach", function() {
        getLifeCoachRegions($(this));
    });

    $(document).on("change", "#country_id_medical_center", function() {
        getMedicalCenterRegions($(this));
    });

    $(document).on("change", "#country_id_radiology_center", function() {
        getRadiologyCenterRegions($(this));
    });

    $(document).on("change", "#country_id_lab", function() {
        getLabRegions($(this));
    });
});


function getHospitalRegions(x) {
    formData = new FormData();
    // $("#country_id_hospital").data('id');
    country_id = $('option:selected', x).data('id');
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    formData.append('country_id', country_id);
    // country_id

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "http://rushetta.website/en/frontGetRegions",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
            if (data.status == true) {
                var selectRegions = '<option value="">Region</option>';
                var name = "Nothing Selected..";
                for (var key in data.regions) {
                    // skip loop if the property is from prototype
                    if (!data.regions.hasOwnProperty(key)) continue;

                    var obj = data.regions[key];
                    // alert(obj.id);
                    for (var prop in obj) {
                        // skip loop if the property is from prototype
                        if (!obj.hasOwnProperty(prop)) continue;

                        // your code
                        selectRegions += '<option value="' + obj.id + '">' + obj.name_ar +
                            '</option>';
                        break;
                    }
                }
                $('#region_id_hospital').html(selectRegions);

                // $('.selectpicker').selectpicker('refresh');
                // $selected_value = $("#region_id_div").find('.filter-option-inner-inner');
                // // alert(name);
                // $selected_value.text(name);
            }
            // console.log('fooooooo');

        },
        error: function(reject) {
            var response = $.parseJSON(reject.responseText);
            $.each(response.errors, function(key, val) {
                $("#" + key + "_error").text(val[0]);
            });
        }
    });
}

function getDoctorRegions(x) {
    formData = new FormData();
    // $("#country_id_hospital").data('id');
    country_id = $('option:selected', x).data('id');
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    formData.append('country_id', country_id);
    // country_id

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "http://rushetta.website/en/frontGetRegions",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
            if (data.status == true) {
                var selectRegions = '<option value="">Region</option>';
                var name = "Nothing Selected..";
                for (var key in data.regions) {
                    // skip loop if the property is from prototype
                    if (!data.regions.hasOwnProperty(key)) continue;

                    var obj = data.regions[key];
                    // alert(obj.id);
                    for (var prop in obj) {
                        // skip loop if the property is from prototype
                        if (!obj.hasOwnProperty(prop)) continue;

                        // your code
                        selectRegions += '<option value="' + obj.id + '">' + obj.name_ar +
                            '</option>';
                        break;
                    }
                }
                $('#region_id_doctor').html(selectRegions);

                // $('.selectpicker').selectpicker('refresh');
                // $selected_value = $("#region_id_div").find('.filter-option-inner-inner');
                // // alert(name);
                // $selected_value.text(name);
            }
            // console.log('fooooooo');

        },
        error: function(reject) {
            var response = $.parseJSON(reject.responseText);
            $.each(response.errors, function(key, val) {
                $("#" + key + "_error").text(val[0]);
            });
        }
    });
}

function getPharmacyRegions(x) {
    formData = new FormData();
    // $("#country_id_pharmacy").data('id');
    country_id = $('option:selected', x).data('id');
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    formData.append('country_id', country_id);
    // country_id

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "http://rushetta.website/en/frontGetRegions",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
            if (data.status == true) {
                var selectRegions = '<option value="">Region</option>';
                var name = "Nothing Selected..";
                for (var key in data.regions) {
                    // skip loop if the property is from prototype
                    if (!data.regions.hasOwnProperty(key)) continue;

                    var obj = data.regions[key];
                    // alert(obj.id);
                    for (var prop in obj) {
                        // skip loop if the property is from prototype
                        if (!obj.hasOwnProperty(prop)) continue;

                        // your code
                        selectRegions += '<option value="' + obj.id + '">' + obj.name_ar +
                            '</option>';
                        break;
                    }
                }
                $('#region_id_pharmacy').html(selectRegions);

                // $('.selectpicker').selectpicker('refresh');
                // $selected_value = $("#region_id_div").find('.filter-option-inner-inner');
                // // alert(name);
                // $selected_value.text(name);
            }
            // console.log('fooooooo');

        },
        error: function(reject) {
            var response = $.parseJSON(reject.responseText);
            $.each(response.errors, function(key, val) {
                $("#" + key + "_error").text(val[0]);
            });
        }
    });
}

function getGymRegions(x) {
    formData = new FormData();
    // $("#country_id_gym").data('id');
    country_id = $('option:selected', x).data('id');
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    formData.append('country_id', country_id);
    // country_id

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "http://rushetta.website/en/frontGetRegions",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
            if (data.status == true) {
                var selectRegions = '<option value="">Region</option>';
                var name = "Nothing Selected..";
                for (var key in data.regions) {
                    // skip loop if the property is from prototype
                    if (!data.regions.hasOwnProperty(key)) continue;

                    var obj = data.regions[key];
                    // alert(obj.id);
                    for (var prop in obj) {
                        // skip loop if the property is from prototype
                        if (!obj.hasOwnProperty(prop)) continue;

                        // your code
                        selectRegions += '<option value="' + obj.id + '">' + obj.name_ar +
                            '</option>';
                        break;
                    }
                }
                $('#region_id_gym').html(selectRegions);

                // $('.selectpicker').selectpicker('refresh');
                // $selected_value = $("#region_id_div").find('.filter-option-inner-inner');
                // // alert(name);
                // $selected_value.text(name);
            }
            // console.log('fooooooo');

        },
        error: function(reject) {
            var response = $.parseJSON(reject.responseText);
            $.each(response.errors, function(key, val) {
                $("#" + key + "_error").text(val[0]);
            });
        }
    });
}


function getLifeCoachRegions(x) {
    formData = new FormData();
    // $("#country_id_life_coach").data('id');
    country_id = $('option:selected', x).data('id');
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    formData.append('country_id', country_id);
    // country_id

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "http://rushetta.website/en/frontGetRegions",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
            if (data.status == true) {
                var selectRegions = '<option value="">Region</option>';
                var name = "Nothing Selected..";
                for (var key in data.regions) {
                    // skip loop if the property is from prototype
                    if (!data.regions.hasOwnProperty(key)) continue;

                    var obj = data.regions[key];
                    // alert(obj.id);
                    for (var prop in obj) {
                        // skip loop if the property is from prototype
                        if (!obj.hasOwnProperty(prop)) continue;

                        // your code
                        selectRegions += '<option value="' + obj.id + '">' + obj.name_ar +
                            '</option>';
                        break;
                    }
                }
                $('#region_id_life_coach').html(selectRegions);

                // $('.selectpicker').selectpicker('refresh');
                // $selected_value = $("#region_id_div").find('.filter-option-inner-inner');
                // // alert(name);
                // $selected_value.text(name);
            }
            // console.log('fooooooo');

        },
        error: function(reject) {
            var response = $.parseJSON(reject.responseText);
            $.each(response.errors, function(key, val) {
                $("#" + key + "_error").text(val[0]);
            });
        }
    });
}


function getMedicalCenterRegions(x) {
    formData = new FormData();
    // $("#country_id_medical_center").data('id');
    country_id = $('option:selected', x).data('id');
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    formData.append('country_id', country_id);
    // country_id

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "http://rushetta.website/en/frontGetRegions",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
            if (data.status == true) {
                var selectRegions = '<option value="">Region</option>';
                var name = "Nothing Selected..";
                for (var key in data.regions) {
                    // skip loop if the property is from prototype
                    if (!data.regions.hasOwnProperty(key)) continue;

                    var obj = data.regions[key];
                    // alert(obj.id);
                    for (var prop in obj) {
                        // skip loop if the property is from prototype
                        if (!obj.hasOwnProperty(prop)) continue;

                        // your code
                        selectRegions += '<option value="' + obj.id + '">' + obj.name_ar +
                            '</option>';
                        break;
                    }
                }
                $('#region_id_medical_center').html(selectRegions);

                // $('.selectpicker').selectpicker('refresh');
                // $selected_value = $("#region_id_div").find('.filter-option-inner-inner');
                // // alert(name);
                // $selected_value.text(name);
            }
            // console.log('fooooooo');

        },
        error: function(reject) {
            var response = $.parseJSON(reject.responseText);
            $.each(response.errors, function(key, val) {
                $("#" + key + "_error").text(val[0]);
            });
        }
    });
}

function getRadiologyCenterRegions(x) {
    formData = new FormData();
    // $("#country_id_radiology_center").data('id');
    country_id = $('option:selected', x).data('id');
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    formData.append('country_id', country_id);
    // country_id

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "http://rushetta.website/en/frontGetRegions",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
            if (data.status == true) {
                var selectRegions = '<option value="">Region</option>';
                var name = "Nothing Selected..";
                for (var key in data.regions) {
                    // skip loop if the property is from prototype
                    if (!data.regions.hasOwnProperty(key)) continue;

                    var obj = data.regions[key];
                    // alert(obj.id);
                    for (var prop in obj) {
                        // skip loop if the property is from prototype
                        if (!obj.hasOwnProperty(prop)) continue;

                        // your code
                        selectRegions += '<option value="' + obj.id + '">' + obj.name_ar +
                            '</option>';
                        break;
                    }
                }
                $('#region_id_radiology_center').html(selectRegions);

                // $('.selectpicker').selectpicker('refresh');
                // $selected_value = $("#region_id_div").find('.filter-option-inner-inner');
                // // alert(name);
                // $selected_value.text(name);
            }
            // console.log('fooooooo');

        },
        error: function(reject) {
            var response = $.parseJSON(reject.responseText);
            $.each(response.errors, function(key, val) {
                $("#" + key + "_error").text(val[0]);
            });
        }
    });
}


function getLabRegions(x) {
    formData = new FormData();
    // $("#country_id_lab").data('id');
    country_id = $('option:selected', x).data('id');
    formData.append('_token', $('meta[name="csrf-token"]').attr('content'));
    formData.append('country_id', country_id);
    // country_id

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "http://rushetta.website/en/frontGetRegions",
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        cache: false,
        success: function(data) {
            if (data.status == true) {
                var selectRegions = '<option value="">Region</option>';
                var name = "Nothing Selected..";
                for (var key in data.regions) {
                    // skip loop if the property is from prototype
                    if (!data.regions.hasOwnProperty(key)) continue;

                    var obj = data.regions[key];
                    // alert(obj.id);
                    for (var prop in obj) {
                        // skip loop if the property is from prototype
                        if (!obj.hasOwnProperty(prop)) continue;

                        // your code
                        selectRegions += '<option value="' + obj.id + '">' + obj.name_ar +
                            '</option>';
                        break;
                    }
                }
                $('#region_id_lab').html(selectRegions);

                // $('.selectpicker').selectpicker('refresh');
                // $selected_value = $("#region_id_div").find('.filter-option-inner-inner');
                // // alert(name);
                // $selected_value.text(name);
            }
            // console.log('fooooooo');

        },
        error: function(reject) {
            var response = $.parseJSON(reject.responseText);
            $.each(response.errors, function(key, val) {
                $("#" + key + "_error").text(val[0]);
            });
        }
    });
}

// .on('keyup',function(){

// });

$('#search_hospital_btn').on('click', function() {

    country = $('option:selected', '#country_id_hospital').text();
    region = $('option:selected', '#region_id_hospital').text();
    text = $('#search_hospital').val();
    ref = "http://rushetta.website/en/search-hospital";

    country_seo = country.replaceAll(" ", "-");
    region_seo = region.replaceAll(" ", "-");
    text_seo = text.replaceAll(" ", "-");

    ref += "/" + country_seo + "/" + region_seo + "/" + text_seo;
    // console.log(country);


    $(this).attr("href", ref);

    $(this).click();
});

$('#search_doctor_btn').on('click', function() {

    country = $('option:selected', '#country_id_doctor').text();
    region = $('option:selected', '#region_id_doctor').text();
    speciality = $('option:selected', '#speciality_id_doctor').text();
    text = $('#search_doctor').val();
    ref = "http://rushetta.website/en/search-doctor";

    country_seo = country.replaceAll(" ", "-");
    region_seo = region.replaceAll(" ", "-");
    speciality_seo = speciality.replaceAll(" ", "-");
    text_seo = text.replaceAll(" ", "-");

    ref += "/" + country_seo + "/" + region_seo + "/" + speciality_seo + "/" + text_seo;
    // console.log(country);


    $(this).attr("href", ref);

    $(this).click();
});

$('#search_pharmacy_btn').on('click', function() {

    country = $('option:selected', '#country_id_pharmacy').text();
    region = $('option:selected', '#region_id_pharmacy').text();
    text = $('#search_pharmacy').val();
    ref = "http://rushetta.website/en/search-pharmacy";

    country_seo = country.replaceAll(" ", "-");
    region_seo = region.replaceAll(" ", "-");
    text_seo = text.replaceAll(" ", "-");

    ref += "/" + country_seo + "/" + region_seo + "/" + text_seo;
    // console.log(country);


    $(this).attr("href", ref);

    $(this).click();
});

$('#search_gym_btn').on('click', function() {

    country = $('option:selected', '#country_id_gym').text();
    region = $('option:selected', '#region_id_gym').text();
    text = $('#search_gym').val();
    ref = "http://rushetta.website/en/search-fitness-centers') }}";

    country_seo = country.replaceAll(" ", "-");
    region_seo = region.replaceAll(" ", "-");
    text_seo = text.replaceAll(" ", "-");

    ref += "/" + country_seo + "/" + region_seo + "/" + text_seo;
    // console.log(country);


    $(this).attr("href", ref);

    $(this).click();
});

$('#search_life_coach_btn').on('click', function() {

    country = $('option:selected', '#country_id_life_coach').text();
    region = $('option:selected', '#region_id_life_coach').text();
    text = $('#search_life_coach').val();
    ref = "http://rushetta.website/en/search-life-coach";

    country_seo = country.replaceAll(" ", "-");
    region_seo = region.replaceAll(" ", "-");
    text_seo = text.replaceAll(" ", "-");

    ref += "/" + country_seo + "/" + region_seo + "/" + text_seo;
    // console.log(country);


    $(this).attr("href", ref);

    $(this).click();
});


$('#search_medical_center_btn').on('click', function() {

    country = $('option:selected', '#country_id_medical_center').text();
    region = $('option:selected', '#region_id_medical_center').text();
    text = $('#search_medical_center').val();
    ref = "http://rushetta.website/en/search-medical-center";

    country_seo = country.replaceAll(" ", "-");
    region_seo = region.replaceAll(" ", "-");
    text_seo = text.replaceAll(" ", "-");

    ref += "/" + country_seo + "/" + region_seo + "/" + text_seo;
    // console.log(country);


    $(this).attr("href", ref);

    $(this).click();
});


$('#search_radiology_center_btn').on('click', function() {

    country = $('option:selected', '#country_id_radiology_center').text();
    region = $('option:selected', '#region_id_radiology_center').text();
    text = $('#search_radiology_center').val();
    ref = "http://rushetta.website/en/search-radiology-center";

    country_seo = country.replaceAll(" ", "-");
    region_seo = region.replaceAll(" ", "-");
    text_seo = text.replaceAll(" ", "-");

    ref += "/" + country_seo + "/" + region_seo + "/" + text_seo;
    // console.log(country);


    $(this).attr("href", ref);

    $(this).click();
});


$('#search_lab_btn').on('click', function() {

    country = $('option:selected', '#country_id_lab').text();
    region = $('option:selected', '#region_id_lab').text();
    text = $('#search_lab').val();
    ref = "http://rushetta.website/en/search-lab";

    country_seo = country.replaceAll(" ", "-");
    region_seo = region.replaceAll(" ", "-");
    text_seo = text.replaceAll(" ", "-");

    ref += "/" + country_seo + "/" + region_seo + "/" + text_seo;
    // console.log(country);


    $(this).attr("href", ref);

    $(this).click();
});
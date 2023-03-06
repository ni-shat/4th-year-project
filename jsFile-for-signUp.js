

document.getElementById('shown-eye1').addEventListener('click', function () {
    document.getElementById('shown-eye1').style.display = "none";
    document.getElementById('hidden-eye1').style.display = "block";
})

document.getElementById('hidden-eye1').addEventListener('click', function () {
    document.getElementById('hidden-eye1').style.display = "none";
    document.getElementById('shown-eye1').style.display = "block";
})



document.getElementById('shown-eye2').addEventListener('click', function () {
    document.getElementById('shown-eye2').style.display = "none";
    document.getElementById('hidden-eye2').style.display = "block";
})

document.getElementById('hidden-eye2').addEventListener('click', function () {
    document.getElementById('hidden-eye2').style.display = "none";
    document.getElementById('shown-eye2').style.display = "block";
})




$(document).ready(function (e) {

    $('input:radio').change(function () {

        if ($("input[name='default-radio']:checked").val() == 'tutor') {
            console.log($("input[name='default-radio']:checked").val());
            document.getElementById('nameForTutor').value = "";
            $('#hidden-name-gender').css("display", "inline-flex");
            $('#hidden-name-gender').css("margin-top", "0");
            $('#shown-name').css("display", "none");
        }
        else if ($("input[name='default-radio']:checked").val() == 'gurdian') {
            console.log($("input[name='default-radio']:checked").val());
            document.getElementById('nameForGurdian').value = "";
            $('#hidden-name-gender').css("display", "none");
            $('#shown-name').css("display", "inline-flex");
        }
    });


    $("#form").on('submit', function (e) {
        e.preventDefault();

        $.ajax({

            type: 'POST',
            url: 'actionPage-signUp.php',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,

            beforeSend: function () {
                $('#form').css("opacity", ".5");
                // $("#hidden").css("display", "inline-block");
            },

            success: function (data) {
                console.log('success: ',data);
                if (data == 'success') {
                    alert('done');
                    $('#form').css("opacity", "1");
                    // $("#hidden").css("display", "none");
                    // location.href = 'tutorProfile.php';
                    location.href = 'gurdianProfile.php';
                }
            },

            error: function (data) {
                console.log('error: ',data);
                // if (data == 'error') {
                    // console.log(data);
                    alert("enter valid name");
                    $('#form').css("opacity", "1");
                // }
            }


        });

    });


});



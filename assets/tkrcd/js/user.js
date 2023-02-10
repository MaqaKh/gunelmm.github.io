document.addEventListener('DOMContentLoaded', function(){

    var profileAreaList = $('#profile-area-list');
    var profileAreas = $('#profile-areas');



    var profileImageForm = $('#profile-image-form');
    if (profileImageForm.length > 0) {
        var fileInput = profileImageForm.find('#file-input');
        var imgInput = profileImageForm.find('#img-input');
        var imageHolder = profileImageForm.find('.image-holder');
        var btnSubmit = profileImageForm.find('#btn-submit');

        profileImageForm.find('.image-holder').click(function () {
            fileInput.trigger('click');
        });

        fileInput.change(function () {
            loadImage(
                this.files[0],
                function (canvas) {
                    var imgData = canvas.toDataURL("image/jpeg");
                    imageHolder.css('background-image', 'url(' + imgData + ')').addClass('with-image');
                    imgInput.val(imgData);
                    btnSubmit.show();
                },
                {
                    canvas: true,
                    maxWidth: 240,
                    maxHeight: 240,
                    crop: true,
                    orientation: true
                }
            );
        });

        profileImageForm.submit(function () {

            btnSubmit.hide();
            return false;
        });
    }

    profileAreaList.find('li').click(function () {
        var elem = $(this);
        if (!elem.hasClass('active')) {
            profileAreaList.find('li.active').removeClass('active');
            profileAreas.find('.profile-area.active').removeClass('active');
            profileAreas.find('.profile-area:eq(' + elem.index() + ')').addClass('active');
            elem.addClass('active');
        }
    });

    if(window.location.hash) {
        var _hash=window.location.href.split('#')[1];
        profileAreaList.find('li.active').removeClass('active');
        profileAreas.find('.profile-area.active').removeClass('active');
        document.getElementsByClassName('list_'+_hash)[0].classList.add('active');
        document.getElementById('hash_'+_hash).classList.add('active');
    } else {
        profileAreaList.find('li:first-child').trigger('click');
    }

    var assistantDetails = $('#assistant-details');
    $('#user-profession').change(function () {
        if ($(this).val() === "Asistan") {
            assistantDetails.slideDown();
        } else {
            assistantDetails.slideUp();
        }
    });

}, false);



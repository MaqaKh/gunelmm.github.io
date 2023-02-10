var CSRF_TOKEN;

$(function () {
    // POPUP KONTROL
    popup();
    // SELECT KONTROL
    selectYukle();
});
$('video').bind('contextmenu', function(e) {
    return false;
});
$(document).ready(function () {

    $("video").each(function(){
        $(this).attr('controlsList','nodownload');
    });

    /* MENU ICIN ACILIS SAYFASI YONLENDIRME */
    $(".acilis_sayfasi_toplum .menu_baslik_a").click(function(e) {
        e.preventDefault();
        acilis_sayfasi('toplum_icin',$('.acilis_sayfasi_toplum').find('a'));
    });
    $(".acilis_sayfasi_saglik_icin .menu_baslik_a").click(function(e) {
        e.preventDefault();
        acilis_sayfasi('saglik_calisanlari_icin',$('.acilis_sayfasi_saglik_icin').find('a'));
    });
    /* SON MENU ICIN ACILIS SAYFASI YONLENDIRME */

    var collapsed = false;
    var header = $('#header');
    var profileMenu = header.find('#profile-menu');
    var menuSwitch = header.find('#menu-switch');
    var menuHolder = header.find('#menu-holder');
    var goTop = $('#go-top');
    var tokenValue = $('input[name="__RequestVerificationToken"]').val();
    var stage = $('#stage');
    var mobile = $(window).width() < 1205;

    if (mobile) {
        menuSwitch.click(function () {
            menuSwitch.toggleClass('open');
            menuHolder.slideToggle();
        });
        header.find('li.has-submenu>a').click(function () {
            $(this).parent().find('.submenu').slideToggle();
            return false;
        });
    } else {
        $(window).scroll(function () {
            var amount = $(this).scrollTop();
            if (amount > 80 && !collapsed) {
                header.addClass('collapsed');
                goTop.fadeIn();
                collapsed = true;
            } else if (amount <= 80 && collapsed) {
                header.removeClass('collapsed');
                goTop.fadeOut();
                collapsed = false;
            }
        });

        goTop.click(function () {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

        header.find('.search-opener').click(function () {
        var arama_buton=$('.ceviri').attr('data-arama_button');
        var arama_baslik=$('.ceviri').attr('data-arama_baslik');
        var base_url=$('body').attr('data-url');
        stage.html('<button id="stage-close" class="btn"><i class="fa fa-times"></i></button><form id="search-form" method="get" action="'+base_url+'arama"><h3>'+arama_baslik+'</h3><input type="text" name="s" class="form-control" /><button class="btn">'+arama_buton+'</button></form >');
        stage.css('display', 'flex');
        stage.find('.form-control').focus();
    });

    header.find('#profile-info').click(function () {
        profileMenu.slideToggle();
    });

    $('.swiper-container').each(function () {
        var elem = $(this);
        var id = elem.attr('id');
        var data = {
            speed: 800,
            navigation: {
                nextEl: elem.find('.swiper-button-next'),
                prevEl: elem.find('.swiper-button-prev')
            },
            pagination: {
                el: elem.find('.swiper-pagination'),
                clickable: true
            }
        };

        if (id === "events-slider") {
            data.slidesPerView = 3;
            data.slidesPerGroup = 3;
            data.spaceBetween = 30;
            data.breakpoints = {
                991: {
                    slidesPerView: 2,
                    slidesPerGroup: 2
                },
                767: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                    spaceBetween: 0
                }
            };
        } else if (id === "presentation-slider") {
            data.pagination.type = "fraction";
            data.autoHeight = true;
        } else if (id === "board-slider") {
            data.slidesPerView = 3;
            data.slidesPerGroup = 3;
            data.spaceBetween = 20;
            data.breakpoints = {
                991: {
                    slidesPerView: 2,
                    slidesPerGroup: 2
                },
                767: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                    spaceBetween: 0
                }
            };
        } else if (id === "history-slider") {
            data.autoHeight = true;
        }

        var swiper = new Swiper(this, data);

    });



    $('.tabbed-content').find('ul.tab-list>li').click(function () {
        var elem = $(this);
        if (!elem.hasClass('active')) {
            elem.parent().find('li.active').removeClass('active');
            elem.parent().parent().find('.tab-pane.active').removeClass('active');
            elem.parent().parent().find('.tab-pane:eq(' + elem.index() + ')').addClass('active');
            elem.addClass('active');
        }
    });

    /* TAB ETKIN OLMA SISTEMINI YAPALIM */
    var url = window.location.href;
    var activeTab = url;
    if(url.split("#")[1]){
        activeTab=url.split("#")[1];
    }
    if(url!=activeTab){
        $(".tab-pane").removeClass("active in");
        $(".tab-list li").removeClass("active in");
        $("#" + activeTab).addClass("active in");
        $('a[href="#'+ activeTab +'"]').parent().addClass("active in").tab('show')

    }
    /* SON TAB ETKIN OLMA SISTEMINI YAPALIM */

    $('.tabbed-content').each(function () {
        if(url!=activeTab){

        }else{
            $(this).find('ul.tab-list>li:first-child').trigger('click');
        }
    });


    $('.acordeon-title').click(function () {
        var elem = $(this).parent();
        window.location.hash = $(elem).attr('id');

        if (elem.hasClass('open')) {
            elem.removeClass('open');
            elem.find('.acordeon-body').slideUp();
        } else {
            elem.parent().find('.acordeon.open').removeClass('open').find('.acordeon-body').slideUp();
            elem.addClass('open');
            elem.find('.acordeon-body').slideDown();
        }

    });

    $('.gallery-thumbnail').click(function () {
        stage.css('display', 'flex');
        var elem = $(this);
        var data = {
            GET_AJAX_ISLEM:'FOTO_GALERI_MEDYALARI',
            id: elem.data("gallery")
        };
        $.ajax({
            type: 'GET',
            url: '/AJAX',
            data: data,
            dataType: 'html',
            success: function (response) {
                stage.html(response);
                var gallerySlider = stage.find('#gallery-slider');
                new Swiper(gallerySlider, {
                    speed: 800,
                    keyboard: {
                        enabled: true,
                        onlyInViewport: false,
                    },
                    autoplay: {
                        delay: 5000
                    },
                    navigation: {
                        nextEl: gallerySlider.find('.swiper-button-next'),
                        prevEl: gallerySlider.find('.swiper-button-prev')
                    },
                    pagination: {
                        el: gallerySlider.find('.swiper-pagination'),
                        type: 'fraction'
                    }
                });

            },
            error: function (error) {
                console.log(error.responseText);
                stage.html('<p class="stage-message">Bir hata oldu. Lütfen daha sonra tekrar deneyin.</p>');
                setTimeout(function () {
                    stage.fadeOut();
                }, 2000);
            }
        });
        return false;
    });

    $('.video-opener').click(function () {
        var elem = $(this);

        var html = '<button id="stage-close" class="btn">X</button><div class="container"><div class="video-holder">';
        if (elem.data("youtube")) {
            html += '<iframe width="640" height="360" src="https://www.youtube.com/embed/' + elem.data("youtube") + '?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        }
        else if (elem.data("vimeo")) {
            html += '<iframe src="' + elem.data("vimeo") + '" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>';
        }
        else if (elem.data("youtube_url")) {
            html += '<iframe width="640" height="360" src="' + elem.data("youtube_url") + '?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        }else if(elem.data('video').indexOf('//wkolay')!==-1){
            html += '<iframe width="640" height="360" src="' + elem.data('video') + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        }
        else {
            html += '<video src="' + elem.data('video') + '" autoplay controls controlsList="nodownload">';
        }
        html += '</div></div>';
        stage.html(html).css('display', 'flex');
        return false;
    });

    $('.vimeo-opener').click(function () {
        var elem = $(this);
        var html = '<button id="stage-close" class="btn">X</button><div class="container"><div class="video-holder">';
        html += '<iframe src="' + elem.data("vimeo") + '?&autoplay=1" width="640" height="564" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>';
        html += '</div></div>';
        stage.html(html).css('display', 'flex');
        return false;
    });


    $('.photo-opener').click(function () {
        var elem = $(this);
        var html = '<button id="stage-close" class="btn">X</button><div class="container">';
        html+='<img src="'+elem.data('photo')+'" class="img-fluid" width="1000%" height="auto" >';
        html += '</div>';
        stage.html(html).css('display', 'flex');
        return false;
    });


    $('#contact-form').submit(function () {
        stage.css("display", "flex");
        $.ajax({
            type: 'POST',
            url: '/api/contact-form',
            data: $(this).serialize(),
            dataType: 'json',
            success: function (result) {
                stage.html('<p class="stage-message">' + result.message + '</p>');
            },
            error: function (error) {
                console.log(error.responseText);
                stage.html('<p class="stage-message">Bir hata oldu. Lütfen daha sonra tekrar deneyin.</p>');
            },
            complete: function () {
                setTimeout(function () {
                    stage.fadeOut().empty();
                }, 2400);
            }
        });
        return false;
    });

    stage.on('click', '#stage-close', function () {
        stage.empty().fadeOut();
        return false;
    });



});


function loading() {
    $("#loading").fadeIn("slow");
}
function loading_close() {
    $("#loading").fadeOut("slow");
}

$.ajaxSetup({
    beforeSend:function(){
        $('button').attr("disabled", true);
        loading();
    },
    complete :function(){
        // REFRESH CSRF TOKEN AND LOADİNG CLOSE
        loading_close();
        $('button').attr("disabled", false);
        $('button').removeAttr("disabled");
        get_csrf_token();
    }
});


function get_csrf_token(){
    $.ajax({
        url:'/get_csrf_token',
        type:'GET',
        dataType:'TEXT',
        async: false,
        cache:false,
        beforeSend:function(){},
        success:function(result){
            $('input[name=csrf_request_name]').val(result);
            CSRF_TOKEN=result;
            return result;
        },complete:function(){
            return CSRF_TOKEN;
        }
    });
}





function FormHataMesajlari(form_hatalari){
    $('.form_hata_mesaji').html('');
    $('.form_hata_mesaji').attr('hidden','true');
    if(form_hatalari){
        $.each(form_hatalari, function( index, value ) {
            value=value.replace('<p>','').replace('</p>','');
            if(value!=""){
                $("span[data-hata="+index+"]").html(value);
            }else{
                $("span[data-hata="+index+"]").html('&nbsp;&nbsp;');
            }
            $("span[data-hata="+index+"]").removeAttr('hidden');
        });
    }
}


function ajaxMesajlari(result){

    if(result['sayfayi_yenile']=="1"){
        location.reload();
    }
    var baslik="";
    var mesaj="";
    var buton1=result['buton1'];
    if(result['baslik']){
        baslik=result['baslik'];
    }
    if(result['mesaj']){
        mesaj=result['mesaj'];
    }
    if(mesaj!=""){
        if(result['yenile']=="1"){
            swal({
                html:true,
                title: baslik,
                text: mesaj,
                type: result['durum'],
                confirmButtonText: buton1,
                closeOnClickOutside: false,
            },function(){
                location.reload();
            });
        }else if(result['dur_yenile']){
            swal({
                html:true,
                title: baslik,
                text: mesaj,
                type: result['durum'],
                timer: 3000,
                showCancelButton: false,
                showConfirmButton: false,
                closeOnClickOutside: false,
            },function(){
                location.reload();
            });
        }else if(result['dur_yonlendir']){
            swal({
                html:true,
                title: baslik,
                text: mesaj,
                type: result['durum'],
                timer: 3000,
                showCancelButton: false,
                showConfirmButton: false,
                closeOnClickOutside: false,
            },function(){
                window.location.href=result['dur_yonlendir'];
            });
        }else{
            swal({
                html:true,
                title: baslik,
                text: mesaj,
                type: result['durum'],
                confirmButtonText: buton1,
                closeOnClickOutside: false,
            });
        }

    }

}
function ajax(_element){
    $('.form_hata_mesaji').html('');
    $.ajax({
        url:$('body').attr('data-url')+'AJAX',
        data:$(_element).serialize(),
        type:'POST',
        dataType:'JSON',
        success:function(result){
            FormHataMesajlari(result['form_hatalari']);
            ajaxMesajlari(result);
        }
    });
}

function ajaxSor(_AJAX_ISLEM,_ID,_title,_text){
    if (_title === void 0) { _title = ""; }
    if (_text === void 0) { _text = ""; }
    swal({
        html:true,
        title: _title,
        text:_text,
        type: "warning",
        showCancelButton: true,
        confirmButtonText: $('.ceviri').attr('data-evet')+" !",
        cancelButtonText: $('.ceviri').attr('data-hayir')+" !",
        closeOnClickOutside: false,
    },function(durum){
        swal.close();
        if (durum) {
            get_csrf_token();
            setTimeout(function () {
                $.ajax({
                    url:'/AJAX',
                    data:{"csrf_request_name":CSRF_TOKEN,'AJAX_ISLEM':_AJAX_ISLEM,'ID':_ID},
                    type:'POST',
                    dataType:'JSON',
                    success:function(result){
                        FormHataMesajlari(result['form_hatalari']);
                        ajaxMesajlari(result);
                    }
                });
            }, 500);
        }
    });
}


function acilis_sayfasi(sayfa,e) {
    var acilis_sayfasi_url=$(e).attr('href');
    $.ajax({
        url:'/AJAX',
        data: {"GET_AJAX_ISLEM":"ACILIS_SAYFASI","SAYFA":sayfa},
        type:'GET',
        dataType:'JSON',
        success:function(result){
            if(result['durum']=='1'){
                location.href=acilis_sayfasi_url;
            }
        },error:function () {
            location.href=acilis_sayfasi_url;
        }
    });
}

function profil_fotografini_guncelle(_element){
    var formdata=new FormData(_element);
    $.ajax({
        url:'/AJAX',
        type:"POST",
        dataType:'JSON',
        data:formdata,
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        cache:false,
        success: function(result){
            FormHataMesajlari(result['form_hatalari']);
            ajaxMesajlari(result);
        }
    });
}

//------------------------------------------------//
// POPUP
//------------------------------------------------//
function popup() {
    if($('.popup_img').length > 0){
        $('.popup_img').magnificPopup({
            type: 'image',
            callbacks: {
                elementParse: function(item) {
                    var classnamee=$(item.el).attr('class');
                    if(classnamee.search('video-youtube')!='-1') {
                        item.type = 'iframe';
                        item.iframe= {
                            patterns: {
                                youtube: {
                                    index: 'youtube.com/',
                                    id: function(url) {
                                        var m = url.match(/[\\?\\&]v=([^\\?\\&]+)/);
                                        if ( !m || !m[1] ) return null;
                                        return m[1];
                                    },
                                    src: '//www.youtube.com/embed/%id%?autoplay=1'
                                }
                            }
                        }
                    } else {
                        item.type = 'image';
                    }
                }
            }
        });
        $('.popup_img').trigger('click');
    }
}
// ------------------------------------------------//
// POPUP
//------------------------------------------------//



//-----------------------------------//
// SELECT AYARI
//-----------------------------------//
function selectYukle() {
    if($(".select2").length > 0){
        $('.select2').SumoSelect({
            placeholder:" ----- ",
            captionFormat: '{0} '+$('.ceviri').attr('data-select_secildi'),
            captionFormatAllSelected: $('.ceviri').attr('data-select_tumu_secildi'),
            search : true,
            searchText : $('.ceviri').attr('data-select_arama'),
            noMatch : $('.ceviri').attr('data-select_arama_bulunamadi')+": {0}",

        });
    }
}

function selectYenile() {
    if($(".select2").length > 0){
        $('.select2').each(function (e) {
            $(this)[0].sumo.reload();
        });

    }
}
//-----------------------------------//
// SON SELECT AYARI
//-----------------------------------//


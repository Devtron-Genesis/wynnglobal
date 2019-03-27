/*  ========================================================================
    Script JS
    ========================================================================    */
    
    (function ($) {
        
        image = {
            
            container: '#animation-container',
            wWidth: $(window).width(),
            in_animation: false,
            wait_interval: 0,
            
            init: function(){
                
                if (image.in_animation){
                    image.wait_interval = setInterval("image.init()",250);
                }
                else {
                    
                    clearInterval(image.wait_interval);
                
                    window.setTimeout(function() {
                        image.inFromRight();
                    }, 900);
                    
                    window.setTimeout(function() {
                        image.inFromLeft();
                    }, 500);
                    
                    window.setTimeout(function() {
                        image.inFromCentre();
                    }, 1000);
                    
                    image.in_animation = true;
                }
            },
            
            outro: function(){
                
                if (image.in_animation){
                    image.wait_interval = setInterval("image.outro()",250);
                }
                else {
                    
                    clearInterval(image.wait_interval);
                    
                    image.outToRight();
                    image.outToLeft();
                    image.outToCentre();
                    
                    image.in_animation = true;
                }

            },
            
            background_images: function(){
                
                $.ajax({
                    async: false,
                    url: '/background/images',
                    success: function(img_json) {
                        image.background_image_array = img_json;
                    }
                });
            },
            
            background_image_array: null,
            background_image_count: 0,
            background_image_pointer_idx: 0,
            
            background_image_increment: function(){
                
                image.background_image_pointer_idx++;
                if (image.background_image_pointer_idx > (image.background_image_array.length-1)){
                    image.background_image_pointer_idx = 0;
                }
            },
            
            inFromRight: function(img){
                
                var imgObj = new Image();
                imgObj.src = image.right_img;
                // imgObj.width imgObj.height
                
                if ($('#img-div-right').length>0) $('#img-div-right').remove();
                $(image.container).append('<div id="img-div-right" class="img-div" style="opacity: 0; top: 18%; left: 100%; width: 20%;"><img style="max-width: 100%;" src="'+ image.background_image_array[image.background_image_pointer_idx].url +'" /></div>');
                
                $('#img-div-right').stop().animate({
                   left: ['70%', 'easeOutCubic'],
                   opacity: [0.5, 'linear']
                }, { duration: 3000, queue: false, complete: function() {
                    
                    //window.setTimeout(function() {
                    //    image.outToRight();
                    //}, 7500);
                    
                }});
                
                image.background_image_increment();
            },
            
            outToRight: function(){
                
                var imgObj = new Image();
                imgObj.src = $('#img-div-right img').attr('src');
                
                $('#img-div-right').animate({
                   left: ['16.66%', 'linear']
                }, { duration: 2000, queue: false, complete: function() {
                    
                    //$('#img-div-right').remove();
                    //window.setTimeout(function() {
                    //    image.inFromRight();
                    //}, 5000);
                    
                }});
                
                $('#img-div-right').animate({
                   opacity: [0, 'linear']
                }, { duration: 1000, queue: false, complete: function() {
                    
                    $('#img-div-right').remove();
                    //window.setTimeout(function() {
                    //    image.inFromRight();
                    //}, 900);
                }});
            },
            
            inFromLeft: function(){
                
                var imgObj = new Image();
                imgObj.src = image.right_img;
                // imgObj.width imgObj.height
                
                if ($('#img-div-left').length>0) $('#img-div-left').remove();
                $(image.container).append('<div id="img-div-left" class="img-div" style="opacity: 0; top: 20%; left: 50%; width: 21%;"><img style="max-width: 100%;" src="'+ image.background_image_array[image.background_image_pointer_idx].url +'" /></div>');
                
                $('#img-div-left').stop().animate({
                   left: ['9%', 'easeOutCubic'],
                   opacity: [0.5, 'linear']
                }, { duration: 3000, queue: false, complete: function() {
                    
                    //window.setTimeout(function() {
                    //    image.outToLeft();
                    //}, 5000);
                    
                }});
                
                image.background_image_increment();
            },
            
            outToLeft: function(img){
                
                var imgObj = new Image();
                imgObj.src = $('#img-div-left img').attr('src');
                
                $('#img-div-left').animate({
                   left: ['-50%', 'linear']
                }, { duration: 2000, queue: false, complete: function() {
                    
                    
                }});
                
                $('#img-div-left').animate({
                   opacity: [0, 'linear']
                }, { duration: 1000, queue: false, complete: function() {
                    
                    $('#img-div-left').remove();
                    //window.setTimeout(function() {
                    //    image.inFromLeft();
                    //}, 500);
                }});
            },
            
            inFromCentre: function(img){
                
                var imgObj = new Image();
                imgObj.src = image.centre_img;
                // imgObj.width imgObj.height
                
                
                if ($('#img-div-centre').length>0) $('#img-div-centre').remove();
                $(image.container).append('<div id="img-div-centre" class="img-div" style="opacity: 1; top: -100%; left: -100%; width: 40%;"><img style="max-width: 100%;" src="'+ image.background_image_array[image.background_image_pointer_idx].url +'" /></div>');
                
                $('#img-div-centre').stop().animate({
                   top: ['15%', 'easeOutCubic'],
                   left: ['30%', 'easeOutCubic']
                }, { duration: 2500, queue: false, complete: function() {
                    
                    //window.setTimeout(function() {
                    //    image.outToRight();
                    //}, 7500);
                    image.in_animation = false;
                    
                }});
                
                image.background_image_increment();
            },
            
            outToCentre: function(img){
                
                var imgObj = new Image();
                imgObj.src = $('#img-div-centre img').attr('src');
                
                $('#img-div-centre').animate({
                   left: ['100%', 'linear']
                }, { duration: 2000, queue: false, complete: function() {
                    
                    
                }});
                
                $('#img-div-centre').animate({
                   opacity: [0, 'linear']
                }, { duration: 1000, queue: false, complete: function() {
                    
                    $('#img-div-centre').remove();
                    image.in_animation = false;
                    image.init();
                }});
            },
            
            /*
            * Footer image swap
            **/
            footer_images: function(){
                
                $.ajax({
                    async: false,
                    url: '/footer/images',
                    success: function(img_json) {
                        image.footer_image_array = img_json;
                        image.display_footer_images();
                    }
                });
            },
            
            footer_image_array: null,
            footer_image_count: 0,
            footer_image_pointer_idx: 0,
            
            display_footer_images: function() {
                
                for ( var j in image.footer_image_array){
                    if (image.footer_image_count>4) break;
                    $('#footer-image-container ul').append('<li><img src="'+ image.footer_image_array[j].url +'" alt="" /></li>');
                    image.footer_image_count++;
                    image.footer_image_pointer_idx = j;
                }
                
                var first = setInterval("image.footer_images_change_first()",9000);
                var second = setInterval("image.footer_images_change_second()",14000);
            },
            
            footer_images_change_first: function(){
                image.footer_image_swap(0);
                image.footer_image_swap(2);
                image.footer_image_swap(4);
            },
            
            footer_images_change_second: function(){
                image.footer_image_swap(1);
                image.footer_image_swap(3);
            },
            
            footer_image_swap: function(img_no){
                
                image.footer_image_increment();
                $('#footer-image-container ul li:eq('+img_no+')').append('<img src="'+ image.footer_image_array[image.footer_image_pointer_idx].url +'" alt="" />');
                $('#footer-image-container ul li:eq('+img_no+') img:last').css({opacity: 0});
                
                $('#footer-image-container ul li:eq('+img_no+') img:first').animate({
                   opacity: 0
                }, { duration: 1000, queue: false, complete: function() {
                     $(this).remove();
                }});
                
                $('#footer-image-container ul li:eq('+img_no+') img:last').animate({
                   opacity: 1
                }, { duration: 1000, queue: false });
            },
            
            footer_image_increment: function(){
                
                image.footer_image_pointer_idx++;
                if (image.footer_image_pointer_idx > (image.footer_image_array.length-1)){
                    image.footer_image_pointer_idx = 0;
                }
            }
            
        };
        
        content = {
            
            interval: null,
            element: null,
            api: null,
            
            init: function(){
                
                content.menu_links();
                $('ul.main-navigation-sub:first li:first a').trigger('click');
                var interval = setTimeout('content.show_text_panel()',100);
            },
            
            show_text_panel: function(){
              
                $('#text-content').animate({
                   bottom: ['0', 'swing']
                }, { duration: 1000, queue: false },function() {
                    // after ani
                });
            },
            
            menu_links: function(){
                
                $('.text-content-src').each(function(index) {
                    //alert(index + ': ' + $(this).text());
                    
                    
                    if (index==0 || index==4){
                        $(this).hover(
                            function () {
                                //console.log(index);
                                //if (index==0 || index==4){
                                    if (!image.in_animation) image.outro();
                                //}
                            }, 
                            function () {
                                // do nothing on hover out
                            }
                        );
                    }
                    
                    if ($(this).attr('data-src') > 0){

                        $(this).click(function(){
                            
                            var _this = $(this);
                            
                            var data = _this.data('section');
                            
                            if (!data){
                                var path = (location.pathname=='/') ? location.pathname : location.pathname+'/' ;
                                $.ajax({
                                    async: false,
                                    url: path +'panel/content/'+$(this).attr('data-src'),
                                    success: function(content_json) {
                                        //console.log(content_json);
                                        _this.data('section', content_json);
                                    },
                                    complete: function(jqXHR, textStatus){
                                        data = _this.data('section');
                                        content.display_content(data);
                                    }
                                });
                            }
                            else {
                                data = _this.data('section');
                                content.display_content(data);
                            }
                            
                            if ($(this).closest('ul') && $(this).closest('ul').attr('class')=='main-navigation-sub'){
                                //console.log( $(this).closest('ul').attr('class') );
                                $(this).closest('ul').css({
                                    display: 'none',
                                    visibility: 'hidden'
                                });
                            }
                        });
                    }
                });
            },
            
            display_content: function(data){

                if (!content.api){
                    content.api = $('#text-content-scroll').jScrollPane({
                        showArrows : true,
                        verticalGutter : 10
                    }).data('jsp');
                    
                    $(window).resize(function() {
                        content.api.reinitialise();
                    });
                }
                
                $('#text-content h1').html( data.title );
                content.api.getContentPane().html( data.text );
                content.api.reinitialise();
                
                if ($('#text-content form').length > 0){
                  
                    $('.webform-client-form .form-checkbox').addClass('required clearfix');
                  
                    $('#text-content form').validate({
                        onfocusout: false,
                        onkeyup: false,
                        invalidHandler: function(form, validator) {
                            var interval = setTimeout('content.api.reinitialise()',200);
                        }
                    });
                }
            }
        }
        
        layout = {
            
            equalHeight: function (group) {
                var tallest = 0;
                group.each(function() {
                    var thisHeight = $(this).height();
                    if(thisHeight > tallest) {
                        tallest = thisHeight;
                    }
                });
                group.height(tallest);
            },
            
            closeDialog: function (){
                $('#form-success').dialog('destroy');
            }
        }
        
        /* Cufon */
        
            //Cufon.replace('h1, h2:not(.nocufon), h3, h4, #skip-navigation ul li a, #data-table th, #data-table .cost, .ui-tabs-nav li.ui-state-default a', {
            //    fontFamily: 'avenir',
            //    hover: true
            //});
        
        /* External Links */
        
            if($('a.external-link')){
                $('a.external-link').each(function(i){
                    var tmp = $(this).html();
                    $(this).html( tmp +'<span class="offpage external-icon"> - (Opens in a new window)</span>');
                    tmp = null;
                });
                $('a.external-link').click(function(){
                    window.open(this.href);
                    return false;
                });
            }
            
        /* Superfish Menu */
        
            $('ul#main-navigation').superfish({
                animation: {opacity:'show',height:'show'},
                speed: 0,
                delay: 0,
                autoArrows:  false
            });
            
        /* ScrollPane */
            
            //var element = $('#text-content-scroll').jScrollPane({
            //    showArrows : true,
            //    verticalGutter : 10
            //});
            //var api = element.data('jsp');
            //$(window).resize(function() {
            //    api.reinitialise();
            //});
        
        /* Background Images */
            
            image.background_images();
            
        /* Footer Images */
            
            image.footer_images();
            
        /* Menu Links */
        
            content.init();
            
        /* Clock */
            
            $("li#datetime").clock();
            
        /* Start Animation*/
            
            $(document).ready(function() {
                image.init();
                $('#main-navigation').children('li:first-child').children('ul').children('li:first-child').children('a').trigger('click');
            });
            
        /* Login Link */
        
            if ($('a.login-link').length > 0){
                
                $('a.login-link').click(function(){
                    
                    if ($('#login-check').length == 0){
                        $('body').append('<div id="login-check"><form action="/" accept-charset="UTF-8" method="post" id="user-login" name="user-login"><fieldset><ol><li><label for="edit-name">Username: <span class="form-required" title="This field is required.">*</span></label> <input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required"></li><li><label for="edit-pass">Password: <span class="form-required" title="This field is required.">*</span></label> <input type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required"></li><li><input type="hidden" name="form_build_id" value="form-y9QD9EuXCuKzPCn3_u4eu2mf_BLLXfXaVGNPiLk1YC8"> <input type="hidden" name="form_id" value="user_login"> <input type="submit" id="edit-submit" name="op" value="Log in" class="form-submit"></li></ol></fieldset></form></div>');
                    }
                    
                    $('#login-check').dialog({
                        title: '<h3>Login</h3>',
                        draggable: false,
                        resizable: false,
                        modal: true,
                        width: 400
                    });
                    
                    $('#edit-submit').click(function(){
                        
                        if ($('#edit-name').val() && $('#edit-pass').val()){
                            
                            $.ajax({
                                url: '/login/check/'+ $('#edit-name').val() +'/'+ $('#edit-pass').val(),
                                async: false,
                                cache: false,
                                dataType: "json",
                                success: function(data) {
                                    $('a.login-link').data('login-form',data);
                                },
                                complete: function(jqXHR, textStatus){
                                    data = $('a.login-link').data('login-form');
                                    if (data.url.length > 0){
                                        window.open(data.url);
                                        $('#login-check').dialog('destroy');
                                    }
                                    else {
                                        if ($('#login-check .error').length > 0) $('#login-check .error').remove();
                                        $('#edit-pass').after('<label class="error">Incorrect username or password</label>');
                                    }
                                }
                            });
                        }
                        else {
                            if ($('#login-check .error').length > 0) $('#login-check .error').remove();
                            $('#edit-pass').after('<label class="error">Please enter a username and password</label>');
                        }
                        
                        return false;
                    });
                    
                    return false;
                });
            }
        
        /* Successful submission */
        
        var urlParams = {};
        (function () {
            var e,
                a = /\+/g,  // Regex for replacing addition symbol with a space
                r = /([^&=]+)=?([^&]*)/g,
                d = function (s) { return decodeURIComponent(s.replace(a, " ")); },
                q = window.location.search.substring(1);
        
            while (e = r.exec(q))
               urlParams[d(e[1])] = d(e[2]);
        })();
        
        if (urlParams.sid > 0){
            
            if ($('#form-success').length == 0){
                
                if (m = location.pathname.match(/\/pt/)){
                    var title = 'Sucesso';
                    var text = 'Obrigado por sua submiss&atilde;o';
                }
                else if (m = location.pathname.match(/\/es/)) {
                    var title = '&Eacute;xito';
                    var text = 'Gracias por su presentaci&oacute;n';
                }
                else {
                    var title = 'Success';
                    var text = 'Thank you for your submission';
                }
                
                $('body').append('<div id="form-success"><p>'+text+'</p></div>');
            }
            $('#form-success').dialog({
                title: '<h3>'+title+'</h3>',
                draggable: false,
                resizable: false,
                modal: true,
                width: 400,
                height: 50
            });
            
            var interval = setTimeout('layout.closeDialog()',8000);
        }
        
    })(jQuery);
/*  ========================================================================
    Script JS
    ========================================================================    */
    
    (function ($) {
        
        image = {
            
            container: '#page-content section:first',
            wWidth: $(window).width(),
            
            left_img: 'assets/images/image01.jpg',
            center_img: 'assets/images/image01.jpg',
            right_img: 'assets/images/image01.jpg',
            
            init: function(img){
            
                image.inFromRight(image.right_img);
                image.inFromLeft(image.left_img);
            
            },
            
            inFromRight: function(img){
                
                img = 'assets/images/image01.jpg';
                var imgObj = new Image();
                imgObj.src = img;
                // imgObj.width imgObj.height
                
                $(image.container).append('<div id="img-div-right" class="img-div" style="right:'+ (imgObj.width*-1) +'px;"><img src="'+ img +'" /></div>');
                
                $('#img-div-right').animate({
                   right: ['+='+ (imgObj.width+(30)) +'px', 'easeOutQuad'],
                }, { duration: 5000, queue: false },function() {
                });
                
                //$('#img-div-right img').animate({
                //   height: ['200px', 'swing']
                //}, { duration: 5000, queue: false },function() {
                //});
                
                window.setTimeout(function() {
                    image.outToRight();
                }, 10000);
            },
            
            outToRight: function(){
                
                var imgObj = new Image();
                imgObj.src = $('#img-div-right img').attr('src');
                
                $('#img-div-right').animate({
                   right: ['+='+ (imgObj.width+(30)) +'px', 'swing'],
                   opacity: 0
                }, { duration: 3000, queue: false },function() {
                    // after ani
                });
                
                //$('#img-div-right img').animate({
                //   height: ['100px', 'swing']
                //}, { duration: 3000, queue: false },function() {
                //    // after ani
                //});
                
                window.setTimeout(function() {
                    $('#img-div-right').remove();
                    image.inFromRight();
                }, 3500);
            },
            
            inFromLeft: function(img){
                
                img = 'assets/images/image01.jpg';
                var imgObj = new Image();
                imgObj.src = img;
                // imgObj.width imgObj.height
                
                $(image.container).append('<div id="img-div-left" class="img-div" style="left:'+ (imgObj.width*-1) +'px;"><img src="'+ img +'" /></div>');
                
                $('#img-div-left').animate({
                   left: ['+='+ (imgObj.width+(30)) +'px', 'easeOutQuad'],
                }, { duration: 5000, queue: false },function() {
                    // after ani
                });
                
                //$('#img-div-left img').animate({
                //   height: ['200px', 'swing']
                //}, { duration: 5000, queue: false },function() {
                //    // after ani
                //});
                
                window.setTimeout(function() {
                    image.outToLeft();
                }, 10000);
            },
            
            outToLeft: function(img){
                
                var imgObj = new Image();
                imgObj.src = $('#img-div-left img').attr('src');
                
                $('#img-div-left').animate({
                   left: ['+='+ (imgObj.width+(30)) +'px', 'swing'],
                   opacity: 0
                }, { duration: 3000, queue: false },function() {
                    // after ani
                });
                
                //$('#img-div-left img').animate({
                //   height: ['100px', 'swing']
                //}, { duration: 3000, queue: false },function() {
                //    // after ani
                //});
                
                window.setTimeout(function() {
                    $('#img-div-left').remove();
                    image.inFromLeft();
                }, 3500);
            },
        };
        
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
            
        /* Start Animation*/
            //image.init();
            
            
        /* Superfish Menu */
        
            $('ul#main-navigation').superfish({
                animation: {opacity:'show',height:'show'},
                speed: 0,
                delay: 0,
                autoArrows:  false
            });
            
        /* ScrollPane */
            
            $('#text-content-scroll').jScrollPane({
                showArrows : true,
                verticalGutter : 10
            });
            
    })(jQuery);
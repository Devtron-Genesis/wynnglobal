jQuery(function($){
  $(document).ready(function() {
    $('body.single-post').addClass('page-template-fullwidth-php page-template-fullwidth');
    $('body.page-id-420').addClass('page-template-fullwidth-php page-template-fullwidth');
    
    // Set footer slide height equal to footer height
    var static_footer_height = $('div#footer-widget').height();
    $('.home .site-info .contents-inner').css('height', static_footer_height);
    $('.home .site-info .contents-inner .container').css('height', static_footer_height-60);
    $('.page-id-405 .site-info .contents-inner').css('height', static_footer_height);
    // Maga Manue
    $('.wp-mega-menu-link').click(function(){
    	$(this).siblings('.wpmm-sub-menu-wrap').hide();
    });
    $('.mega-sub-menu').parent('.mega-menu-column').css('border-left', '1px solid rgba(255,255,255,0.5)');
    if($( window ).width() < $( window ).height()) {
        if($(window ).width() < 993){
            $('ul#mega-menu-primary li.mega-menu-item').click(function(){
                if($(this).hasClass('mega-toggle-on')) {
                    $(this).siblings('li').removeClass('mega-toggle-on');   
                }
            })
        }
    }

    // Full Width Page Bottom Slide
    var fullwidthcontentheader = $('.page-template-fullwidth-php #content section#primary header.entry-header h1').html();
    $('.page-template-fullwidth-php .tab p span').html('<span class="arrow"><i class="fas fa-chevron-up"></i>&nbsp;&nbsp;&nbsp;'+fullwidthcontentheader+'</span>');
    var fullwidthcontent = $('.page-template-fullwidth-php #content section#primary').html();
    $('.page-template-fullwidth-php .contents-inner .container').html(fullwidthcontent);

    // Bottom Footer Slide
    var winheight = $(window).height();
    $('.page-template-fullwidth .site-info').css('height', winheight/1.8);
    $('.page-template-fullwidth .site-info #main').children('.container').css('height', winheight/2 - 60).css('overflow', 'auto').css('padding', '20px 0px');
    if($( window ).width() < $( window ).height()) {
        if($(window ).width() < 768){
            $('.page-template-fullwidth .site-info').css('height', static_footer_height+10);
            $('.page-template-fullwidth .site-info #main').children('.container').css('height', static_footer_height+10 - 60).css('overflow', 'auto').css('padding', '20px 0px');
        }
    }
    var bottom_slider_height = $('.site-info').height();
    var bottom_slider_actual_height = '-'+(bottom_slider_height-50)+'px';
    $('.site-info').css('bottom', bottom_slider_actual_height);
    $('div#footer-widget .tab p').click(function(){
    	if ($(this).parents('.site-info').hasClass('slide-up')) {
			$(this).parents('.site-info').animate({bottom: "0px"});
    	} else if($(this).parents('.site-info').hasClass('slide-down')) {
		    $(this).parents('.site-info').animate({bottom: bottom_slider_actual_height});
   		}
    	$(this).parents('.site-info').find('i').toggleClass('fa-chevron-up fa-chevron-down');
    	$(this).parents('.site-info').toggleClass('slide-up slide-down');
    });
    // Ajax Search Position
    var partner_content_height = $('.page-id-419 .site-info #main article').height();
    $('div#ajaxsearchlite1').css('bottom', bottom_slider_height - partner_content_height -70);

    // Manage Slider & Slider Overlay Height & banner height
    var fullteplata_footer = $('#footer-widget').height();
    $('.full-width-page-banner').css('height', winheight-fullteplata_footer+'px');
    $('.carousel.slide .carousel-inner .carousel-item').css('height', winheight+'px');
    $('.n2-section-smartslider').css('height', winheight+'px').css('overflow', 'hidden');
    $('.n2-ss-slider-3.n2-ow').css('height', winheight+'px');
    var meet_client_page_height  = $('body.page-id-405').height();
    $('.modal-outer').css('height', meet_client_page_height+'px');


    // Team Page Slider
    var slidnav = $('.page-id-405 .carousel-indicators-main').html();
    // Manage Team Page Slider Functionality
    $('.page-id-405').find(' div#demo').find('.carousel-inner').find('.carousel-item:first-child').addClass('active');
    $('.page-id-405').find(' div#demo').find('.carousel-indicators').find('li:first-child').addClass('active');
    // Team Page bottom slide
    $('.page-id-405 .tab p span').html('<span class="arrow"><i class="fas fa-chevron-up"></i>&nbsp;&nbsp;&nbsp;Browse the team</span>');
    $('.page-id-405 .contents-inner .container').html(slidnav);
    // Manage Slider Overlay hide/show
    $('.carousel-caption-inner p span').click(function() {
        $(this).parents('p').siblings('.modal-outer').toggle();
    });
    $('button.close').click(function(){
        $(this).parents('.modal-outer').toggle();
    });
  });
  
  $(window).load(function () {
    // Manage Slider & Slider Overlay Height
    var winheight = $(window).height();
    $('.carousel.slide .carousel-inner .carousel-item').css('height', winheight-50+'px');
    $('.n2-section-smartslider').css('height', winheight-50+'px').css('overflow', 'hidden');
    $('.n2-ss-slider-3.n2-ow').css('height', winheight-50+'px');
    var meet_client_page_height  = $('body.page-id-405').height();
    $('.modal-outer').css('height', meet_client_page_height-50+'px');
    $('.site-info ul.carousel-indicators .row').css('height', winheight/2-70).css('overflow', 'overlay');
    $('.page-template-fullwidth div#footer-widget .tab p').trigger('click');
  });
  
var geotargetlypopup1552564439939 = document.createElement('script');
geotargetlypopup1552564439939.setAttribute('type','text/javascript');
geotargetlypopup1552564439939.async = 1;
var w = window, d = document, e = d.documentElement, g = d.getElementsByTagName('body')[0], w = w.innerWidth || e.clientWidth || g.clientWidth, h = w.innerHeight|| e.clientHeight|| g.clientHeight;
var geotargetlypopup1552564439939url = '//geotargetly-1a441.appspot.com/geopopup?id=-L_w2JdgzWVjuwrD9FSP&cw='+w+'&ch='+h;
geotargetlypopup1552564439939.setAttribute('src', geotargetlypopup1552564439939url);
document.getElementsByTagName('head')[0].appendChild(geotargetlypopup1552564439939);

});
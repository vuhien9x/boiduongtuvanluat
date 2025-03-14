
(function ($) {
    
    "use strict";
  
    $(document).ready(function () {
        
		var kmt_width = $( window ).width();

		/* Stop menu */
    	$(window).scroll(function(){
    		var wrap_block_2 = $('#wrap_block_2');
    		var scroll = $(window).scrollTop();
            
    		if (scroll >= 30 && kmt_width>1024) wrap_block_2.addClass('slideInDown kmt_fixed');
    		else wrap_block_2.removeClass('slideInDown kmt_fixed');
    	});
        /* Stop menu */
		
		
		/*Reload trang không dịch chuyền scroll*/
        document.addEventListener("DOMContentLoaded", function(event) { 
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
		/*Stop Reload*/
		
		
        $('#kmt_url_dt').on('click', function() {
          var $temp = $("<input>");
          var $url = $('#kmt_url_dt').attr('href');
          $("body").append($temp);
          $temp.val($url).select();
          document.execCommand("copy");
          $temp.remove();
          return false;
        })
        
        
        
        $(document).on( "click",'.menu_page_sub ul li.has_sub a', function() {
			return false;
		});
        
  
		if($('.owl_product_slide').length){
			
				$('.owl_product_slide').owlCarousel({
                                        loop:true,
                                        nav:false,
                                        autoplay:true,
                                        autoplayTimeout:7000,
                                        autoplayHoverPause:true,
                                        navigation: false,
                                        responsive:{
                                            0:{
                                                items:1
                                            }
                                        }
              })
                                    
			     $(".kmt-btn-slider .next-product").click(function(){
                                        $(".owl_product_slide").trigger('next.owl.carousel');
                                        $(".owl_product_slide").trigger('loop.owl.carousel');
                                    });
                                        
                                    $(".kmt-btn-slider .prev-product").click(function(){
                                        $(".owl_product_slide").trigger('prev.owl.carousel');
                                        $(".owl_product_slide").trigger('loop.owl.carousel');
                                    });	
		}
		
		
		
		$('.owl_album').owlCarousel({
                loop:true,
                nav:false,
                autoplay:true,
                autoplayTimeout:8000,
                autoplayHoverPause:true,
                navigation: false,
                responsive:{
                    0:{
                        items:1
                    },
					568:{
                        items:2
                    },
                    736:{
                        items:3
                    },
					1024:{
                        items:4
                    },
                    1200:{
                        items:4
                    }
                }
            })
		
		if($('.wow').length && kmt_width > 768){
		  var wow = new WOW(
			  {
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       0,          // distance to the element when triggering the animation (default is 0)
				mobile:       true,       // trigger animations on mobile devices (default is true)
				live:         true       // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		}
		
		
		if($("#slider4").length){
			
			$("#slider4").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 1500,
				timeout: 4000,
				namespace: "callbacks",
			}); 
			
//			$( ".callbacks_nav" ).hide();
//			/* Begin hover callbacks_nav */
//			$( ".callbacks_container" ).hover(function() { 
//				$(this).find(".callbacks_nav").show();
//			},function(){
//				$(this).find(".callbacks_nav").hide();
//			});
//			/* Begin hover callbacks_nav */
		
		}

		
	if($('.owl_ecosystem').length){

		$('.owl_ecosystem').owlCarousel({
			loop:true,
			nav:false,
			autoplay:true,
			autoplayTimeout:6000,
			autoplayHoverPause:true,
			navigation: false,
			dots: false,
			responsive:{
				0:{
					items:1
				},
				568:{
					items:2
				},
				768:{
					items:3
				}
			}
		})

		$(".kmt-btn-slider .next-owl_ecosystem").click(function(){
			$(".owl_ecosystem").trigger('next.owl.carousel');
			$(".owl_ecosystem").trigger('loop.owl.carousel');
		});

		$(".kmt-btn-slider .prev-owl_ecosystem").click(function(){
			$(".owl_ecosystem").trigger('prev.owl.carousel');
			$(".owl_ecosystem").trigger('loop.owl.carousel');
		});
	}
		
	if($('.owl_person').length){

		$('.owl_person').owlCarousel({
			loop:true,
			nav:false,
			autoplay:true,
			autoplayTimeout:4000,
			autoplayHoverPause:true,
			navigation: false,
			dots: false,
			responsive:{
				0:{
					items:1
				},
				568:{
					items:2
				},
				768:{
					items:3
				},
				1024:{
					items:4
				}
			}
		})

		$(".kmt-btn-slider .next-person").click(function(){
			$(".owl_person").trigger('next.owl.carousel');
			$(".owl_person").trigger('loop.owl.carousel');
		});

		$(".kmt-btn-slider .prev-person").click(function(){
			$(".owl_person").trigger('prev.owl.carousel');
			$(".owl_person").trigger('loop.owl.carousel');
		});

	}
		
		
	if($('.owl_feedback').length){

		$('.owl_feedback').owlCarousel({
			loop:true,
			nav:false,
			autoplay:false,
			autoplayTimeout:3500,
			autoplayHoverPause:true,
			navigation: true,
			dots: false,
			responsive:{
				0:{
					items:1
				}
			}
		})
		
		$(".feedback-btn-slider .next-feedback").click(function(){
			$(".owl_feedback").trigger('next.owl.carousel');
			$(".owl_feedback").trigger('loop.owl.carousel');
		});

		$(".feedback-btn-slider .prev-feedback").click(function(){
			$(".owl_feedback").trigger('prev.owl.carousel');
			$(".owl_feedback").trigger('loop.owl.carousel');
		});
	}
		
		
	if($('.owl_partner').length){

		$('.owl_partner').owlCarousel({
			loop:true,
			nav:false,
			autoplay:false,
			autoplayTimeout:3500,
			autoplayHoverPause:true,
			navigation: true,
			dots: false,
			responsive:{
				0:{
					items:2
				},
				568:{
					items:3
				},
				768:{
					items:4
				},
				1024:{
					items:6
				}
			}
		})
		
		$(".partner-btn-slider .next-partner").click(function(){
			$(".owl_partner").trigger('next.owl.carousel');
			$(".owl_partner").trigger('loop.owl.carousel');
		});

		$(".partner-btn-slider .prev-partner").click(function(){
			$(".owl_partner").trigger('prev.owl.carousel');
			$(".owl_partner").trigger('loop.owl.carousel');
		});
	}
		
		if($('.owl_icon').length){
		
            $('.owl_icon').owlCarousel({
                loop:false,
                nav:false,
                autoplay:true,
                autoplayTimeout:6000,
                autoplayHoverPause:true,
                navigation: false,
                responsive:{
                    0:{
                        items:2
                    },
					568:{
                        items:3
                    },
                    1024:{
                        items:4
                    },
                    1200:{
                        items:5
                    }
                }
            })
				
		}
        
        if($('.owl_same_post').length){
		
            $('.owl_same_post').owlCarousel({
                loop:false,
                nav:false,
                autoplay:true,
                autoplayTimeout:4000,
                autoplayHoverPause:true,
                navigation: false,
                responsive:{
                    0:{
                        items:1
                    },
					568:{
                        items:2
                    },
                    1024:{
                        items:3
                    },
                    1200:{
                        items:4
                    }
                }
            })
				
		}

            $( ".kmt-btn-slider button" ).hover(function() { 
				$('.owl-carousel').trigger('stop.owl.autoplay');
			},function(){
				$('.owl-carousel').trigger('play.owl.autoplay');
			});
		
			$( ".kmt-btn-partner button" ).hover(function() { 
				$('.owl-carousel').trigger('stop.owl.autoplay');
			},function(){
				$('.owl-carousel').trigger('play.owl.autoplay');
			});
		
		/* Stop menu */
		$(window).scroll(function(){
			if($(this).scrollTop() > 200) {
				$('a#top').fadeIn();
			} else {
				$('a#top').fadeOut();
			}
	
		});
        
        $(document).on( "click",'#wl_bt a', function() {
            var url = $(this).attr('href');
            $.post(url, {}, function (res) {
                if(res==1){
                    $('#wl_bt').remove();
                    alert('Added to wishlist');
                }
            });
            
           return false;
        });
		
		$('a#top').hide().click(function() {
			$('html, body').animate({scrollTop:0}, 1000);
			return false;
		});
	
		
		$(document).on( "click",'#wrap_img_thumbs div a', function() {
			var img = $(this).attr('href');
			$('#img_dt_item a').attr('href', img); 
  			$('#img_dt_item img').attr('src', img); 
			return false;
		});
		
		          
    });
    
    
    
	
		$('#icon_search').click(function(event){
			event.stopPropagation();
			$("#wrap_search").toggle('fade');
		});
		
		$("#wrap_search").on("click", function (event) {
			event.stopPropagation();
		});
	
	
		
})(window.jQuery);


function startListHeight($tag) {
    function setHeight(s) {
        var max = 0;
        s.each(function() {
            var h = $(this).height();
            max = Math.max(max, h);
        }).height('').height(max);
    }
  
    $(window).on('ready load resize', setHeight($tag));
}

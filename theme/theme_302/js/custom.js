//sticky header on scroll
$(document).ready(function () {
    $(window).load(function () {
        $(".sticky").sticky({topSpacing: 0});
    });
    
    //on hover dropdown menu
    //$(".navbar-nav>.dropdown").hover(function () {
    //$(this).toggleClass("open");
	//});
});

/* ==============================================
 WOW plugin triggers animate.css on scroll
 =============================================== */
$(document).ready(function () {
    var wow = new WOW(
            {
                boxClass: 'wow', // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset: 100, // distance to the element when triggering the animation (default is 0)
                mobile: false        // trigger animations on mobile devices (true is default)
            }
    );
    wow.init();
});

$(document).ready(function () {
	$('[data-toggle="slide-collapse"]').on('click', function() {
		$navMenuCont = $($(this).data('target'));
		$navMenuCont.animate({
		'width': 'toggle'
		}, 100);
	$(".menu-overlay").fadeIn(200);

	});
		$(".menu-overlay").click(function(event) {
		$(".navbar-toggle").trigger("click");
		$(".menu-overlay").fadeOut(200);
	});
});


//parallax
$(document).ready(function () {
    $(window).stellar({
        horizontalScrolling: false,
        responsive: true/*,
         scrollProperty: 'scroll',
         parallaxElements: false,
         horizontalScrolling: false,
         horizontalOffset: 0,
         verticalOffset: 0*/
    });
});

//owl carousel for work
$(document).ready(function () {

    $("#work-carousel").owlCarousel({
    loop:false,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});

});


//owl carousel for news
$(document).ready(function () {

    $("#news-carousel").owlCarousel({
        // Most important owl features
        items: 2,
        itemsCustom: false,
        itemsDesktop: [1199, 2],
        itemsDesktopSmall: [980, 2],
        itemsTablet: [768, 2],
        itemsTabletSmall: false,
        itemsMobile: [479, 1],
        singleItem: false,
        startDragging: true,
        autoPlay: 4000
    });

});



//owl carousel for testimonials
$(document).ready(function () {

    $("#testi-carousel").owlCarousel({
    loop:false,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
	});


	$('.play').on('click',function(){
		itemcarousel.trigger('play.owl.autoplay',[1000])
	})
	$('.stop').on('click',function(){
		itemcarousel.trigger('stop.owl.autoplay')
	})


    $(".owl-yt-slider").owlCarousel({
    loop:false,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
	});

});
//featured work carousel slider

$(document).ready(function () {

    $("#featured-work").owlCarousel({
    loop:false,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
	});

});
/* ==============================================
 Counter Up
 =============================================== */
jQuery(document).ready(function ($) {
    $('.counter').counterUp({
        delay: 10,
        time: 800
    });
});
//MAGNIFIC POPUP
$(document).ready(function () {
$('.show-image').magnificPopup({type: 'image'});
});

/* ==============================================
 flex slider
 =============================================== */

$(document).ready(function () {
$('.main-flex-slider,.testi-slide').flexslider({
    slideshowSpeed: 5000,
    directionNav: false,
    animation: "fade"
});
$('.testi-slide').flexslider({
    slideshowSpeed: 5000,
    directionNav: false,
    animation: "fade",
    smoothHeight:true
});
});
//OWL CAROUSEL
$(document).ready(function () {
$("#clients-slider").owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
	});
});

// 상품소개2
$(window).load(function(){
  $('#carousel').flexslider({
	animation: "slide",
	controlNav: false,
	animationLoop: false,
	slideshow: false,
	itemWidth: 210,
	itemMargin: 5,
	asNavFor: '#slider'
  });

  $('#slider').flexslider({
	animation: "slide",
	controlNav: false,
	animationLoop: false,
	slideshow: false,
	sync: "#carousel",
	start: function(slider){
	  $('body').removeClass('loading');
	}
  });
});



/*========tooltip and popovers====*/
$(document).ready(function () {
$("[data-toggle=popover]").popover();

$("[data-toggle=tooltip]").tooltip();
});

//transparent header

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.transparent-header').css("background", "#252525");
        } else {
            $('.transparent-header').css("background", "transparent");
        }
    });
});

 //Search         
    (function () {

        $('.top-search').on('click', function() {
            $('.search').fadeIn(500, function() {
              $(this).toggleClass('search-toggle');
            });     
        });

        $('.search-close').on('click', function() {
            $('.search').fadeOut(500, function() {
                $(this).removeClass('search-toggle');
            }); 
        });

    }());



/***********************************************************
* ACCORDION
***********************************************************/
    $('.panel-ico a[data-toggle="collapse"]').on('click', function () {
        if ($(this).closest('.panel-heading').hasClass('active')) {
            $(this).closest('.panel-heading').removeClass('active');
        } else {
            $('.panel-heading a[data-toggle="collapse"]').closest('.panel-heading').removeClass('active');
            $(this).closest('.panel-heading').addClass('active');
        }
    });
    
 
/***********************************************************
* owl-carousel
***********************************************************/

$(document).ready(function(){

});


$(document).ready(function(){

	$('#banner-carousel').owlCarousel({
		loop:false,
		margin:10,
		nav: true,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsive:{
			480:{
				items:2
			},
			600:{
				items:6
			}
		}
	});


	$('#latest-carousel').owlCarousel({
		loop:false,
		lazyLoad:true,
		margin:10,
		nav: true,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:4
			}
		}
	});


	$('#latest-carousel-2').owlCarousel({
		loop:false,
		lazyLoad:true,
		margin:10,
		nav: true,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:4
			}
		}
	});


	$('#latest-carousel-gallery').owlCarousel({
		loop:false,
		lazyLoad:true,
		margin:10,
		nav: true,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:4
			}
		}
	});



	$('#latest-carousel-yt').owlCarousel({
		loop:false,
		lazyLoad:true,
		margin:10,
		nav: true,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:4
			}
		}
	});



	$('#item-carousel').owlCarousel({
		autoplay:true,
		autoplayTimeout:3000,
		autoplayHoverPause:false,
		loop:false,
		margin:0,
		nav: true,
		navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:4
			}
		}
	});



});



	  
	  
$(document).ready(function(){
	$("#select-1").change(function(){
		var a = $("#select-1 option:selected").val();
		var u = $("input[name=theme_url]").val();
		var url = u + "/ajax.php";
		var params = "mode=se&menu="+a;
		$.ajax({      
			type:"POST",  
			url:url,
			data:params,
			success:function(data){
				var ur = data.split('|');
				if(ur[0] == 'url'){
					if(ur[2] == 'self'){
						location.href = ur[1];
					}else{
						//var NWindow = window.open("about:blank");
						var NWindow = window.open("#","_self");
						NWindow.location.href = ur[1];
					}
				}else{
					$('#select-2').children('option').remove();
					$("#select-2").append("<option>선택</option>");
					$("#select-2").append(data).selectric();
					$('.ds').css("display","block");
				}
			}
		});
		
	});
});
$(document).ready(function(){
	$("#select-3").change(function(){
		var a = $("#select-3 option:selected").val();
		var u = $("input[name=theme_url]").val();
		var url = u + "/ajax.php";
		var params = "mode=se&menu="+a;
		$.ajax({      
			type:"POST",  
			url:url,
			data:params,
			success:function(data){
				var ur = data.split('|');
				if(ur[0] == 'url'){
					if(ur[2] == 'self'){
						location.href = ur[1];
					}else{
						//var NWindow = window.open("about:blank");
						var NWindow = window.open("#","_self");
						NWindow.location.href = ur[1];
					}
				}else{
					$('#select-4').children('option').remove();
					$("#select-4").append("<option>선택</option>");
					$("#select-4").append(data);
					$('.ds').css("display","block");
				}
			}
		});
		
	});
});

$('.menus-pc').selectric();

$("#msg").click(function(){
	var surl = $("#send_url").val();
	var bo_name = $("input[name=name]").val();
	var bo_email = $("input[name=email]").val();
	var bo_tel = $("input[name=tel]").val();
	var bo_content = $("#content").val();
	var secode = $("input[name=secode]").attr('placeholder');
	var se_code = $("input[name=secode]").val();
	var ckEmail = /([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
	if(bo_name == '')
	{
		alert('이름을 입력해주세요.');
		return false;
	}
	if(bo_email == '')
	{
		alert('이메일을 입력해주세요.');
		return false;
	}

	if(bo_email == '')
	{
		alert('이메일을 입력해주세요.');
		return false;
	}else{
		if(!ckEmail.test(bo_email)) {
			alert('이메일 주소를 정확히 입력해주세요.');
			return false;
		}
	}
	if(bo_tel == '')
	{
		alert('연락처를 입력해주세요.');
		return false;
	}
	if(bo_content == '')
	{
		alert('문의내용을 입력해주세요.');
		return false;
	}
	if(se_code == '')
	{
		alert('보안코드를 입력해주세요.');
		return false;
	}
	if(secode != se_code)
	{
		alert('보안코드가 맞지 않습니다. 정확히 입력해주세요.');
		return false;
	}

	if($("input:checkbox[name=agree]").is(":checked") != true) {
		alert('이용약관에 동의하셔야 합니다.');
		return false;
	}

	var url = surl + "/contact.php";
	var params = "bo_name=" + bo_name + "&bo_email=" + bo_email + "&bo_tel=" + bo_tel + "&bo_content=" + bo_content + "&code=" + se_code;

	$.ajax({      
		type:"POST",  
		url:url,
		data:params,
		success:function(data){	
			alert('문의가 등록되었습니다. 최대한 빠르게 연락드리겠습니다.')
			location.reload();
		}
	});

});

// 1:1 문의게시판
$(function() {
	$(".cmt_wait").on("click", function() {
		var wrck = confirm("답변완료로 변경하시겠습니까?");
		if(wrck == true){

			$(this).removeClass("btn-danger");
			$(this).addClass("btn-default");
			
			var u = $("input[name=skin_path]").val();
			var bo = $("input[name=bo_table]").val();
			var wrid = $("input[name=wr_id]").val();
			var url = "/pages/ajax/ajax.php";
			var params = "mode=qa&bo_table=" + bo + "&wr_id=" + wrid ;
			$.ajax({      
				type:"POST",  
				url:url,
				data:params,
				success:function(data){

				}
			});
			location.reload();
		}
	});
	

	$(".cmt_cancle").on("click", function() {
		var wrck = confirm("답변대기로 변경하시겠습니까?");
		if(wrck == true){
			var u = $("input[name=skin_path]").val();
			var bo = $("input[name=bo_table]").val();
			var wrid = $("input[name=wr_id]").val();
			var url = "/pages/ajax/ajax.php";
			var params = "mode=qa_cancle&bo_table=" + bo + "&wr_id=" + wrid ;
			$.ajax({      
				type:"POST",  
				url:url,
				data:params,
				success:function(data){

				}
			});
			location.reload();
		}
	});
	
});


$(function() {
	$("#btn-top").on("click", function() {
		$("html, body").animate({scrollTop:0}, '500');
		return false;
	});
});

$(document).ready(function(){
	$('.breadcrumb-wrap').backstretch([
	  "/pages/img/etc/1.jpg",
	  "/pages/img/etc/2.jpg",
	  "/pages/img/etc/3.jpg"
	], {
		fade: 750,
		duration: 4000
	});
});

/* 
	아이콘을 삭제하거나 추가하실경우 아래 항목을 수정해주세요
	아이콘은 폰트어썸4를 사용합니다.
	https://fontawesome.com/v4.7/icons/

*/
$.socialfloating({
	icons:"fontawesome4",
	buttons:[
		[
			{icon:"fa fa-facebook",enabled:!0,link:"https://www.facebook.com",color:"#3b5998"},
			{icon:"fa fa-twitter",enabled:!0,link:"https://twitter.com",color:"#00aced"},
			{icon:"fa fa-youtube",enabled:!0,link:"https://www.youtube.com/",color:"#ff0000"}
		],

		[
			{icon:"fa fa-phone",enabled:!0,link:"tel:0100000000"},
			{icon:"fa fa-envelope-o",enabled:!0,link:"mailto:softzonecokr@naver.com"},
			{icon:"fa fa-user-o",enabled:!0,link:"/pages/contact.php"}
		]
	]
});

//$(document).ready(function(){ 
//	$('#socialfloating a').attr('target', '_blank');
//});
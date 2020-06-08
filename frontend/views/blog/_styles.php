
 <style>
 
 body .container{max-width: 990px;width: 100%;}
    .header{position:absolute;z-index:102;top:0;left:0;right:0;}
    .header_white .header__content{margin:0 auto;width:100%;padding:0 24px;}
	.header_white .header__content:after{position:absolute;content:'';bottom:-1px;left:30px;right:30px;height:1px;}
	.headerWhite  .header__content{margin:0 auto;width:100%;padding:0 24px; box-sizing: border-box;}
	.headerWhite  .header__content:after{position:absolute;content:'';bottom:-1px;left:30px;right:30px;height:1px;}
    .header__logo{position:relative;float:left;height:70px;line-height:70px;}
    .header__logo .tt1{display:inline-block;opacity:1;visibility:visible;transition-duration:300ms;}
    .header__logo .tt2{position:absolute;left:0px;transform:translateX(0%);display:inline-block;opacity:0;visibility:hidden;transition-duration:300ms;}
    .header__logo .tt3{position:absolute;left:24px;transform:translateX(-50%);display:inline-block;opacity:0;visibility:hidden;transition-duration:300ms;}
    .header__logo img{vertical-align:middle;}
    .header__logo:active{top:1px;}
    .header__menu-link{position:relative;display:inline-block;margin:0 10px;line-height:30px;font-size:18px;font-weight:500;color:#ffffff !important;text-decoration:none;}
    .header__menu-link:active{top:1px;}
    .header__menu-link:first-child{margin-left:0;}
    .header__menu-link:last-child{margin-right:0;}
    .header__social-mobile-control{display:none;}
    .header__social{display:none;}
    .headerWhite.header{background:#fff;box-shadow:inset 0 -1px 0 0 rgba(226, 226, 226, 1), 0 5px 10px 0 rgba(226, 226, 226, 0.15);}.headerWhite .header__content:after{display:none;}
    .headerWhite.header .header__menu .header__menu-link{color:#fff !important;}
    .headerWhite.header .header__menu.header__menu_visible .header__menu-link,
    .headerWhite.header .header__menu.header__menu_visible .header__menu-link:hover{color:#fff !important;}
    .headerWhite.header .header__menu .header__menu-link:hover{color:#fff !important;}
    .headerWhite.header .header__menu-link:nth-last-child(2){margin-left:10px;}
    .headerWhite.header .header__logo .tt2{position:static;display:inline-block;opacity:1;visibility:visible;transition-duration:300ms;transform:none;}
    .blog
    {
	    margin-top:20px;
    }
    .blog h1{
        display: none;
    }
    .head-blog{
        height: 545px;
        overflow: hidden;
        margin-top: 70px;
        position: relative;
        /* background-color: #7a7683; */
        transition: all 1s;
        display:none;
    }
    .head-blog .loader-blog{
        position: absolute;
        top: 50%;
        left:50%;
        transform: translate(-50%,-50%);
    }
    .head-blog .loader-blog img{
        animation: rotate infinite 4s linear;
        width: 100px;
        height: 100px;
    }
    @keyframes rotate{100%{transform:rotate(360deg);}
    }
    .marker{
        min-height:125px;
    }
    .head-blog .sliding-blog{
        display: none;
        height: 545px;
    }
    .head-blog .slick-slide{
        position: relative;
        height: 545px;
        overflow: hidden;
    }
    .head-blog .slick-slide img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 100%;
        opacity: .4;
        transition: all .4s;
    }
    /* .head-blog.ready{
        background-color: #7a7683;
    } */
    /* .head-blog.ready .slick-slide img{
        opacity:.4;
    } */
    .head-blog .head-cont{
        position: absolute;
        max-width: 720px;
        width: 100%;
        top:50%;
        left:50%;
        transform: translate(-50%, -58%);
        text-align: center;
        /* opacity: 0; */
        transition: all .4s;
    }
    .head-blog .head-cont h2{
        color:#fff;
        font-size:70px;
        margin:0;
        line-height: 84px;
        margin-bottom: 25px;
        letter-spacing: .5px;
        height: 255px;
    }
    .head-blog .head-cont a{
        line-height: 50px;
        border:1px solid #fff;
        border-radius: 25px;
        padding: 0 43px;
        color: #fff;
        display: inline-block;
        font-size: 18px;
        transition: all .4s;
    }
    .head-blog .head-cont a:hover{
        background-color: rgba(255, 255, 255, .2);
    }
    .drop-category{
        width: 100%;
        margin: 0 auto;
        line-height: 50px;
        padding: 0 20px;
        background-color: transparent;
        border:medium none;
        border-radius: 25px;
        outline:none;
        text-align: left;
        position: relative;
        transition: all .4s;
    }
    .drop-category .arrow{
        position: absolute;
        top: 50%;
        right: 20px;
        display: block;
        margin-top: -5px;
        height: 10px;
        width: 16px;
        background-image: url(/images/blog/arrow-down.png);
    }
    .my-slider *{
        outline: none;
    }
    .slick-dots{
        bottom:50px;
    }
    .slick-dots li{
        width: auto;
        height:auto;
    }
    .slick-dots li button{
        background-color: rgba(255, 255, 255, 0.502);
        height: 16px;
        width: 16px;
        border-radius: 50%;
        transition: all .4s;
        padding: 0;
    }
    .slick-dots li.slick-active button{
        background-color: #fff !important;
    }
    .slick-dots li button:hover{
        background-color: rgba(255, 255, 255, .7);
    }
    .slick-dots li button:before{
        color:transparent !important;
    }

    .markers{
        padding: 60px 0;
    }
    .marker-list{
        text-align: center;
    }
    @media (min-width: 768px){
        .marker-list{
            display: inline-block !important;
        }
    }
    .marker-list .mlist{
        list-style: none;
        display: inline-block;
        margin: 0 4px;
    }
    .marker-list .mlist .link{
        display: block;
        padding: 0 15px;
        color: #fff;
        line-height: 40px;
        transition: color .4s;
    }
    .marker-list .mlist .link:hover{
        color: #9b9b9b;
    }
    .category{
        text-align: left;
        font:30px 'Raleway Bold', sans-serif;
        color: #fff;
        margin:16px 0 ;
    }
    .blog .post{
        float:none !important;
        display: inline-block;
        margin:0 -2px;
        vertical-align: top;
        text-align: center;
        padding: 15px 0;
        min-height:660px;
    }
    .post-img{
        text-align: center;
        display: block;
        position: relative;
        width: 300px;
        height: 150px;
        margin: 0 auto;
        overflow: hidden;
    }
    .post-img img{
	    /* position: absolute; */
	    width: 120%;
	    /* top: -20%; */
	    /* transform: translate(-50%, -50%); */
	    /* margin-left: -10%; */
    }
    .blog .title{
        font:12px 'Montserrat', sans-serif;
        color:#fff;
        text-align: center;
        text-transform: uppercase;
        margin-top: 40px;
    }
    .blog h2:not(.category){
        margin: 25px 0;
        /*     padding: 0 10px;
        min-height: 120px; */
    }
    .blog .bot-link{
        font:26px/36px 'Raleway Bold', sans-serif;
        color: #fff;
        text-align: center;
        vertical-align: middle;
        transition: all .4s;

    }
    .blog h2:hover .bot-link{
        color: #fff;
    }
    .blog .small-content{
        font:16px/30px 'Montserrat', sans-serif;
        color: #fff;
        max-height: 300px;
        overflow: hidden;
        margin: 0 auto 50px;
        width: 300px;
    }
    .foot-form{
        background-color: #fff5de;
        border-bottom: 1px solid #151515;
        padding:100px 0;
    }
    .foot-form{
        text-align: center;
    }
    .foot-form h2{
        font-size:42px;
        color: #fff;
    }
    .foot-form .callback{
        margin-top: 25px;
    }
    .callback .mail,
    .callback .subscribe{
        outline: none;
        width: 100%;
        border-radius: 30px;
    }
    .callback .mail{
        max-width: 408px;
        display: inline-block;
        height: 60px;
        margin-right: 20px;
        border:1px solid #ffba00;
        padding: 0 25px;
        font-size:18px;
        color: #a99689;
    }
    .sub-menu
    {
	    padding:5px 24px 0;
	    width: 100%;
        font-size: 14px;
    }
    .marker-list.categories
    {
	    margin: 0;
	    padding: 0;
    }

		 .marker-list form.mlist{
			padding: 0;
			margin: 0;
		}
        form.mlist .searchfield {
            width: 80px;
            margin: auto;
            color: #fff !important;
            border:0;
            background: #151515;
            border-bottom: 1px solid #fff;
            padding-left: 5px;
        }

        .marker-list form.mlist .search-submit {
            position: absolute;
            top: 0;
            right:0;
            background: #ffba00;
            color: #fff;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
            display:none;

        }

        
    @media (max-width:991px){
		.header__logo .tt1{
			margin-left:25px;
		}
        .top-header{position:fixed;top:0;left:0;right:0;width:100%;}
        .header{position:fixed;z-index:1000;}
        .sub-menu
        {
	        position:relative;
	        z-index: 5;
	        background: #151515;        }
        .header_white{background:#ffffff;box-shadow:inset 0 -1px 0 0 rgba(226, 226, 226, 1), 0 5px 10px 0 rgba(226, 226, 226, 0.15);transition-duration:300ms;}
        .header__content{width:100%;text-align:center;}
        .header_white .header__content:after{background:transparent;}
        .header__logo{visibility:hidden;float:none;}
        .header_white .tt1{opacity:0;visibility:hidden;}
        .header_white .tt2{opacity:1;visibility:visible;}
        .header{position:fixed;z-index:1000;}
        .header_white{background:#ffffff;box-shadow:inset 0 -1px 0 0 rgba(226, 226, 226, 1), 0 5px 10px 0 rgba(226, 226, 226, 0.15);transition-duration:300ms;}
        .header__content{width:100%;text-align:left;}
        .header_white .header__content:after{background:transparent;}
        .header__logo{visibility:hidden;float:none;}
        .header_white .tt1{opacity:0;visibility:hidden;}
        .header_white .tt2{opacity:1;visibility:visible;}
        .header__menu-mobile-control{display:block;position:absolute;z-index:102;top:0;right:0;width:90px;height:70px;background: url('/images/menu.svg') no-repeat 30px 50%;cursor:pointer;transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
        .header_white .header__menu-mobile-control{background-image:url('/images/menu2.svg');}
        .headerWhite .header__menu-mobile-control{background-image:url('/images/menu2.svg');}
        .header__menu-mobile-control_close{background-image:url('/images/close.svg') !important;}
        .header__menu{position:fixed;z-index:101;top:0;left:0;right:0;height:0;padding-top:0;background:#fff;overflow:hidden;visibility:hidden;transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
        .header__menu_visible{height:100%;visibility:visible;}
        .header__menu-link{display:block;margin:0;line-height:60px;font-size:24px;font-weight:400;text-align:right; padding-right: 29px;}
        .headerWhite.header .header__menu .header__menu-link:hover span{color:#fff !important;}
        .header__menu-link:first-child{margin-top:70px;}
        .header__menu-link:last-child{margin-bottom:0px;}
        .header__menu-link:active{top:0;}
        .header__menu_visible .header__menu-link{opacity:1;}
        .header__menu-link:nth-last-child(2){margin-left:auto;}
        .headerWhite.header .header__menu .header__menu-link{color:#fff !important;}
      /*  .header__menu-link:after{position:absolute;bottom:0;right:0;width:100%;background:rgba(255, 255, 255, 0.34);}*/
        .header__menu-link:last-child:after{background:transparent;}
        /**/.header__social-mobile-control{display:block;position:absolute;z-index:100;top:0;right:0;width:90px;height:70px;background:url('/images/social.svg') no-repeat 28px 50%;cursor:pointer;transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
        .header_white .header__social-mobile-control,
        .headerWhite .header__social-mobile-control{background:url('/images/social2.svg') no-repeat 36px 50%;}
        .header__social-mobile-control_active{background:url('/images/social.svg') no-repeat 18px 50%, #fff !important;}
        .header__social{display:block;position:absolute;z-index:100;top:70px;right:0;overflow:hidden;visibility:hidden;}
        .header__social_visible{display:block;visibility:visible;}
        .header__social-link{position:relative;display:block;padding:0 80px 0 30px;line-height:60px;font-size:20px;font-weight:600;color:#fff !important;background:#fff;text-align:right;text-decoration:none;transform:translateX(100%);transition-timing-function:cubic-bezier(0.75, -0.17, 0.23, 1.19);transition-duration:300ms;}
        .header__social-link:after{position:absolute;content:'';bottom:0;left:30px;right:30px;height:1px;background:rgba(255, 255, 255, 0.3);}
        .header__social-link:last-child:after{width:0;}
        .header__social_visible .header__social-link{transform:translateX(0);}
        .header__social-link:nth-child(1){transition-delay:40ms;}
        .header__social-link:nth-child(2){transition-delay:80ms;}
        .header__social-link:nth-child(3){transition-delay:120ms;}
        .header__social-link:nth-child(4){transition-delay:160ms;}
        .header__social-link:nth-child(5){transition-delay:200ms;}
        .header__social-link:nth-child(6){transition-delay:240ms;}
        .header__social-link img{position:absolute;right:30px;top:50%;transform:translateY(-50%);}
        .head-blog .head-cont h2{
            font-size:60px;
            line-height: normal;
        }
        .blog{
            max-width: 634px;
            margin: 0 auto;
            padding-top:40px;
            
        }
        .marker-form label{
            margin: 20px 10px;
        }
        /* .head-blog img{
            height: 100%;
        } */
        .blog h2:not(.category){
            margin: 30px auto;
        }
        .blog .small-content{
            margin: 0 auto 80px;
        }
        .head-blog .slick-slide img{
            width: auto;
            height:100%;
        }
    }
    @media (max-width: 767px){
        .head-blog .head-cont h2{
            font-size: 34px;
            padding: 0 40px;
        }
        .blog .post{
        	margin:0 auto;
        	width:100%;
        	min-height: 0;
        }
        .post-img{
            width: auto;
            margin:0 15px;
            height:180px;
        }
        .blog h2:not(.category){
            min-height:auto;
            margin-bottom: 25px;
            max-width: none;
        }
        .blog .small-content{
            max-width: none;
            margin-bottom: 65px;
            height:auto;
            width:auto;
            padding: 0 15px;
             font:16px/28px 'Montserrat', sans-serif;
        }
        .callback .mail{
            display: block;
            margin:0 auto 20px;
            text-align: center;
        }
        .foot-form{
            padding: 100px 30px;
        }
		.drop-category{display:none;}


        .drop-category.open .arrow{
            transform: rotate(180deg);
        }


    }

    @media (max-width: 600px){
		 .category{
			text-align: left;
			font:30px 'Raleway Bold', sans-serif;
			color: #fff;
			margin:12px 0 12px;
		}
        .link.search-button
        {
	        display: none!important;
        }
        .marker-list .mlist .link
        {
             padding: 0 10px;
        }
    }
    @media (max-width: 449px){
        .header__content:after{left:20px;right:20px;}
        .header__logo{height:60px;line-height:60px;}
        .header_white .tt2,
        .headerWhite.header .header__logo .tt2{opacity:0;visibility:hidden;}
        .header_white .tt3,
        .headerWhite .header__logo .tt3{opacity:1;visibility:visible;}
        .header__menu-mobile-control{width:70px;height:60px;background-position-x:21px;}
        .header__menu_visible{padding-top:0px; z-index: 999999;}
        .header__social-mobile-control{width:70px;height:60px;background-position-x:18px;}
        .header__social{top:60px;}
        .header__social-link{padding:0 70px 0 20px;}
        .header_white .header__social-mobile-control{background-position-x:18px;}
        .headerWhite .header__social-mobile-control{background-position-x:16px;}
        .header_white .header__social-mobile-control_active{background:url('/images/social.svg') no-repeat 18px 50%, #fff;}
        .head-blog .head-cont h2{
            /* padding: 0 20px; */
        }
        .sub-menu
        {
	        padding: 60px 24px 0;
        }
        .marker-list .mlist .link
        {
	        line-height: 30px;
        }
        .blog .post{
            /* padding: 0 20px; */
        }
        .post-img{
            margin: 0 -20px;
        }
        .blog .small-content
        {
	        padding: 0;
        }
        .foot-form{
            padding: 100px 20px;
        }
        .blog .bot-link{
            font-size: 22px;
        }
        
        .pagination li a, .pagination li span{
            width: 30px;
            line-height: 30px;
        }
		.bar
		{
			top:60px!important;
		}
    }
	
	</style>
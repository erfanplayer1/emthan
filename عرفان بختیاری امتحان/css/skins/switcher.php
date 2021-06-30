/*=================================================================*/
/* Typography
/*=================================================================*/
a,
#footer .tweet_list li a:first-child,
.nav-tabs li.active a,
.nav-tabs li.active a:hover,
#sidebar .open .accordion-toggle,
#filter-bar #filters li a.selected,
#filter-bar #filters li a:hover{
	color: #e15c32;
}

a:hover,
#sidebar ul li a:hover,
#footer li:hover a,
#portfolio .project:hover h3 a,
#portfolio .project:hover h3 span,
a.social:hover{
	color: #e15c32;
}
p, 
li,
#sidebar ul li a{
	font-size: 12px;
	color: #b5b5b5;
}

h1, h2, h3, h4, h5, h6,
h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
	text-shadow: 0 1px 1px #030303;
	font-family: 'Yekan',"Helvetica Neue",  Helvetica, Arial, "Lucida Grande", sans-serif; 
	color: #dadad9;
	font-weight: normal;
	font-style: normal;
	line-height: 157%;
	margin-top: 10px;
	margin-bottom: 10px;
}

.social{
	font-family: 'socialicoregular';
}

h1{
	font-size: 25px;
	font-weight: 200;
}

h2{
	font-size: 20px;
	font-weight: 200;
}

h3{
	font-size: 14px;
	font-weight: bold;
	color: #d8d8d5;
}

h4{
	font-size: 12px;
}
a.more:hover{
	color: #5c5c57;
	text-decoration: underline;
}

strong{
	font-weight: bold;
}
em{
	font-style: italic;
}


html,
body{
	background: #000 url(black/bg.png) repeat !important;
}

#wrapper{
	background: transparent url(black/light.png) no-repeat top center;
}


/*=================================================================*/
/* Logo
/*=================================================================*/
#logo{
	background: transparent url(black/logo.png) no-repeat;
	display: block;
	width: 174px;
	height: 74px;
	text-indent: -9999px;
}
/*High resolution logo*/
@media 
only screen and (-webkit-min-device-pixel-ratio: 2),
only screen and (min-device-pixel-ratio: 2), 
only screen and (min-resolution: 192dpi) { 
	#logo{
		background: transparent url(black/logo@2x.png) no-repeat;
		background-size: 174px 74px;
	}
}
/*=================================================================*/
/* Menu
/*=================================================================*/
#menu .nav{
	background: url(black/menu.png) repeat-x 0 0 #3a3b3c;
}
#menu .nav > li{
	border-left: 1px solid #4b4b47;
	border-right: 1px solid #1b1b1a;
}
#menu .nav > li.open > a{
	background: transparent url(black/hover.png) repeat-x;
}
#menu .nav > li > a{
	color: #ffffff;
	text-shadow: 0 1px 1px #020202;
}
#menu .nav > li:hover > a{
	border-bottom: 3px solid #acd373;
	background: transparent url(black/hover.png) repeat-x;
}
#menu .nav > li.current > a,
#menu .nav > li.current_page_item > a,
#menu .nav > li.current:hover > a{
	border-top: 3px solid #f26c4f;
	background: transparent url(black/hover.png) repeat-x;
}
/*Submenu*/
#menu .nav .dropdown-menu > li{
	border-bottom: 1px solid #f1f0f0;
}
#menu .nav .dropdown-menu > li > a{
	color: #676764;
}
#menu .nav .dropdown-menu > li.current_page_item > a,
#menu .nav .dropdown-menu > li.current > a,
#menu .nav .dropdown-menu > li.active > a,
#menu .nav .dropdown-menu > li:hover > a{
	background: #f5f5f5;
	background-image: none;
}

/*Mobile menu*/
a.btn.btn-navbar{
	background: #000;
}
a.btn.btn-navbar:hover,
a.btn.btn-navbar:active{
	background: #4e4e4a;
}

/*=================================================================*/
/* Top Contact
/*=================================================================*/
#top-contact p,
#top-contact p a{
	color: #979792;
}
#top-contact span{
	color: #4c4c4b;
	text-shadow: 0 1px 1px #060606;
}
/*=================================================================*/
/* Page Header
/*=================================================================*/
#page-header ul.breadcrumbs li{
	color: #adadac;
}

#page-header ul.breadcrumbs li,
#page-header ul.breadcrumbs li a,
#page-header .breadcrumbs{
	font-weight: bold;
	font-size: 11px;
	text-shadow: 0 1px 1px #000000;
	font-weight: 500;
}

#page-header h1{
	text-transform: uppercase;
	font: 200 26px 'Yekan',"Helvetica Neue", Arial, Helvetica, Geneva, sans-serif;
	color: #f1f1f1;
}
/*=================================================================*/
/* Main
/*=================================================================*/
#main{
	background: #2a2a2a !important;
	border: 1px solid #312f2f;
	-moz-box-shadow: 0 1px 1px rgba(3, 3, 3, 0.1);
	-webkit-box-shadow: 0 1px 1px rgba(3, 3, 3, 0.1);
	box-shadow: 0 1px 1px rgba(3, 3, 3, 0.1);
	border-top: none;
}

/*=================================================================*/
/* Slider
/*=================================================================*/
/*Bullets*/
#main .bullet{	
	background: transparent url(black/bullets.png) no-repeat -23px 0px !important;
	width: 15px !important;
	height:17px !important;
	display: block !important;
}


#main .bullet:hover,
#main .bullet.selected{
	background-position: -5px 0 !important;
}

ul.ts_container li a{
	background: transparent url(black/bullets.png) no-repeat -23px 0px !important;
}
ul.ts_container li a:hover,
ul.ts_container li.selected a{
	background-position: -5px 0 !important;
}


ol.flex-control-nav.flex-control-paging li a{
	background: url(black/bullets.png) no-repeat -23px -5px transparent !important;
}
ol.flex-control-nav.flex-control-paging li a:hover,
ol.flex-control-nav.flex-control-paging li a.flex-active{
	background-position: -5px -5px !important;
}

a.nivo-control{
	background: url(black/bullets.png) no-repeat -23px -5px transparent !important;
}
a.nivo-control:hover,
a.nivo-control.active{
	background-position: -5px -5px !important;
}


#homepage-layers{
	background-color: #2a2a2a;
}

#main .ls-bottom-slidebuttons a{
	background: transparent url(black/bullets.png) no-repeat -23px 0px !important;
	width: 15px !important;
	height:17px !important;
	display: block !important;
	float: left;
	margin-right: 2px;
	margin-left: 2px;
}
#main .ls-bottom-slidebuttons a:hover,
#main a.ls-nav-active{
	background-position: -5px 0 !important;
}

/*=================================================================*/
/* Intro
/*=================================================================*/
.hsocial p{
	color: #989895 !important;
}
.hsocial a.social_icn{
	background-color: #434343;
	opacity: 0.7;
}
.hsocial a.social_icn:hover{
	background-color: #ea6137;
	opacity: 1;
}

/*=================================================================*/
/* Home Columns
/*=================================================================*/
.numbered .col{
	border-right: 1px solid #3f3d3d;
}

.numbered .col .number{
	color: #323232;
}
.numbered .col h3{
	margin-bottom: -1px;
	color: #dadad9;
}
.numbered .col p,
.numbered .col h3{
	position: relative;
	z-index: 99;
}

/*=================================================================*/
/* Recent Works
/*=================================================================*/
.recent-works a.more{
	font-weight: bold;
	color: #a2a29f;
}
.recent-works h3{
	color: #dadad9;
}
.recent-works .project h3,
.recent-works .project h3 a{
	color: #dadad9;
	font-size: 12px;
	font-weight: bold;
}
.recent-works .project:hover  h3 a{
	color: #e15c32;
}


/*=================================================================*/
/* From blog
/*=================================================================*/
.from-blog a.more{
	font-weight: bold;
	color: #a2a29f;
}
.from-blog .post{
	background-color: #383737;
	border: 1px solid #414040;
}
.from-blog h3{
	color: #dadad9;
}

.from-blog .post h4,
.from-blog .post h4 a{
	font-weight: bold;
}

.from-blog .post .date{
	font-size: 11px;
	color: #828281;
}

/*=================================================================*/
/* Services
/*=================================================================*/
#services .htabs .tab-content{
	border-left: 1px solid #353536 !important;
}
#services .htabs .tab-content .tab-pane{
	border-left: 6px solid #333333 !important;
}
#services .horizontal-tabs li{
	border-bottom: 1px solid #353536 !important;
}
#services .horizontal-tabs li a{
	color: #9f9d9d !important;
	background: none !important;
	border: none !important;
}

#services .horizontal-tabs li.active,
#services .horizontal-tabs li.active a,
#services .horizontal-tabs li.active a:hover,
#services .horizontal-tabs li:hover a,
#services .horizontal-tabs li a:hover,
#services .horizontal-tabs .nav-tabs li.active a,
#services .horizontal-tabs .nav-tabs li.active a:hover{
	background: #333333 !important;
	border-left: none !important;
	border-right: none !important;
	-webkit-border-radius: 0 !important;
	-moz-border-radius: 0 !important;
	border-radius: 0 !important;
	border-top: 1px solid #353536;
	color: #ffffff !important;
}

#services .horizontal-tabs li:hover{
	padding-right: 2px;
	background: #333333;
}


/*=================================================================*/
/* Blog
/*=================================================================*/
.full-post #comments #comments-bubble span,
.full-post #respond #comments-add-bubble span{
	background-color: rgb(96, 96, 96);
	background-color: rgba(96, 96, 96, 0.52);
}

#comments .commentlist .comment-entry{
	padding: 20px 20px 18px;
	margin-top: 10px;
	overflow: hidden;
	background-color: #333333;
	border: 1px solid #444141;
	-moz-box-shadow: 0 1px 1px rgba(5, 5, 5, 0.06);
	-webkit-box-shadow: 0 1px 1px rgba(5, 5, 5, 0.06);
	box-shadow: 0 1px 1px rgba(5, 5, 5, 0.06);
}
#comments .commentlist .comment-entry p.georgia{
	color: #a0a0a0;
}

#comments .commentlist .comment-entry .avatar img{
	padding: 3px;
	border: 1px solid #444141;
	background-color: #333333;
	-moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
	-webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
	box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
}
/*=================================================================*/
/* Portfolio
/*=================================================================*/
#portfolio h3.project-title{
	color: #cfcece !important;
}



/*Portfolio 1 column*/
.full-project-holder h3.project-title span.icon-plus{
	color: #989895;
	text-shadow: 0 1px 1px #000000;
}

.full-project-holder:hover a,
.full-project-holder:hover h3,
.full-project-holder:hover h3.project-title span.icon-plus{
	transition: color 1s;
	-moz-transition: color 1s; /* Firefox 4 */
	-webkit-transition: color 1s; /* Safari and Chrome */
	-o-transition: color 1s; /* Opera */
	color: #e15c32 !important;
}

.full-project-holder .flexslider{
	background: #313131;
}

/*=================================================================*/
/* Sidebar
/*=================================================================*/
body.sidebar-left #sidebar{
	border-right: 1px solid #3f3d3d;
}
body.sidebar-right #sidebar{
	border-left: 1px solid #3f3d3d;
}


#sidebar #search  .search_button{
	background: transparent url(black/search-submit.png) no-repeat;
}
#sidebar #searchform  #searchsubmit{
	background: transparent url(black/search-submit.png) no-repeat;
}


/*Social icons*/
#sidebar .social_icn{
	background-color: #434343;
	opacity: 0.7;
}
#sidebar a.social_icn:hover{
	background-color: #ea6137;
	opacity: 1;
}

/*Accordion*/
#sidebar .tab-icon{
	background: transparent url(black/tabs-icons.png) no-repeat 0 0px;
}
.accordion-toggle,
.accordion-body .accordion-inner{
	background-color: #333333;
}
.accordion-body .accordion-inner{
	color: #b5b5b5;
}
#sidebar .accordion-body{
	border: none;
	border-bottom: 0px solid #3b3838;
}
#sidebar .accordion-toggle{
	padding-left: 10px;
}

/*Contact widget*/
#sidebar .contact li{
	border-bottom: 1px dotted #514c4c;
}



/*Twitter*/
#sidebar .tweet_list li{
	background-color: #333333;
	border: 1px solid #333;
}

/*flickr widget*/
.flickr a{
	border: 1px solid #1f1f1f !important;
	background-color: #333333;
}
.flickr a:hover{
	background-color: #3b3b3b;
}


/*calendar widget*/
#calendar_wrap table{
	width: 100%;
}
#calendar_wrap table caption{
	font-weight: bold;
	color: #b3b3b1;
	margin-bottom: 10px;
	margin-top: 10px;
}
#calendar_wrap table th{
	text-align: left;
}
#calendar_wrap table th,
#calendar_wrap table td{
	color: #a5a5a4;
}


.widget-subscribe .widget-title{
	color: #ffffff;
	padding: 12px 10px 12px 14px;
	font-size: 13px;
	font-weight: bold;
	background-color: #323232;
}

.widget-subscribe .widget-body{
	padding-top: 20px;
	border: 1px solid #282827;
	padding-left: 15px;
	overflow: hidden;
	background-color: rgb(50, 50, 50);
}

.widget-subscribe .widget-body .title{
	font-weight: bold;
}
/*=================================================================*/
/* Footer
/*=================================================================*/
#footer{
	background: url(black/footer.jpg) repeat;
}
#footer #footer-stripe{
	background-color: rgba(48, 49, 49, 0.56);
}

#footer .line{
	border-top: 1px solid #212122;
	border-bottom: 1px solid #353536;
	margin-bottom: 20px;
}
#footer ul.contact li{
	border-bottom: 1px solid #212122;
	border-top: 1px solid #353536;
}


/*=================================================================*/
/* General Classes
/*=================================================================*/
.double-line{
	border-bottom: 1px solid #3f3d3d;
	border-top: 1px solid #3f3d3d;
}

.line{
	width: 100%;
	clear: both;
	border-bottom: 1px solid #3f3d3d;
}

/*=================================================================*/
/* Inputs
/*=================================================================*/
textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="datetime"]:focus,
input[type="datetime-local"]:focus,
input[type="date"]:focus,
input[type="month"]:focus,
input[type="time"]:focus,
input[type="week"]:focus,
input[type="number"]:focus,
input[type="email"]:focus,
input[type="url"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="color"]:focus,
.uneditable-input:focus{
	border: 1px solid #3f3d3d;
	-webkit-box-shadow: inset 0 1px 1px rgba(18, 18, 18, 0.08), 0 0 8px rgba(0, 0, 0, 0.01);
	   -moz-box-shadow: inset 0 1px 1px rgba(18, 18, 18, 0.08), 0 0 8px rgba(0, 0, 0, 0.01);
	        box-shadow: inset 0 1px 1px rgba(18, 18, 18, 0.08), 0 0 8px rgba(0, 0, 0, 0.01);    
}




textarea,
input[type="text"],
input[type="password"],
input[type="datetime"],
input[type="datetime-local"],
input[type="date"],
input[type="month"],
input[type="time"],
input[type="week"],
input[type="number"],
input[type="email"],
input[type="url"],
input[type="search"],
input[type="tel"],
input[type="color"],
.uneditable-input,
#sidebar #search input[type="text"]{
	font-size: 12px;
	color: #85857f;
	border: 1px solid #2d2d2d;
	background-color: #303030;
}



/*=================================================================*/
/* Quotes
/*=================================================================*/
.quote-simple{
	border-left: 7px solid #333333;
}

.quote-simple p{
	font: 'Yekan',italic 18px/29px Georgia, "Times New Roman", Times, serif;
	text-shadow: 0 1px 1px #0a0909;
	color: #b5b5b5;
}
.quote-simple p.author{
	color: #b5b5b5;
}


/*=================================================================*/
/* Accordions
/*=================================================================*/
.accordion-group,
.accordion-inner,
.accordion-heading{
	border: 1px solid #353533;
}

.accordion-toggle{
	border: none;
}

/*=================================================================*/
/* Tabs
/*=================================================================*/
.nav-tabs li a,
.nav-tabs li a:hover,
.nav-tabs li.active a:hover{
	background: #333333;	
	border: 1px solid #353533 !important;
	color: #bdbdbb;
}
.nav-tabs li.active a{
	background: #333333;	
	border: 1px solid #353533 !important;
	color: #ffffff;
}

.nav-tabs li a:hover{
	color: #ffffff;
}

.tab-content{
	background: #333333;	
	border: 1px solid #353533;
}


/*=================================================================*/
/* Post Aside format
/*=================================================================*/
.aside-format{
	border: 1px solid #383636;
	padding: 10px 10px 10px 20px;
	-moz-box-shadow: 0 1px 1px rgba(5, 5, 5, 0.08);
	-webkit-box-shadow: 0 1px 1px rgba(5, 5, 5, 0.08);
	box-shadow: 0 1px 1px rgba(5, 5, 5, 0.08);
	border-left: 10px solid #6c6a6a;
	background-color: #373737;
}

/*=================================================================*/
/* Team member
/*=================================================================*/
.member{
	background-color: #333333;
	border: 1px solid #353533;
}
.member .photo{
	border-right: 1px solid #4a4747;
	background-color: #403f3f;
}

.member .social a{
	display: block;
	background: transparent url(black/social6.png) no-repeat;
	width: 28px;
	height: 19px;
	text-indent: -9999px;
	margin-bottom: 14px;
}


/*=================================================================*/
/* Price Table
/*=================================================================*/
.price-column{
	border: 1px solid #3c3b3b;
	border-top: none;
}
.price-column h2.price-title{
	background-color: #313131;
	color: #fff;
	text-shadow: 0 0 1px #000000;
	border-bottom: 2px solid #3d3d3c;
	-moz-box-shadow: 0 0 3px rgba(5, 5, 5, 0.34);
	-webkit-box-shadow: 0 0 3px rgba(5, 5, 5, 0.34);
	box-shadow: 0 0 3px rgba(5, 5, 5, 0.34);
}
.price-column ul li{
	border-bottom: 1px solid #363635;
}

/*=================================================================*/
/* Pagination
/*=================================================================*/
#postsNav span,
#postsNav a{
	color: #7f7f7f;
}
#postsNav a{
	border-style: none;
	border-right: 1px solid #3a3a38;
}
#postsNav a.current-page span{
	color: #ffffff;
}


/*=================================================================*/
/* Contact Page
/*=================================================================*/
#contact #message{
	background-color: #3b3b3b;
	color: #fff;
}
#contact #message ul{
	margin-top: 9px;
	padding-bottom: 0;
	margin-bottom: 13px;
}
#contact #message li{
	color: #dfdede;
	text-shadow: none;
}
#contact #form-loader{
	background: url(black/ajax-loader.gif) no-repeat;
}



/*=================================================================*/
/* WooCommerce
/*=================================================================*/
.price_slider_amount .price_label{
	color: #d6d6d4;
}


#sidebar ul.product_list_widget li{
	border-bottom: 1px solid #333332;
}

.summary .product_meta,
.summary .product_meta a{
	color: #d6d6d4;
}


/*Single product tabs*/
div.product .woocommerce_tabs ul.tabs:before,#content div.product .woocommerce_tabs ul.tabs:before{
	border-bottom: 1px solid #353533;
}

/*Cart*/
table.shop_table.cart{
	border-color: #3f3f3f !important;
}
table.shop_table th,
table.shop_table td{
	color: #fff;
}
table.shop_table td{border-top: 1px solid rgba(255, 255, 255, 0.1);padding:6px 12px;vertical-align:middle}

.cart_totals th{
	color: #fff;
	border-color: #353533 !important;
}
.cart_totals td{
	color: #d7d7d6;
	border-color: #353533 !important;	
}


/*Checkout*/
#payment{
		background-color: #3b3b3b;
}

#payment li label{
	color: #fff;
	font-weight: bold;
}

#payment div.payment_box{
	position:relative;
	width:96%;
	padding:1em 2%;
	margin:1em 0 1em 0;font-size: 0.92em;-webkit-border-radius:2px;-moz-border-radius:2px;border-radius:2px;line-height: 1.5em;
	background: #4d4d4d;
	color: #ffffff;
}
#payment div.payment_box p{
	color: #fff;
	text-shadow: 0 1px 1px #000000;
}

#payment div.payment_box:after{content:"";
	display:block;
	border:8px solid #4d4d4d;
	border-right-color:transparent;
	border-left-color:transparent;border-top-color:transparent;position:absolute;top:-3px;left:0;margin:-1em 0 0 2em
}
#payment ul.payment_methods{text-align:left;padding:1em;border-bottom:1px solid #4d4d4d;margin:0;list-style:none outside}
#payment div.form-row{
	padding:1em;
	border-top:0px solid #4d4d4d
}


/*Order received*/
.customer_details{
	color: #bebebe;
}



/* #New code
================================================== */
.sidebar-block h4{
	font-size: 14px;
	font-weight: bold;
	color: #d8d8d5;
}
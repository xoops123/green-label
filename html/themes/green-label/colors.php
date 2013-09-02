<?php
header('Content-Type: text/css'); 

//config
define('_TC_BG_COLOR','#f8fbf8'); 													//基本背景色
define('_TC_BGC_COLOR','#fbfaf5'); 													//ラッパー下のコンテナー背景色
define('_TC_LR_BG_COLOR','#f7f3e8'); 												//LRカラム　背景色
define('_TC_BASE_COLOR','#333333'); 												//基本文字色
define('_TC_TEXT2_COLOR','#fff'); 													//文字色２、nav2 > li a
define('_TC_H_H1_COLOR','#9fc24d'); 												//ヘッダーh1文字色、h2等背景色、wrapperボトムボーダー色、navbar
define('_TC_H_H1S_COLOR','#cbb994'); 												//ヘッダーh1 small 文字色
define('_TC_H1_IMAGE','url(images/sprout.png)'); 						//h1左のアイコン
define('_TC_H_BG_COLOR','#c0de7c'); 												//h2等 ストライプ背景色
define('_TC_BC_COLOR','#abc5ad'); 													//パンくずリスト　a　背景色
define('_TC_FOOTER_COLOR','#f4dda5'); 											//フッター　背景色

?>
/*============================================================================*/

/******************************************************************************/
/* basic colors */
/******************************************************************************/

#wrapper {
	border-bottom:<?php echo _TC_H_H1_COLOR ?> 1px solid;
	background: <?php echo _TC_BG_COLOR ?>;
}
#wrapper > .container {
	background: <?php echo _TC_BGC_COLOR ?>;
}

#sitename h1 {
	color:<?php echo _TC_H_H1_COLOR ?>;
	background:<?php echo _TC_H1_IMAGE ?> no-repeat ;
	padding-left:35px;
	margin-left:5px ;
}

#sitename h1 a{
	color:<?php echo _TC_H_H1_COLOR ?>;
}
#sitename h1 small {
	color:<?php echo _TC_H_H1S_COLOR ?>;
}
#xpress-comments-block h2.head ,
h2,h3,h4 {
	color:<?php echo _TC_TEXT2_COLOR ?>;
	background: <?php echo _TC_H_H1_COLOR ?>;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);

/*　ストライプ　chrome か safari で表示可能
　ここで背景のベースカラーを指定　*/
background-color: <?php echo _TC_H_H1_COLOR ?>;

/*　ここでCSS3のグラデーションをつかってストライプのパターン・色を指定 */
background-image: -webkit-gradient(linear, 0 0, 100% 100%,color-stop(.25, <?php echo _TC_H_BG_COLOR ?>), color-stop(.25, transparent),color-stop(.5, transparent), color-stop(.5, <?php echo _TC_H_BG_COLOR ?>),color-stop(.75, <?php echo _TC_H_BG_COLOR ?>), color-stop(.75, transparent),to(transparent));

/*　ここでパターンの大きさを指定
（※数字によってはストライプのグラデーションがずれるので注意）*/
-webkit-background-size: 7px 7px;

}
#info ,
#info a {
	color:<?php echo _TC_H_H1S_COLOR ?>;
}

#left_bar , #right_bar {
	background: <?php echo _TC_LR_BG_COLOR ?>;
}

.container ul.breadcrumb a {
	color:<?php echo _TC_BC_COLOR ?>;
}
#footer ,
footer {
	background:<?php echo _TC_FOOTER_COLOR ?>;
}

/* for xugj_date */
.new1 {
	color:red;
}
.new2 {
	color:orange;
}

.navbar {
	background: <?php echo _TC_H_H1_COLOR ?>;
}

.nav2 > li a{
  color: <?php echo _TC_TEXT2_COLOR ?>;
}

.nav2 > li > a:hover {
  background-color: #eeeeee;
}
.nav2 .dropdown-toggle .caret {
  border-top-color: #0088cc;
  border-bottom-color: #0088cc;
}

.nav2 .dropdown-toggle:hover .caret {
  border-top-color: #005580;
  border-bottom-color: #005580;
}
.nav2 .active .dropdown-toggle .caret {
  border-top-color: <?php echo _TC_TEXT2_COLOR ?>;
  border-bottom-color: <?php echo _TC_TEXT2_COLOR ?>;
}

.nav2 > li.dropdown.open.active > a:hover {
  color: <?php echo _TC_TEXT2_COLOR ?>;
  background-color: #999999;
  border-color: #999999;
}

.nav2 li.dropdown.open .caret,
.nav2 li.dropdown.open.active .caret,
.nav2 li.dropdown.open a:hover .caret {
  border-top-color: <?php echo _TC_TEXT2_COLOR ?>;
  border-bottom-color: <?php echo _TC_TEXT2_COLOR ?>;
  opacity: 1;
  filter: alpha(opacity=100);
}


.nav2 > .disabled > a {
  color: #999999;
}

.nav2 > .disabled > a:hover {
  background-color: transparent;
}
.navbar-inner {
  background-color: transparent;
}
.navbar .brand {
  color: #777777;
}
.navbar-link {
  color: #777777;
}

.navbar-link:hover {
  color: #333333;
}
.navbar .nav2 > li > a:focus,
.navbar .nav2 > li > a:hover {
  color: #333333;
  background-color: rgba(0, 0, 0, 0.05);
}

.navbar .nav2 > .active > a,
.navbar .nav2 > .active > a:hover,
.navbar .nav2 > .active > a:focus {
  background-color: #dbebc4;
  -webkit-box-shadow: inset 0 3px 8px rgba(0, 0, 0, 0.125);
     -moz-box-shadow: inset 0 3px 8px rgba(0, 0, 0, 0.125);
          box-shadow: inset 0 3px 8px rgba(0, 0, 0, 0.125);
}

.navbar .nav2 > .active > a,
.dropdown-menu li a {
	color:green;
}

.navbar .nav2 > li > .dropdown-menu:before {
  border-right: 7px solid transparent;
  border-bottom: 7px solid #ccc;
  border-left: 7px solid transparent;
  border-bottom-color: rgba(0, 0, 0, 0.2);
}
.navbar .nav2 > li > .dropdown-menu:after {
  border-right: 6px solid transparent;
  border-bottom: 6px solid <?php echo _TC_TEXT2_COLOR ?>;
  border-left: 6px solid transparent;
}

.navbar .nav2 li.dropdown > .dropdown-toggle .caret {
  border-top-color: #777777;
  border-bottom-color: #777777;
}

.navbar .nav2 li.dropdown.open > .dropdown-toggle .caret,
.navbar .nav2 li.dropdown.active > .dropdown-toggle .caret,
.navbar .nav2 li.dropdown.open.active > .dropdown-toggle .caret {
  border-top-color: #555555;
  border-bottom-color: #555555;
}

.btn {
	color:#cbb994;
}

/* main menu */
#mainmenu .menuTop ,
#mainmenu .menuMain {
	background: #ebebeb;
}
#mainmenu .menuSub {
	background: #f3faff;
}

#mainmenu li a:hover {
	background: #dbebdb;
}


/* d3forum */
h2.head {
	color:#9fc24d;
	background: transparent;
}
.d3f_table .head {
	color:<?php echo _TC_TEXT2_COLOR ?>;
	background: #9fc24d;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}
.d3f_table .odd {
	background: #ebeee8;	
}
.d3f_wrap .itemHead {
	background:#dfe8d8;
}
.d3f_wrap .d3f_info even ,
.d3f_wrap .d3f_info even a {
	background:#e9e9e9;
	color:#cbb994;
}

/* d3f topics */
.d3f_say {
	position: relative;
	float:right;
  width: 265px;
	background: <?php echo _TC_TEXT2_COLOR ?>;
	border: 1px solid #d1b988;
 	border-radius:8px;
	padding:5px 5px 10px 10px;
	box-sizing: border-box;
	box-shadow: 0 10px 6px -6px #b1b1b1;
}
.d3f_say:after , .d3f_say:before {
	position: absolute;
	border: solid transparent;
	content: ' ';
	left:-30px;
	height: 0;
	width: 0;
	pointer-events: none;
}
.d3f_say:after {
	top:15px;
	border-width:15px;
	border-right-color:<?php echo _TC_TEXT2_COLOR ?>;
}
.d3f_say:before {
	border-right-color: #d1b988;
	border-width: 16px;
	top: 15px;
	left:-32px;
	margin-top: -1px;
}

.d3f_say p{
	color:#aeaeae;
}
p.d3f_forum_title a{
	color:#aeaeae;
}
p.d3f_topic_title a {
	color:#e9967a;
}


/* d3pipes */

ul.d3pipes_block_async_aggregated li,
ul.d3pipes_block_sync_aggregated li {
	border-left:7px solid #dcdcdc;
}
ul.d3pipes_block_async_aggregated li dl dd ,
ul.d3pipes_block_sync_aggregated li dl dd {
	color:#8F8F8F;
}

/* pico */
#pico_body h2,
#pico_body h3 {
	color:#a8a789;
}


/* ------------ for wordpress (xpress) -------------------- */

#xpress_wrap #xpress_content .xpress-post .eyecatch-image img {
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.3);
	-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.3);
	box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.3);
	z-index:0;
}

#xpress_wrap #xpress_content .xpress-post .large_thumbnail img {
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	border-radius: 10px;
	-webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.3);
	-moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.3);
	box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.3);
}

#xpress_wrap #xpress_content .xpress-navi-bar {
	background: #dbe2c6;
}


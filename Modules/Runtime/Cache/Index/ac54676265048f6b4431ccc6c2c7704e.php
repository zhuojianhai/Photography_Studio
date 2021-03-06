<?php if (!defined('THINK_PATH')) exit();?><html>

	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>珍爱婚纱影楼</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, minimal-ui">
		<link rel="shortcut icon" href="http://www.light7.cn/favicon.ico">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta content="yes" name="apple-touch-fullscreen">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<link rel="stylesheet" href="/hsylglxt/View/Index/Public/css/light7.css">
		<link rel="stylesheet" href="/hsylglxt/View/Index/Public/css/light7-swiper.css">
		<link rel="stylesheet" href="/hsylglxt/View/Index/Public/css/light7-swipeout.css">
		<link rel="apple-touch-icon" href="/hsylglxt/View/Index/Public/img/apple-touch-icon-114x114.png">
		<link rel="stylesheet" href="/hsylglxt/View/Index/Public/css/font_1433748561_0232708.css">
		<link rel="stylesheet" href="/hsylglxt/View/Index/Public/css/app.css">
		<style>
			.price {
				color: orangered;
				font-size: 1.0rem;
			}
			
			.content-block.goods-card h3 {
				font-size: 1.0rem;
			}
			
			.list-block {
				margin: 0.5rem;
			}
			
			.item-link.list-button.bg-success {
				font-size: 1.0rem;
				color: black;
			}
			/*header背景色调*/
			
			.bar {
				background-color: rgba(255, 105, 180, 0.8);
			}
			/*底部footer-bar样式*/
			
			.bar.bar-footer {
				padding: 0;
				margin: 0;
			}
			
			.bar.bar-footer button {
				width: 100%;
				height: 100%;
				float: right;
				background-color: #FF69B4;
				margin: 0;
				top: 0;
				color: #000000;
				font-weight: bolder;
			}
			
			.content-block.goods-card h3 {
				display: inline;
			}
			
			.content-block.goods-card p {
				display: inline;
				margin: 0;
			}
			
			.content-block.goods-card button {
				background-color: #FF69B4;
			}
			
			.tab-link.button.active {
				color: #8B008B;
				border-color: #8B008B;
			}
		</style>
	</head>

	<body>

		<div id="detail-page" class="page no-tabbar">
			<header class="bar bar-nav">
				<a class="button button-link button-nav pull-left back">
					<span class="icon icon-left"></span> Back
				</a>
				<h1 class="title">摄影套餐详情</h1>
			</header>
			<div class="content" id='detail-page'>
				<div class="page-detail">
					<div class="swiper-container swiper-container-horizontal" data-space-between="10">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img class='card-cover' src="/hsylglxt/View/Index/Public/img/ad-img(1).jpg" alt="">
							</div>
							<!--<div class="swiper-slide">
								<img class='card-cover' src="/hsylglxt/View/Index/Public/img/ad-img(2).jpg" alt="">
							</div>
							<div class="swiper-slide">
								<img class='card-cover' src="/hsylglxt/View/Index/Public/img/ad-img(3).jpg" alt="">
							</div>-->
						</div>
						<div class="swiper-pagination">
							<span class="swiper-pagination-bullet swiper-pagination-bullet-active">							
						</span>
							<span class="swiper-pagination-bullet">							
						</span>
							<span class="swiper-pagination-bullet">						
						</span>
						</div>
					</div>
					<div class='content-block goods-card'>
						<h3 id="setName"></h3>
						<a><button id="makeNewOrder" class="button button-fill pull-right">预约</button></a>
						<a><button id="favoriteBTN" class="button button-fill pull-right">添加收藏</button></a>
						<p class="pull-right price">￥<strong id="setPrice">88.00</strong></p>

					</div>
					<div class='content-block' style="padding: 0px;">
						<div class="buttons-tab">
							<a href="#tab1" class="tab-link active button">摄影套餐</a>
							<a href="#tab2" class="tab-link button">婚纱套系</a>
						</div>
						<div class="tabs">
							<div id="tab1" class="tab active">
								<div class="card facebook-card">
									<div class="card-content"><img id="detailImg" src="" width="100%"></div>
								</div>

							</div>
							<div id="tab2" class="tab">
								<div class="content-block" style="padding: 0;">

									<div class="list-block" style="margin: 0;">
										<ul>
											<!-- Text inputs -->
											<li>
												<div class="item-content">
													<div class="item-inner">
														<div class="item-title label">新郎服装</div>
														<div class="item-input">
															<input id="manVeil" type="text" disabled="true" >
														</div>
													</div>
												</div>
											</li>
											<li>
												<div class="item-content">
													<div class="item-inner">
														<div class="item-title label">新娘服装</div>
														<div class="item-input">
															<input id="feVeil" type="text" disabled="true"  class="">
														</div>
													</div>
												</div>
											</li>
											<li class="align-top">
												<div class="item-content">
													<div class="item-inner">
														<div class="item-title label">服装说明</div>
														<div class="item-input">
															<textarea id="veilDescription" disabled="true">
													服装说明服装说明服装说明服装说明服装说明服装说明服装说明服装说明
												</textarea>
														</div>
													</div>
												</div>
											</li>
											<li class="align-top">
												<div class="item-content">
													<div class="item-inner">
														<div class="item-title label">造型说明</div>
														<div class="item-input">
															<textarea  id="poseDescription"  disabled="true">
													造型说明造型说明造型说明造型说明造型说明造型说明造型说明造型说明造型说明
												</textarea>
														</div>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>

		<script type='text/javascript' src='/hsylglxt/View/Index/Public/js/zepto.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hsylglxt/View/Index/Public/js/light7.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hsylglxt/View/Index/Public/js/light7-swiper.js' charset='utf-8'></script>
		<script type='text/javascript' src='/hsylglxt/View/Index/Public/js/light7-swipeout.js' charset='utf-8'></script>

		<script src="/hsylglxt/View/Index/Public/js/app.js"></script>
		<script src="/hsylglxt/View/Index/Public/js/shop/detail.js"></script>
		<script>
			/*截取URL中的参数值,为公共函数*/
			$.getQueryString = function(name) {
				var reg = new RegExp("(^|&|\|)" + name + "=([^&]*)(&|$)");
				var r = window.location.search.substr(1).match(reg);
				if(r != null) {
					return decodeURIComponent(r[2]);
				} else {
					return "";
				}
			};
			/*加载商品详情,渲染页面*/
			$.loadSetDetail = function(setID) {
				$.ajax({
					type: "post",
					url: "<?php echo U('set/loadSetDetail');?>",
					async: true,
					data: {
						setID: setID
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							/*console.log(data.data[0].name)*/
							$(".swiper-slide img")[0].src = data.data[0].coverimg;
							$("#setName").text(data.data[0].title);
							$("#setPrice").text(data.data[0].price);
							/*渲染介绍详情内容*/
							$(".text-container").text(data.data[0]["description"])
								/*渲染图片内容*/
							/*var tempStr = [];
							tempStr.push('<img src=' + data.data[0].detailimg1 + ' width="100%">')
							tempStr.push('<img src=' + data.data[0].detailimg2 + ' width="100%">')
							tempStr.push('<img src=' + data.data[0].detailimg3 + ' width="100%">')*/
							$("#detailImg")[0].src=data.data[0]["detailimg"];
							$("#manVeil").val(data.data[0]["manveil"]);
							$("#feVeil").val(data.data[0]["feveil"]);
							$("#veilDescription").val(data.data[0]["veildescription"]);
							$("#poseDescription").val(data.data[0]["posedescription"]);
						} else {
							$.toast("通讯异常");
						}
					}
				});
			}
			$.loadSetDetail($.getQueryString("setID"));

			/*添加收藏的方法*/
			$("#favoriteBTN").on("click", function() {

				$.ajax({
					type: "post",
					url: "<?php echo U('order/addToCollection');?>",
					async: true,
					data: {
						setID: $.getQueryString("setID"),
						userID: sessionStorage.getItem("userID")
					},
					success: function(d) {
						var data = JSON.parse(d);
						/*通过交易码来检查与后端的换流是否正常,0000表示正常*/
						if(data.code == "0000") {
							if(data.data == "repeat") {
								$.toast("您已收藏过这个套餐了！");
							} else {
								$.toast("收藏该套餐成功！");
							}
						} else {
							$.toast("通讯异常");
						}
					}
				});

			});

			//生成新订单的方法
			$("#makeNewOrder").on("click", function() {
				console.log(123)
				var setsIDArr = [];
				setsIDArr.push($.getQueryString("setID"));
				//请求接口生成订单
				$.ajax({
					type: "post",
					url: "<?php echo U('order/makeNewOrder');?>",
					async: true,
					data: {
						setsIDArr: setsIDArr,
						total: parseFloat($("#setPrice").text()),
						userID: sessionStorage.getItem("userID")
					},
					success: function(d) {
						var data = JSON.parse(d);
						if(data.code == "0000") {
							$.confirm("预约成功，马上付款吗？", function() {					
									window.location.href="http://localhost/hsylglxt/index.php/index/confirmed.html?orderID="+data.data["orderID"];
								}, function() {
									
								})
						} else {
							$.toast("通讯异常");
						}
					}
				});
			})
		</script>
	</body>

</html>
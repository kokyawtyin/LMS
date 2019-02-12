<?php include ("include/header.php"); ?>
<script src="js/jssor.slider.min.js" type="text/javascript"></script>
		<script type="text/javascript">
        jssor_1_slider_init = function() {
            var jssor_1_SlideshowTransitions = [
              {$Duration:1200,x:0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$During:{$Left:[0.3,0.7]},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$SlideOut:true,$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$During:{$Top:[0.3,0.7]},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$SlideOut:true,$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:0.3,$Cols:2,$During:{$Top:[0.3,0.7]},$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,y:-0.3,$Cols:2,$SlideOut:true,$ChessMode:{$Column:12},$Easing:{$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,$Rows:2,$During:{$Left:[0.3,0.7]},$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:-0.3,$Rows:2,$SlideOut:true,$ChessMode:{$Row:3},$Easing:{$Left:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,x:0.3,y:0.3,$Cols:2,$Rows:2,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$SlideOut:true,$ChessMode:{$Column:3,$Row:12},$Easing:{$Left:$Jease$.$InCubic,$Top:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:3,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$Assembly:260,$Easing:{$Clip:$Jease$.$InCubic,$Opacity:$Jease$.$Linear},$Opacity:2},
              {$Duration:1200,$Delay:20,$Clip:12,$SlideOut:true,$Assembly:260,$Easing:{$Clip:$Jease$.$OutCubic,$Opacity:$Jease$.$Linear},$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $ThumbnailNavigatorOptions: {
                $Class: $JssorThumbnailNavigator$,
                $SpacingX: 5,
                $SpacingY: 5
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <body>
		<?php include ("include/nav.php"); ?>
		<div class="container-fluid">
			<div class="row">			
				<?php 
					include ("include/left-side.php"); 
					mysqli_query($conn, "SET NAMES UTF8");
					$evt = mysqli_query($conn, "SELECT * FROM event");
				?>			
				<div class="col-md-7">
					<h1>လႈပ္ရွားမႈမွတ္တမ္းမ်ား</h1>
					<p></p>
					<!-- Image Gallery -->
					<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:1307px;overflow:hidden;visibility:hidden;">
						<!-- Loading Screen -->
						<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
							<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="css/spin.svg" />
						</div>
						<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:1307px;overflow:hidden;">
							<?php while($row = mysqli_fetch_assoc($evt)): ?>
							<div>
								<img data-u="image" src="images/Gallery/Big/<?php echo $row['eventdir'] ?>" />
								<img data-u="thumb" src="images/Gallery/Thumb/<?php echo $row['eventsdir'] ?>" />
							</div>
							<?php endwhile; ?>
							
							<div style="background-color:#ff7c28;">
								<div style="position:absolute;top:50px;left:50px;width:auto;height:62px;z-index:0;font-size:50px;color:#000000;line-height:80px;text-align:left;padding:5px;box-sizing:border-box;">ဤလွဳပ္ရွားမႈမွတ္တမ္းမ်ားသည္ သန္လ်င္ဖြံ႕ၿဖိဳး<br />တိုးတက္ေရးအသင္း၏ မွတ္တမ္းတင္႐ိုက္ကူးထားေသာ ဓါတ္ပံုမ်ားျဖစ္သည္။
								</div>
								<img data-u="thumb" src="images/980x380/039.jpg" />
							</div>
						</div>
						<!-- Thumbnail Navigator -->
						<div data-u="thumbnavigator" class="jssort101" style="position:absolute;left:0px;bottom:0px;width:980px;height:270px;background-color:#000;" data-autocenter="1" data-scale-bottom="0.75">
							<div data-u="slides">
								<div data-u="prototype" class="p" style="width:190px;height:253px;">
									<div data-u="thumbnailtemplate" class="t"></div>
									<svg viewBox="0 0 16000 16000" class="cv">
										<circle class="a" cx="8000" cy="8000" r="3238.1"></circle>
										<line class="a" x1="6190.5" y1="8000" x2="9809.5" y2="8000"></line>
										<line class="a" x1="8000" y1="9809.5" x2="8000" y2="6190.5"></line>
									</svg>
								</div>
							</div>
						</div>
						<!-- Arrow Navigator -->
						<div data-u="arrowleft" class="jssora106" style="width:55px;height:55px;top:650px;left:30px;" data-scale="0.75">
							<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
								<circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
								<polyline class="a" points="7930.4,5495.7 5426.1,8000 7930.4,10504.3 "></polyline>
								<line class="a" x1="10573.9" y1="8000" x2="5426.1" y2="8000"></line>
							</svg>
						</div>
						<div data-u="arrowright" class="jssora106" style="width:55px;height:55px;top:650px;right:30px;" data-scale="0.75">
							<svg viewBox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
								<circle class="c" cx="8000" cy="8000" r="6260.9"></circle>
								<polyline class="a" points="8069.6,5495.7 10573.9,8000 8069.6,10504.3 "></polyline>
								<line class="a" x1="5426.1" y1="8000" x2="10573.9" y2="8000"></line>
							</svg>
						</div>
					</div><!-- End Image Gallery -->
				</div><!-- End col-md-7 customr-->			
				<?php include ("include/right-side.php"); ?>				
			</div>

	<script type="text/javascript">jssor_1_slider_init();</script>
			<?php include ("include/footer.php"); ?>
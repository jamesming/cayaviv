
<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <title>Cayaviv</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <meta name="author" content="">



    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->

    <!--[if lt IE 9]>

      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>

    <![endif]-->



    <!-- Le styles -->

    <link href="<?php  echo base_url()   ?>bootstrap/css/bootstrap.css" rel="stylesheet">

    <style>

      body {
				background: url(http://griddle.it/960-12-30) repeat-y center top;  
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */

      }
      .float_left{
      float:left;	
      }
      .clearfix{
      clear:both;	
      }
			.yellow{
			background:yellow;	
			}
			.orange{
			background:orange;	
			}		
			.rounded{
					border-top-left-radius: 6px;
					border-top-right-radius: 6px;
					-moz-border-radius-topleft: 6px;
					-moz-border-radius-topright: 6px;
					-webkit-border-top-right-radius: 6px;
					-webkit-border-top-left-radius: 6px;
					border-bottom-left-radius: 6px;
					border-bottom-right-radius: 6px;
					-moz-border-radius-bottomleft: 6px;
					-moz-border-radius-bottomright: 6px;
					-webkit-border-bottom-right-radius: 6px;
					-webkit-border-bottom-left-radius: 6px;
				}
				.shadowed{
				  -webkit-box-shadow: 0 0 12px #dbc59e;
				  -moz-box-shadow: 0 0 6px #dbc59e;
				  box-shadow: 0 0 6px #dbc59e;	
				}	
						.square{
						background-image: url("http://localhost/cayaviv/images/HeartSeedsdiagramBWcopy.jpg");
						height: 140px;
						width: 140px;
						}				
						.square:hover{
						background-image: url("http://localhost/cayaviv/images/HeartSeedsdiagramcopy.jpg");
						height: 140px;
						width: 140px;
						}
						.square:active{
						background-image: url("http://localhost/cayaviv/images/HeartSeedsdiagramPalecopy.jpg");
						height: 140px;
						width: 140px;
						}

						.left-top{
						background-position: -5px -5px;
						background-repeat: no-repeat;    		
						}
						.middle-top{
						background-position: -146px -5px;
						background-repeat: no-repeat;    		
						}
						.right-top{
						background-position: -287px -5px;
						background-repeat: no-repeat;    		
						}
						.left-middle{
						background-position: -5px -146px;
						background-repeat: no-repeat;    		
						}
						.middle-middle{
						background-position: -146px -146px;
						background-repeat: no-repeat;    		
						}
						.right-middle{
						background-position: -287px -146px;
						background-repeat: no-repeat;    		
						}
						.left-bottom{
						background-position: -5px -287px;
						background-repeat: no-repeat;    		
						}
						.middle-bottom{
						background-position: -146px -287px;
						background-repeat: no-repeat;    		
						}
						.right-bottom{
						background-position: -287px -287px;
						background-repeat: no-repeat;    		
						}						
    </style>

    <link href="<?php  echo base_url()   ?>bootstrap/css/bootstrap-responsive.css" rel="stylesheet">



    <!-- Le fav and touch icons -->

    <link rel="shortcut icon" href="<?php  echo base_url()   ?>bootstrap/ico/favicon.ico">

    <link rel="apple-touch-icon" href="<?php  echo base_url()   ?>bootstrap/ico/apple-touch-icon.png">

    <link rel="apple-touch-icon" sizes="72x72" href="<?php  echo base_url()   ?>bootstrap/ico/apple-touch-icon-72x72.png">

    <link rel="apple-touch-icon" sizes="114x114" href="<?php  echo base_url()   ?>bootstrap/ico/apple-touch-icon-114x114.png">

  </head>



  <body>

    	
          <div id="navbar-example" class="navbar  navbar-fixed-top">

            <div class="navbar-inner">

              <div class="container" >

                <a class="brand" href="#">Cayaviv</a>

                <ul class="nav  pull-right ">

                  
			            <li class="dropdown">
			
			              <a class="dropdown-toggle" data-toggle="dropdown" href="#">My Account<b class="caret"></b></a>
			
			              <ul id="menu1" class="dropdown-menu">
			
			                <li><a href="#">Action</a></li>
			
			                <li><a href="#">Another action</a></li>
			
			                <li class="divider"></li>
											<li><a href="#">Log Out</a></li>
			
			              </ul>
			
			            </li>                  
                  
                </ul>

                

              </div>

            </div>

          </div>


					<div class="container">
					
									<div  class='squares '   style='margin-left:100px;margin-top:100px'  >
											<div  class='inside '  >
											  		<div record=1 class=' left-top float_left' >
											  			&nbsp;
											  		</div>	
											  		<div record=2 class='  middle-top float_left' >
											  			&nbsp;
											  		</div>
											  		<div record=3  class='  right-top float_left' >
											  			&nbsp;
											  		</div>		  		
											</div>
											<div  class='inside  clearfix'  >
											  		<div record=4  class='  left-middle float_left' >
											  			&nbsp;
											  		</div>	
											  		<div record=5  class='  middle-middle float_left' >
											  			&nbsp;
											  		</div>
											  		<div record=6  class='  right-middle float_left' >
											  			&nbsp;
											  		</div>		  		
											</div>
											<div  class='inside  clearfix'  >
											  		<div record=7  class='  left-bottom float_left' >
											  			&nbsp;
											  		</div>	
											  		<div record=8  class='  middle-bottom float_left' >
											  			&nbsp;
											  		</div>
											  		<div record=9  class='  right-bottom float_left' >
											  			&nbsp;
											  		</div>		  		
											</div>			
									</div>
					
									
					
					
					</div>
	
	
					<div id="fancyZoom_div"  style='display:none;'  >
						
						<iframe   id="iframe_content_text" scrolling="no"  frameborder="0" src=""  >
						    <p>Your browser does not support iframes.</p>
						</iframe>
					</div>			
	
	
  </body>

</html>

    <!-- Le javascript

    ================================================== -->

    <!-- Placed at the end of the document so the pages load faster -->


    <script src="<?php  echo base_url()   ?>bootstrap/js/jquery.js"></script>

    <script src="<?php  echo base_url()   ?>bootstrap/js/bootstrap-transition.js"></script>

    <script src="<?php  echo base_url()   ?>bootstrap/js/bootstrap-alert.js"></script>

    <script src="<?php  echo base_url()   ?>bootstrap/js/bootstrap-modal.js"></script>

    <script src="<?php  echo base_url()   ?>bootstrap/js/bootstrap-dropdown.js"></script>

    <script src="<?php  echo base_url()   ?>bootstrap/js/bootstrap-scrollspy.js"></script>

    <script src="<?php  echo base_url()   ?>bootstrap/js/bootstrap-tab.js"></script>

    <script src="<?php  echo base_url()   ?>bootstrap/js/bootstrap-tooltip.js"></script>

    <script src="<?php  echo base_url()   ?>bootstrap/js/bootstrap-popover.js"></script>

    <script src="<?php  echo base_url()   ?>bootstrap/js/bootstrap-button.js"></script>

    <script src="<?php  echo base_url()   ?>bootstrap/js/bootstrap-collapse.js"></script>

    <script src="<?php  echo base_url()   ?>bootstrap/js/bootstrap-carousel.js"></script>

    <script src="<?php  echo base_url()   ?>bootstrap/js/bootstrap-typeahead.js"></script>
    
		<?php $this->load->view('footer/fancy_zoom.php');    ?>

	<script type="text/javascript" language="Javascript">
		
		
		$.fn.setFancyZoomWindowSize = function(width, height) {
					$(this).css({width:width+'px',height:height+'px'})
					.children('iframe').css({
							width:width+'px',
							height:height+'px',
							<?php     
								echo ( $this->tools->browserIsExplorer()  ? "'margin-top':'40px'" :"" );
							?>
					})
		};
		
		
		$('#fancyZoom_div').setFancyZoomWindowSize(420, 510)
		
		
		
		$(document).ready(function() { 


			$('.squares .inside div').css({
					cursor:'pointer'
			}).addClass('square').addClass('fancyZoom').attr('href','#fancyZoom_div')
			
			$('.fancyZoom').css({cursor:'pointer'}).fancyZoom().click(function(event) {
						  	$('#iframe_content_text').attr('src','<?php  echo base_url()   ?>index.php/main/add_asset/'+$(this).attr('record'))
			});
			
		});
	</script>


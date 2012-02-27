
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

		<?php $this->load->view('header/generic_css.php');    ?>

    <link href="<?php  echo base_url()   ?>bootstrap/css/bootstrap-responsive.css" rel="stylesheet">



    <!-- Le fav and touch icons -->

    <link rel="shortcut icon" href="<?php  echo base_url()   ?>bootstrap/ico/favicon.ico">

    <link rel="apple-touch-icon" href="<?php  echo base_url()   ?>bootstrap/ico/apple-touch-icon.png">

    <link rel="apple-touch-icon" sizes="72x72" href="<?php  echo base_url()   ?>bootstrap/ico/apple-touch-icon-72x72.png">

    <link rel="apple-touch-icon" sizes="114x114" href="<?php  echo base_url()   ?>bootstrap/ico/apple-touch-icon-114x114.png">

  </head>

<style>
body{
padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */	
}
</style>
  <body>



    	
          <div id="navbar-example" class="navbar  navbar-fixed-top">

            <div class="navbar-inner">

              <div class="container" >

                <a class="brand" href="#">Cayaviv</a>

                <ul class="nav  pull-right ">

                  <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>

                    <ul class="dropdown-menu">

                      <li><a href="#">Action</a></li>

                      <li><a href="#">Another action</a></li>

                      <li><a href="#">Something else here</a></li>

                      <li class="divider"></li>

                      <li><a href="#">Separated link</a></li>

                    </ul>

                  </li>

                  <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown 2 <b class="caret"></b></a>

                    <ul class="dropdown-menu">

                      <li><a href="#">Action</a></li>

                      <li><a href="#">Another action</a></li>

                      <li><a href="#">Something else here</a></li>

                      <li class="divider"></li>

                      <li><a href="#">Separated link</a></li>

                    </ul>

                  </li>
                  
			            <li class="dropdown">
			
			              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dropdown 3<b class="caret"></b></a>
			
			              <ul id="menu1" class="dropdown-menu">
			
			                <li><a href="#">Action</a></li>
			
			                <li><a href="#">Another action</a></li>
			
			                <li><a href="#">Something else here</a></li>
			
			                <li class="divider"></li>
			
			                <li><a href="#">Separated link</a></li>
			
			              </ul>
			
			            </li>                  
                  
                </ul>

                

              </div>

            </div>

          </div>

					<style>
						body{
						//background: url(http://griddle.it/960-12-30) repeat-y center top;  	
							}
					#left-spacer{
					height:105px;
					border:0px solid gray;
					}
					#work-label{
					margin-bottom:10px;
					}
						
					#left-side-div li, #left-side-div a.accordion-toggle{
				    color: gray;
				    font-size: 19px;
				    margin-bottom: 11px;
				    text-decoration:none;
				    padding:0px 0px 0px 0px;
				    outline: 0;
					}
					#left-side-div div.accordion-inner ol li{
						font-size: 14px;
					}					
					.accordion-group, .accordion-inner{
					border:0px;	
					}
					#middle-vertical-line{
						height: 429px;
						border-left:3px solid gray;
					}
						
						.square{
						background-image: url("<?php   echo base_url()  ?>images/HeartSeedsdiagramcopy.jpg");
						height: 140px;
						width: 140px;
						}				
						.square:hover{
						background-image: url("<?php   echo base_url()  ?>images/HeartSeedsdiagramPalecopy.jpg");
						height: 140px;
						width: 140px;
						}
						.square:active{
						background-image: url("<?php   echo base_url()  ?>images/HeartSeedsdiagramBWcopy.jpg");
						height: 140px;
						width: 140px;
						}
						.square:active{
						background-image: url("<?php   echo base_url()  ?>images/HeartSeedsdiagramBWcopy.jpg");
						height: 140px;
						width: 140px;
						}

    </style>
						
						
						
					</style>

					<div  id='close_fancy_zoom'>
					</div>
			    <div  id='left-side-div' class="container">
			    	<h1  id='work-label'><?php  echo $data['groups'][0]['name']   ?><a  id='test' class='btn'   href='#jcrop_fancyZoom_div'   style='display:none'     >launch</a></h1>
				    <div class="row">
					    <div class="span2">
					    	
									<div  class='squares '   >
											<div  class='inside '  >
											  		<div record=1 class=' float_left'   style='background-position:<?php  echo $data['groups'][0]['background-position']   ?>'  >
											  			&nbsp;
											  		</div>	
											</div>
	
									</div>
					    </div>
					    
					    <div class="span3">
					    	
			         <div class="accordion" id="accordion2">
												<?php 
												
												foreach( $data['groups_categories']  as  $key => $groups_category){?>
													
									            <div class="accordion-group">
									              <div class="accordion-heading">
									
									                <a groups_category_id='<?php echo $groups_category['id']    ?>' legend='<?php echo $groups_category['category_name']    ?>' class="accordion-toggle theList"  data-toggle="collapse" data-parent="#accordion2"   style='cursor:pointer'  
									                	
									                	<?php if( isset($groups_category['projects'][0]['project_id']) &&  $groups_category['projects'][0]['project_id'] != '' ){?>
									                	
									                			href="#collapse<?php echo $groups_category['id']    ?>"
									                	
									                	<?php }else{?>
									                	
									                			href=""
									                	
									                	<?php } ?>
									                	
									                >
									                  <?php echo $groups_category['category_name'];    ?>
									                </a>
									              </div>
									              <div id="collapse<?php echo ( isset(  $groups_category['id'] ) ?  $groups_category['id'] :'' )   ?>" class="accordion-body collapse"   >
									                <div class="accordion-inner">
									                  <ol  class='accordion-inner_listing' groups_category_id='<?php echo $groups_category['id']    ?>'    >
									                  	
									                  	
									                  	<?php foreach( $groups_category['projects']  as  $project ){
									                  	
									                  			if( $project['project_id'] != ''){?>
									                  				
														                  	<li 	 class="fancyZoom "  new='0'  href='#fancyZoom_div' group_id=<?php  echo $data['groups'][0]['id']   ?> group_category_id='<?php echo $groups_category['id']    ?>'  legend='<?php echo $groups_category['category_name']    ?>' project_id='<?php echo $project['project_id']    ?>' >
														                  		<?php echo $project['project_name']    ?>
														                  	</li>									                  			
									                  			
									                  			<?php } 
									                  			
									                  	} ?>
									                  	
									                  </ol>
									                  
									                </div>
									              </div>
									            </div>							
														  
												<?php } ?>
			
			
			          </div>
					    	
					    	
					    </div>	
					    
					    <div  class="span1"  >
					    	<div  id='middle-vertical-line'  >
					    	</div>
					    </div>	
					    

					    <div  id='right-panel' class="span6" >
					    
					    
					    

					    
					    
					    </div>
				    </div>
			    </div>


					<div id="fancyZoom_div"  style='display:none;'  >
						
						<iframe   id="iframe_fancyZoom_div" scrolling="no"  frameborder="0" src=""  >
						    <p>Your browser does not support iframes.</p>
						</iframe>
					</div>	


  </body>

</html>

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
	
			$('#fancyZoom_div').setFancyZoomWindowSize(794, 350);
			
			$.fn.attach_FancyZoom_AddAssetFormPopWindow = function() {
				$(this).fancyZoom().css({cursor:'pointer'}).click(function(event) {
					$('#iframe_fancyZoom_div').attr('src','<?php  echo base_url()   ?>index.php/main/add_asset?group_id=' + $(this).attr('group_id') +  '&groups_category_id=' + $(this).attr('groups_category_id') +  '&project_id=' + $(this).attr('project_id') + '&legend='+ $(this).attr('legend')   + '&first_in_category=' + $(this).attr('first_in_category') )
				});	
				
				return this;
			};
			
			$(document).ready(function() {
				
						$('.theList').click(function(event) {
							$('#right-panel').load('<?php  echo base_url()   ?>index.php/ajax/projects/' +  $(this).attr('groups_category_id')  + '/<?php  echo $data['groups'][0]['id']   ?>?legend=' + encodeURI($(this).attr('legend')) + '&random=' + Math.floor(Math.random()*99999999999), function() {
								
								/*  FANCYZOOM THE RIGHT PANEL */
							  $('ul.thumbnails li.fancyZoom').css({cursor:'pointer'}).attach_FancyZoom_AddAssetFormPopWindow().click(function(event) {
							  	
							  	$(this).parent().children('.fancyZoom').children('.thumbnail').children().removeClass('selected');
							  	
							  	$(this).children('.thumbnail').children().addClass('selected');
							  	
							  });	
							});
						});	
						

						$(".accordion-heading a[href='']").click(function(event) {
							
									$('.accordion-body').each(function(event) {
												if( $(this).hasClass('in') ){
													
													$(this).collapse('hide')
													
												};
												
									});				
															
						});	
						
						//.fancyZoom();
						
						/*  FANCYZOOM THE LEFT PANEL */
					  $('ol.accordion-inner_listing li.fancyZoom').css({cursor:'pointer'}).attach_FancyZoom_AddAssetFormPopWindow().click(function(event) {
					  			
					  });	
					  
					  
						$('.squares .inside div').css({
								cursor:'pointer'
						}).addClass('square')
					  
					  
					  $('.brand').click(function(event) {
					  			document.location = '<?php  echo base_url()   ?>';
					  });	
					  
			});
			

			
		</script>
	

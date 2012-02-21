      <form class="form-horizontal">

        <fieldset>


         <?php foreach( $data['input_array']['inputs']  as  $inputs){ 
         
         
         				if( $inputs['type'] == 'text'){?>
         					
						          <div class="control-group">
						
						            <label class="control-label" for="<?php echo $inputs['input_name']    ?>"><?php echo $inputs['label']    ?></label>
						
						            <div class="controls">
						
						              <input id='<?php echo $inputs['input_name']    ?>' name="<?php echo $inputs['input_name']    ?>" type="text" class="<?php echo $data['input_array']['size-class']    ?> input_fields '  type="" value=""  placeholder="<?php echo $inputs['placeholder']    ?>">
						
						            </div>
						
						          </div>										         				
         				
         				<?php
         				}elseif( $inputs['type'] == 'select'){
         				?>	
         					
						          <div class="control-group">
						
						            <label class="control-label" for="<?php echo $inputs['input_name']    ?>"><?php echo $inputs['label']    ?></label>
						
						            <div class="controls">
						
						              <select   id="<?php echo $inputs['input_name']    ?>"  name="<?php echo $inputs['input_name']    ?>" class="<?php echo $data['input_array']['size-class']    ?> input_fields "    ?>'>
						              	
						              						<?php foreach( $inputs['options']  as  $option){ ?>	
						              							
																									<option value="<?php echo $option['value']    ?>"><?php echo $option['text']    ?></option>
																									
																			<?php } ?>	
						              </select>
						
						            </div>
						
						          </div>
         					
         				<?php
         				}elseif( $inputs['type'] == 'textarea'){
         				?>	
         					

						          <div class="control-group">
						
						            <label class="control-label"  for="<?php echo $inputs['input_name']    ?>"><?php echo $inputs['label']    ?></label>
						
						            <div class="controls">
						
						              <textarea  id="<?php echo $inputs['input_name']    ?>" name="<?php echo $inputs['input_name']    ?>" class="<?php echo $data['input_array']['size-class']    ?> input_fields "rows="<?php echo $inputs['rows']    ?>" placeholder="<?php echo $inputs['placeholder']    ?>"></textarea>
						
						            </div>
						
						          </div>
         					
         				<?php
         				}elseif( $inputs['type'] == 'file'){
         				?>	
         					
						
						          <div class="control-group">
						
						            <label class="control-label" for="<?php echo $inputs['input_name']    ?>"><?php echo $inputs['label']    ?></label>
						
						            <div class="controls">
						
						              <input  id="<?php echo $inputs['input_name']    ?>   name="<?php echo $inputs['input_name']    ?> class="input-file input_fields" type="file">
						
						            </div>
						
						          </div>
         					
         				<?php
         				}elseif( $inputs['type'] == 'radio'){
         				?>	
         					
					          <div class="control-group">
					
					            <label class="control-label">Radio buttons</label>
					
					            <div class="controls">
					
					              <label class="radio">
					
					                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					
					                Option one is this and that&mdash;be sure to include why it's great
					
					              </label>
					
					              <label class="radio">
					
					                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					
					                Option two can is something else and selecting it will deselect option one
					
					              </label>
					
					            </div>
					
					          </div>

         					
         				<?php
         				};
         			 
         } ?>
         
         
          <div class="form-actions">

            <button type="submit" class="btn btn-primary">Save changes</button>

          </div>

        </fieldset>

      </form>
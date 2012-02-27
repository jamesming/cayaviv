<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	
	
   public function __construct(){
        parent::__construct();
   }

	/**
	 * Index Page for this controller.
	 * 
	 * @package BackEnd
	 * @author James Ming <jamesming@gmail.com>
	 * @path /index.php/home/index
	 * @access public
	 */
	 

	public function index(){
		$data = array(
		);

		$this->load->view('main/index_view',
					array('data' => $data));	    
	}

	public function projects(){

		$categories = $this->query->get_categories_with_or_without_projects();
		
		$data = array(
			'categories' => $categories
		);

		$this->load->view('main/projects_view',
					array('data' => $data));	    
	}	
	
	
	public function add_asset(){
		

		if( $this->input->get('project_id') == -1 ){
			
			$project_id = $this->my_database_model->insert_table( $table = 'projects', $insert_what = array() );
			
			$new = 1;
			
		}else{
			
			$projects =   $this->query->get_projects_with_assets($where_array = array('projects.id' => $this->input->get('project_id')));

			$project_id = $projects[0]['id'];
			
		};

		$category_id = $this->input->get('category_id');
		
		$input_array = array(
			'action' => 'index.php/ajax/update_asset',
			'size-class' => 'span3',
			'table' => 'projects',
			'primary_key' => $project_id,
			'inputs' => array(
			
				array('input_name'=>'category_id', 'type' => 'hidden', 'value' => $category_id, 'label' => '', 'placeholder' => ''),
				array('input_name'=>'new', 'type' => 'hidden', 'value' => ( isset( $new ) ? 1:'0' ), 'label' => '', 'placeholder' => ''),
				array('input_name'=>'name', 'type' => 'text', 'value' => ( isset( $projects[0]['name'] ) ? $projects[0]['name'] :'' ), 'label' => 'Name of Project', 'placeholder' => 'type in project name'),
				array('input_name'=>'description', 'type' => 'textarea', 'value' => ( isset( $projects[0]['name'] ) ? $projects[0]['description'] :'' ), 'label' => 'Description', 'placeholder' => 'Write in who, what, when and other details', 'rows' =>5),
				array('input_name'=>'fileImage', 'type' => 'file', 'category_id' => $category_id, 'project_id' => $project_id,  'asset_type_id' => '1',  'label' => 'Upload an image', 'thumbnailbox' => 1, 'fileuploader_name' => 'upload_button_video_still', 'thumbnailbox-size' => array( 'width' => '160px', 'height' => '120px'), 'asset_id' => ( isset($projects['Video Stills']['assets'][0] ) ? $projects['Video Stills']['assets'][0]:'-1' ), 'allowable extensions' => 'jpg'),

			)
		);

	
		$data = array(
			'input_array' =>  $input_array,
			'legend' =>   $this->input->get('legend'),
			'first_in_category' => $this->input->get('first_in_category')
		);
		
		$this->load->view('main/add_asset_view',
					array('data' => $data));			
		

	}	



function t(){
$table = 'images';
$this->my_database_model->create_generic_table($table );


$fields_array = array(
                      'user_id' => array(
                                               'type' => 'int(11)'
                                    ),
                      'image_type_id' => array(
                                               'type' => 'int(11)'
                                    ),

              ); 
              
              
              
$this->my_database_model->add_column_to_table_if_exist(
	$table, 
	$fields_array
);
   


}
	



}

/* End of file welcome.php */
/* Location: ./application/controllers/home.php */
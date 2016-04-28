<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomePreferences extends CI_Controller {


	public function __construct()
	{
		// Constructor to auto-load HybridAuthLib
		parent::__construct();
		$this->load->library('HybridAuthLib');
		$this->load->model('Users');
		$this->load->model('Alexas_hair');
		$this->load->model('Alexas_hair_color');
		$this->load->model('Alexas_body_type');
		$this->load->model('Alexas_eye_color');
		$this->load->model('Alexas_profiles');
		$this->load->model('Alexas_relationships');
		$this->load->model('Alexas_children');
		$this->load->model('Alexas_children_preference');
		$this->load->model('Alexas_religions');
		$this->load->model('Alexas_qualifications');
		$this->load->model('Alexas_smoke');
		$this->load->model('Alexas_alcohol');
		$this->load->model('Alexas_sports');
		$this->load->model('Alexas_exercise');
		$this->load->model('Alexas_deal_transaction');
		$this->load->model('Alexas_sports_transaction');
		$this->load->model('Alexas_language');
		$this->load->model('Alexas_language_transaction');
		$this->load->model('Alexas_pet');
		$this->load->model('Alexas_pets_transaction');
		$this->load->model('Alexas_interest_transaction');
		$this->load->model('Alexas_hobbies');
		$this->load->model('Alexas_user_hobby');
		$this->load->model('Alexas_dating_preferences');
		$this->load->model('Alexas_advanced_preferences');
		$this->load->model('Alexas_ethnicity');
		$this->load->model('Alexas_dstv');
		$this->load->model('Alexas_uploads');


	}
	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
		}
	}
	public function index(){
	//Save DSTV information Developer Thendo Mulaudzi Date: 2016-04-18
	
    if(isset($_POST['form_step'])){
	if($_POST['form_step'] == 0)
	{
//	echo '<pre>';
//	print_r($_POST);echo '</pre>';return;
	
	//Radio buttons
	$dstv_pre[1]='';
	if(isset($_POST['dstv_20_25'])){
	$dstv_pre[1]='20-25';
	}
	$dstv_pre[2]='';
	if(isset($_POST['dstv_25_30'])){
	$dstv_pre[2]='25-30';
	}
    $dstv_pre[3]='';
	if(isset($_POST['dstv_30_35'])){
	$dstv_pre[3]='30-35';
	}
	$dstv_pre[4]='';
	if(isset($_POST['dstv_35_40'])){
	$dstv_pre[4]='35-45';
	}
	$dstv_pre[5]='';
	if(isset($_POST['dstv_40_50'])){
	$dstv_pre[5]='40-50';
	}
	$dstv_pre[6]='';
	if(isset($_POST['dstv_50_60'])){
	$dstv_pre[6]='50-60';
	}
	$dstv_pre[7]='';
	if(isset($_POST['dstv_male'])){
	$dstv_pre[7]='Male';
	}
	$dstv_pre[8]='';
	if(isset($_POST['dstv_beach'])){
	$dstv_pre[8]='Beach';
	}
	$dstv_pre[9]='';
	if(isset($_POST['dstv_quiet_night'])){
	$dstv_pre[9]='quiet_night';
	}
	$dstv_pre[10]='';
	if(isset($_POST['dstv_reading'])){
	$dstv_pre[10]='reading';
	}
	$dstv_pre[11]='';
	if(isset($_POST['dstv_sports'])){
	$dstv_pre[11]='sports';
	}
	$dstv_pre[12]='';
	if(isset($_POST['dstv_fast_cars'])){
	$dstv_pre[12]='fast_cars';
	}
	$dstv_pre[13]='';
	if(isset($_POST['dstv_female'])){
	$dstv_pre[13]='female';
	}
	$dstv_pre[14]='';
	if(isset($_POST['dstv_bushveld'])){
	$dstv_pre[14]='bushveld';
	}
	$dstv_pre[15]='';
	if(isset($_POST['dstv_culture'])){
	$dstv_pre[15]='culture';
	}
	$dstv_pre[16]='';
	if(isset($_POST['dstv_walks_on_beach'])){
	$dstv_pre[16]='walks_on_beach';
	}
	$dstv_pre[17]='';
	if(isset($_POST['dstv_socialising'])){
	$dstv_pre[17]='socialising';
	}
	$dstv_pre[18]='';
	if(isset($_POST['dstv_movies'])){
	$dstv_pre[18]='movies';
	}
	$dstv_pre[19]='';$dstv_considered='';
	if(isset($_POST['dstv_considered'])){
	$dstv_pre[19]='considered';
	$dstv_considered='considered';
	}
	$dstv_pre[20]='';$dstv_agree='';
	if(isset($_POST['dstv_agree'])){
	$dstv_pre[20]='agree';
	$dstv_agree='agree';
	}
	/*
    $_POST['dstv_full_image']  
    $_POST['dstv_head_image']
    */	
    $user_id=$this->session->userdata('user_id');
    $dstv_data1 = array(
					'alexas_dstv_full_name' => $_POST['dstv_fullname'],
					'alexas_dstv_email' => $_POST['dstv_email'],
					'alexas_dstv_age' => $_POST['dstv_age'],
					'alexas_user_id' => $user_id,
					'alexas_dstv_tel_work' => $_POST['dstv_w'],
					'alexas_dstv_tel_home' => $_POST['dstv_h'],
					'alexas_dstv_mobile' => $_POST['dstv_c'],
					'alexas_dstv_physical_address' => $_POST['dstv_phy_add'],
					'alexas_dstv_postal_address' => $_POST['dstv_postal_add'],
					'alexas_dstv_id_relationship' => $_POST['dstv_looking_for'],
					'alexas_dstv_ideal_date' => $_POST['dstv_ideal_date'],
					'alexas_dstv_cooking_preferences' => $_POST['dstv_enjoy_cooking'],
					'alexas_dstv_turn_off' => $_POST['dstv_turn_off'],
					'alexas_dstv_clinch' => $_POST['dstv_clinch'],
					'alexas_dstv_best_date' => $_POST['dstv_best_date'],
					'alexas_dstv_worst_date' => $_POST['dstv_worst_date'],
					'alexas_dstv_dream' => $_POST['dstv_dream'],
					'alexas_dstv_single' => $_POST['dstv_why_single'],
					'alexas_dstv_relationship_history' => $_POST['dstv_history'],
					'alexas_dstv_occupation' => $_POST['dstv_occupation'],
					'alexas_dstv_dream_occupation' => $_POST['dstv_dream_occupation'],
					'alexas_dstv_hobbies' => $_POST['dstv_hobbies'],
					'alexas_dstv_other_information' => $_POST['dstv_any_information'],
					'alexas_dstv_dating_site_question' => $_POST['dstv_tell_us'],
					'alexas_dstv_dating_site' => $_POST['dstv_member_of_any_dating'],
					'alexas_dstv_food_allergies' => $_POST['dstv_allergies'],
					'alexas_dstv_emmergency_contact' => $_POST['dstv_emergency_contacts'],
					'alexas_dstv_contestant' => $dstv_considered,
					'alexas_dstv_share_details' => $dstv_agree,
					);
    $dstv_id=$this->Alexas_dstv->addPreference($dstv_data1);
	for($i=1;$i<=20;$i++){
	
	$dstv_data2 = array(
					'alexas_preference_id' => $dstv_pre[$i],
					'alexas_user_id' => $user_id,
					'alexas_preference_transaction_date' => date('Y-m-d H:i:s')
					);
	if($dstv_pre[$i] != ''){				
	$this->Alexas_dstv->addPreferenceTrans($dstv_data2);
    }	
	}
	#STEP 1 - UPLOAD THE FULL IMAGE
		$config['upload_path']          = './uploads/dstv/';
		$config['allowed_types']        = 'gif|jpg|JPG|jpeg|png';
	
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('dstv_full_image'))
		{

			$error = array('error' => $this->upload->display_errors());
			//print_r($error);
			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
		}

		if ( ! $this->upload->do_upload('dstv_head_image'))
		{

			$error = array('error' => $this->upload->display_errors());
			//print_r($error);
			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
		}
		//echo "<pre>", print_r($data), "</pre>"; 	
		$this->load->library('upload', $config);
		if(isset($data)){
		if(isset($_FILES['dstv_full_image'])) {
			$tmpFile = $_FILES["dstv_full_image"]["tmp_name"];
			$temp = explode(".", $_FILES["dstv_full_image"]["name"]);
			$newfilename =$user_id.round(microtime(true)) . '.' . end($temp);
	       	
			$upload_array = array(
					'alexas_upload_file_name' => $data['upload_data']['file_name'],
					'alexas_upload_file_type' => $data['upload_data']['file_type'],
					'alexas_upload_file_size' => $data['upload_data']['file_size'],
					'alexas_upload_url' => 'uploads/dstv',
					'alexas_user_id' => $this->session->userdata('user_id'),
					'alexas_upload_type_id' => $data['upload_data']['file_ext'],
					'alexas_upload_created' => date('Y-m-d H:i:s'),
					'alexas_upload_description' => 'full',
					'alexas_upload_type_id' => 15 //Full Photo
				);
				$this->saveImageToDatabase($upload_array);
		}}
		if(isset($data)){
		if(isset($_FILES['dstv_head_image'])) {
			$tmpFile = $_FILES["dstv_head_image"]["tmp_name"];
			$temp = explode(".", $_FILES["dstv_head_image"]["name"]);
			$newfilename =$user_id.round(microtime(true)) . '.' . end($temp);
			$upload_array = array(
					'alexas_upload_file_name' => $data['upload_data']['file_name'],
					'alexas_upload_file_type' => $data['upload_data']['file_type'],
					'alexas_upload_file_size' => $data['upload_data']['file_size'],
					'alexas_upload_url' => 'uploads/dstv',
					'alexas_user_id' => $this->session->userdata('user_id'),
					'alexas_upload_type_id' => $data['upload_data']['file_ext'],
					'alexas_upload_created' => date('Y-m-d H:i:s'),
					'alexas_upload_description' => 'full',
					'alexas_upload_type_id' => 16 //Full Photo
				);
				$this->saveImageToDatabase($upload_array);
		}}
	header("Location: http://alexas.com/alexas_dev/index.php/WelcomePreferences?step=1"); /* Redirect browser */
    exit();
	}
	}
	
		//get gender details of the profile owner
		$profile_data['profile_data'] = $this->Alexas_profiles->get_profile_byID($this->session->userdata('user_id'));
		//get user details of the profile owner
		$user_data['user_data'] = $this->Users->get_user_details($this->session->userdata('user_id'));
		
		//get dating preferences by ID
		$dating_preferences['dating_preferences'] = $this->Alexas_dating_preferences->getDatingPrefence($this->session->userdata('user_id'));
		//get all the hair colors
		$hair_color['hair_color'] = $this->Alexas_hair_color->getAllHairColors();
		//get all eye colors
		$eye_color['eye_color'] = $this->Alexas_eye_color->getAllEyeColors();
		//get all the hair lengths
		$hair_length['hair_length'] = $this->Alexas_hair->getAllHairLengths();
		//get all the body types
		$body_type['body_type'] = $this->Alexas_body_type->getAllBodyTypes();
		//get all the relationship types
		$relationship_status['relationship_status'] = $this->Alexas_relationships->getAll();
		//get children options
		$children['children'] = $this->Alexas_children->getAll();
		//get children preferences
		$children_preferences['children_preferences'] = $this->Alexas_children_preference->getAll();
		//GET ALL RELIGIONS
		$all_religions['all_religions'] = $this->Alexas_religions->getAll();
		//get alll qualifications
		$all_qualifications['all_qualifications'] = $this->Alexas_qualifications->getAll();
		//get smoking habits
		$smoking['smoking'] = $this->Alexas_smoke->getAll();
 		//get alcohol patterns
 		$alcohol['alcohol'] = $this->Alexas_alcohol->getAll();
 		//get all sports
 		$sports['sports'] = $this->Alexas_sports->getAll();
 		//get exercise options
 		$exercise['exercise'] = $this->Alexas_exercise->getAll();
 		//get all the languages
 		$languages['languages'] = $this->Alexas_language->getAll();
 		//get all the pets
 		$pets['pets'] = $this->Alexas_pet->getAll();
 		//get all the hobbies
 		$hobbies['hobbies'] = $this->Alexas_hobbies->getAll();
 		//get all ethnicities 
 		$ethnicities['ethnicities'] = $this->Alexas_ethnicity->getAll();


 		$this->load->view('welcome_preferences',array_merge($user_data,$profile_data, $hair_color, $eye_color, $hair_length, $body_type, $relationship_status, $children, $children_preferences, $all_religions, $all_qualifications, $smoking, $alcohol, $sports, $exercise, $languages, $pets, $hobbies, $dating_preferences, $ethnicities)); 
	}

	
	private function saveImageToDatabase($uploaded_array = array()) {
		$this->Alexas_uploads->addNew($uploaded_array);
	}
	#update advanced preferences 
	function advancedPreferences(){
		$user = $this->session->userdata('user_id');
		// echo "<pre>", print_r($_POST), "</pre>"; 
		if($this->input->post('ajax') == 1):
			if($this->input->post('step') == 1)://extended 'About Me' information from the registration screens
				$profile_update = array(
					'alexas_profile_hair_color_id' => $this->input->post('hair_color'),
					'alexas_profile_eye_color' => $this->input->post('eye_color'),
					'alexas_profile_height' => $this->input->post('height'),
					'alexas_body_type_id' => $this->input->post('body_type')
					);
				$this->Alexas_profiles->update($user, $profile_update);

			elseif($this->input->post('step') == 2):
				$profile_update = array(
					'alexas_relationship_id' => $this->input->post('relationship_status'),
					'alexas_profile_children' => $this->input->post('child_number'),
					'alexas_profile_number_children' => $this->input->post('children'),
					'alexas_children_preference_id' => $this->input->post('children_pref'),
					'alexas_religion_id' => $this->input->post('religion')
					);
				$this->Alexas_profiles->update($user, $profile_update);
			
			elseif($this->input->post('step') == 3):
				$profile_update = array(
					'alexas_qualification_id' => $this->input->post('education'),
					'alexas_occupation' => $this->input->post('occupation'),
					'alexas_salary_range' => $this->input->post('self_income')
					);
				$this->Alexas_profiles->update($user, $profile_update);

			elseif($this->input->post('step') == 4): // lifestyle 
				// echo "<pre>", print_r($_POST), "</pre>"; 
				$profile_update = array(
					'alexas_smoke_id' => $this->input->post('smoking'),
					'alexas_alcohol_id' => $this->input->post('drinking'),
					'alexas_exercise_id' => $this->input->post('exercise') 
				);
				//sports deal breaker
				if($this->input->post('sports_deal_breaker') == 1):
					$deal_breaker = array(
					'dea_id' => 12, //sports deal breaker
					'alexas_user_id' => $user,
					'det_created' => date('Y-m-d H:i:s')
					);

				$this->Alexas_deal_transaction->saveDealBreaker($deal_breaker);
				
				endif;

				//sports preferences
				for($count = 0; $count<count($this->input->post('sports')); $count++):
					$sport_preference = array(
					'alexas_sports_id' => $this->input->post('sports')[$count],
					'alexas_user_id' => $user,
					'spt_date_created' => date('Y-m-d H:i:s')
					); 
					$this->Alexas_sports_transaction->saveSportPreference($sport_preference);
				endfor;

			elseif($this->input->post('step') == 5): // spoken languages 
				if(count($this->input->post('languages') > 0)):
					for($count = 0; $count<count($this->input->post('languages')); $count++):
						$language_options = array(
							'alexas_language_id' => $this->input->post('languages')[$count],
							'alexas_user_id' => $user,
							'lat_date_created' => date('Y-m-d H:i:s')
						);
						$this->Alexas_language_transaction->saveLanguages($language_options);
					endfor;
				endif;
			elseif($this->input->post('step') == 6): // favorite hot spots and pets
				if($this->input->post('about') && $this->input->post('about') != ''):
					$about_array = array(
					'alexas_profile_about' => $this->input->post('about')
					);  
					$this->Alexas_profiles->update($user, $about_array);
				endif;

				//save pets I own data
				for ($i=0; $i < count($this->input->post('my_pets')); $i++):
					$pets = array(
						'alexas_pets_transaction_have' => 1, //indicates that we are dealing with the pets that the profile owner owns /has
						'alexas_pet_id' => $this->input->post('my_pets')[$i],
						'alexas_user_id' => $user, 
						'alexas_pets_transaction_created' => date('Y-m-d H:i:s')
					);

					$this->Alexas_pets_transaction->savePets($pets);

				endfor;

				//save pets I like data
				if(count($this->input->post('like_pets') > 0)):
					for ($i=0; $i < count($this->input->post('like_pets')); $i++):
						$pets = array(
							'alexas_pets_transaction_like' => 1, //indicates that we are dealing with the pets that the profile owner owns /has
							'alexas_pet_id' => $this->input->post('like_pets')[$i],
							'alexas_user_id' => $user, 
							'alexas_pets_transaction_created' => date('Y-m-d H:i:s')
						);

						$this->Alexas_pets_transaction->savePets($pets);

					endfor;
				endif;

			elseif($this->input->post('step') == 7): // Interests
				if($this->input->post('movies') && $this->input->post('movies') != ''):
					$interests = array(
						'alexas_user_id' => $user, 
						'alexas_interest_id' => 1, //Movies 
						'alexas_interest_description' => $this->input->post('movies'), 
						'alexas_interest_transaction_created' => date('Y-m-d H:i:s')  
						);
					$this->Alexas_interest_transaction->addInterest($interests);
				endif;

				if($this->input->post('tv_shows') && $this->input->post('tv_shows') != ''):
					$interests = array(
						'alexas_user_id' => $user, 
						'alexas_interest_id' => 3, //TV shows 
						'alexas_interest_description' => $this->input->post('tv_shows'), 
						'alexas_interest_transaction_created' => date('Y-m-d H:i:s')  
						);
					$this->Alexas_interest_transaction->addInterest($interests);
				endif;

				if($this->input->post('music') && $this->input->post('music') != ''):
					$interests = array(
						'alexas_user_id' => $user, 
						'alexas_interest_id' => 2, //Music 
						'alexas_interest_description' => $this->input->post('music'), 
						'alexas_interest_transaction_created' => date('Y-m-d H:i:s')  
						);
					$this->Alexas_interest_transaction->addInterest($interests);
				endif;

				if($this->input->post('reading') && $this->input->post('reading') != ''):
					$interests = array(
						'alexas_user_id' => $user, 
						'alexas_interest_id' => 4, //Recently Read 
						'alexas_interest_description' => $this->input->post('reading'), 
						'alexas_interest_transaction_created' => date('Y-m-d H:i:s')  
						);
					$this->Alexas_interest_transaction->addInterest($interests);
				endif;
			
			elseif($this->input->post('step') == 8): // Hobbies
				for ($i=0; $i < count($this->input->post('hobbies')); $i++):
					$hobbies = array(
						'alexas_user_id' => $user,
						'alexas_hobby_id' => $this->input->post('hobbies')[$i],
						'alexas_user_hobby_created' => date('Y-m-d H:i:s')
						);
					$this->Alexas_user_hobby->saveHobby($hobbies);
				endfor;

			elseif($this->input->post('step') == 9): // Hobbies

				//hair length deal breaker
				if($this->input->post('hair_length_deal') == 1):
					$deal_breaker = array(
					'dea_id' => 2, //hair length deal breaker
					'alexas_user_id' => $user,
					'det_created' => date('Y-m-d H:i:s')
					);
					$this->Alexas_deal_transaction->saveDealBreaker($deal_breaker);
				endif;

				//hair length options
				if($this->input->post('hair_length') && count($this->input->post('hair_length')) > 0):

					for ($i=0; $i < count($this->input->post('hair_length')); $i++): 
						$hair_length_options = array(
							'alexas_user_id' => $user,
							'adv_criteria' => 2, //hair length
							'adv_criteria_value' => $this->input->post('hair_length')[$i],
							'adv_date_created' => date('Y-m-d H:i:s')
							);
						$this->Alexas_advanced_preferences->savePreference($hair_length_options);
					endfor;

				endif;

				//hair color deal breaker
				if($this->input->post('hair_color_deal') == 1):
					$deal_breaker = array(
					'dea_id' => 1, //hair color deal breaker
					'alexas_user_id' => $user,
					'det_created' => date('Y-m-d H:i:s')
					);
					$this->Alexas_deal_transaction->saveDealBreaker($deal_breaker);
				endif;

				//hair color preferences
				if($this->input->post('hair_color') && count($this->input->post('hair_color')) > 0):

					for ($i=0; $i < count($this->input->post('hair_color')); $i++): 
						$hair_color_options = array(
							'alexas_user_id' => $user,
							'adv_criteria' => 1, //hair color
							'adv_criteria_value' => $this->input->post('hair_color')[$i],
							'adv_date_created' => date('Y-m-d H:i:s')
							);
						$this->Alexas_advanced_preferences->savePreference($hair_color_options);
					endfor;

				endif;

				//body type deal breaker
				if($this->input->post('body_type_deal') == 1):
					$deal_breaker = array(
					'dea_id' => 3, //body type deal breaker
					'alexas_user_id' => $user,
					'det_created' => date('Y-m-d H:i:s')
					);
					$this->Alexas_deal_transaction->saveDealBreaker($deal_breaker);
				endif;

				//body type preferences
				if($this->input->post('body_type') && count($this->input->post('body_type')) > 0):

					for ($i=0; $i < count($this->input->post('body_type')); $i++): 
						$body_type_options = array(
							'alexas_user_id' => $user,
							'adv_criteria' => 3, //body type
							'adv_criteria_value' => $this->input->post('body_type')[$i],
							'adv_date_created' => date('Y-m-d H:i:s')
							);
						$this->Alexas_advanced_preferences->savePreference($body_type_options);
					endfor;

				endif;

				//height preferences
				if($this->input->post('min_height')):
					$min_height_options = array(
						'alexas_user_id' => $user,
						'adv_criteria' => 13, //minimum height
						'adv_criteria_value' => $this->input->post('min_height'),
						'adv_date_created' => date('Y-m-d H:i:s')
						);
					$this->Alexas_advanced_preferences->savePreference($min_height_options);
				endif;
				if($this->input->post('max_height')):
					$max_height_options = array(
						'alexas_user_id' => $user,
						'adv_criteria' => 14, //maximum height
						'adv_criteria_value' => $this->input->post('max_height'),
						'adv_date_created' => date('Y-m-d H:i:s')
						);
					$this->Alexas_advanced_preferences->savePreference($max_height_options);	
				endif;

			elseif($this->input->post('step') == 10): // education

				//education deal breaker
				if($this->input->post('education_deal') == 1):
					$deal_breaker = array(
					'dea_id' => 11, //education deal breaker
					'alexas_user_id' => $user,
					'det_created' => date('Y-m-d H:i:s')
					);
					$this->Alexas_deal_transaction->saveDealBreaker($deal_breaker);
				endif;

				//education preferences
				if($this->input->post('education') && count($this->input->post('education')) > 0):
					for ($i=0; $i < count($this->input->post('education')); $i++) { 
						$education_options = array(
						'alexas_user_id' => $user,
						'adv_criteria' => 11, //qualifications
						'adv_criteria_value' => $this->input->post('education')[$i],
						'adv_date_created' => date('Y-m-d H:i:s')
						);
					$this->Alexas_advanced_preferences->savePreference($education_options);
					}
				endif;

				//language deal breaker
				if($this->input->post('language_deal') == 1):
					$deal_breaker = array(
					'dea_id' => 15, //language deal breaker
					'alexas_user_id' => $user,
					'det_created' => date('Y-m-d H:i:s')
					);
					$this->Alexas_deal_transaction->saveDealBreaker($deal_breaker);
				endif;

				//language preferences
				if($this->input->post('language') && count($this->input->post('language')) > 0):
					for ($i=0; $i < count($this->input->post('language')); $i++) { 
						$language_options = array(
						'alexas_user_id' => $user,
						'adv_criteria' => 15, //languages
						'adv_criteria_value' => $this->input->post('language')[$i],
						'adv_date_created' => date('Y-m-d H:i:s')
						);
					$this->Alexas_advanced_preferences->savePreference($language_options);
					}
				endif;
			
			elseif($this->input->post('step') == 11): // ethnicities and religion

				//ethnicity deal breaker
				if($this->input->post('ethnicity_deal') == 1):
					$deal_breaker = array(
					'dea_id' => 16, //ethnicity deal breaker
					'alexas_user_id' => $user,
					'det_created' => date('Y-m-d H:i:s')
					);
					$this->Alexas_deal_transaction->saveDealBreaker($deal_breaker);
				endif;

				//ethnicity preferences
				if($this->input->post('ethnicity') && count($this->input->post('ethnicity')) > 0):
					for ($i=0; $i < count($this->input->post('ethnicity')); $i++) { 
						$ethnicity_options = array(
						'alexas_user_id' => $user,
						'adv_criteria' => 16, //ethnicities
						'adv_criteria_value' => $this->input->post('ethnicity')[$i],
						'adv_date_created' => date('Y-m-d H:i:s')
						);
					$this->Alexas_advanced_preferences->savePreference($ethnicity_options);
					}
				endif;

				//religious beliefs deal breaker
				if($this->input->post('religion_deal') == 1):
					$deal_breaker = array(
					'dea_id' => 5, //religious beliefs deal breaker
					'alexas_user_id' => $user,
					'det_created' => date('Y-m-d H:i:s')
					);
					$this->Alexas_deal_transaction->saveDealBreaker($deal_breaker);
				endif;

				//religious beliefs preferences
				if($this->input->post('religions') && count($this->input->post('religions')) > 0):
					for ($i=0; $i < count($this->input->post('religions')); $i++) { 
						$religion_options = array(
						'alexas_user_id' => $user,
						'adv_criteria' => 5, //religious beliefs
						'adv_criteria_value' => $this->input->post('religions')[$i],
						'adv_date_created' => date('Y-m-d H:i:s')
						);
					$this->Alexas_advanced_preferences->savePreference($religion_options);
					}
				endif;

			elseif($this->input->post('step') == 12): // relationship status and kids

				//relationship status deal breaker
				if($this->input->post('relationship_deal') == 1):
					$deal_breaker = array(
					'dea_id' => 6, //relationship status deal breaker
					'alexas_user_id' => $user,
					'det_created' => date('Y-m-d H:i:s')
					);
					$this->Alexas_deal_transaction->saveDealBreaker($deal_breaker);
				endif;

				//relationship status preferences
				if($this->input->post('relationship') && count($this->input->post('relationship')) > 0):
					for ($i=0; $i < count($this->input->post('relationship')); $i++) { 
						$relationship_options = array(
						'alexas_user_id' => $user,
						'adv_criteria' => 6, //relationship status
						'adv_criteria_value' => $this->input->post('relationship')[$i],
						'adv_date_created' => date('Y-m-d H:i:s')
						);
					$this->Alexas_advanced_preferences->savePreference($relationship_options);
					}
				endif;

				//have kids deal breaker
				if($this->input->post('have_kids_deal') == 1):
					$deal_breaker = array(
					'dea_id' => 7, //have kids deal breaker
					'alexas_user_id' => $user,
					'det_created' => date('Y-m-d H:i:s')
					);
					$this->Alexas_deal_transaction->saveDealBreaker($deal_breaker);
				endif;

				//have kids preferences
				if($this->input->post('have_kids') && count($this->input->post('have_kids')) > 0):
					for ($i=0; $i < count($this->input->post('have_kids')); $i++) { 
						$have_kids_options = array(
						'alexas_user_id' => $user,
						'adv_criteria' => 7, //have kids
						'adv_criteria_value' => $this->input->post('have_kids')[$i],
						'adv_date_created' => date('Y-m-d H:i:s')
						);
					$this->Alexas_advanced_preferences->savePreference($have_kids_options);
					}
				endif;

				//want kids deal breaker
				if($this->input->post('want_kids_deal') == 1):
					$deal_breaker = array(
					'dea_id' => 8, //want kids deal breaker
					'alexas_user_id' => $user,
					'det_created' => date('Y-m-d H:i:s')
					);
					$this->Alexas_deal_transaction->saveDealBreaker($deal_breaker);
				endif;

				//want kids preferences
				if($this->input->post('want_kids') && count($this->input->post('want_kids')) > 0):
					for ($i=0; $i < count($this->input->post('want_kids')); $i++) { 
						$want_kids_options = array(
						'alexas_user_id' => $user,
						'adv_criteria' => 8, //want kids
						'adv_criteria_value' => $this->input->post('want_kids')[$i],
						'adv_date_created' => date('Y-m-d H:i:s')
						);
					$this->Alexas_advanced_preferences->savePreference($want_kids_options);
					}
				endif;
			
			elseif($this->input->post('step') == 13): // lifestyle
				//salary preferences
				if($this->input->post('salary_options') && count($this->input->post('salary_options')) > 0):
					for ($i=0; $i < count($this->input->post('salary_options')); $i++) { 
						$want_kids_options = array(
						'alexas_user_id' => $user,
						'adv_criteria' => 17, //salary
						'adv_criteria_value' => $this->input->post('salary_options')[$i],
						'adv_date_created' => date('Y-m-d H:i:s')
						);
					$this->Alexas_advanced_preferences->savePreference($want_kids_options);
					}
				endif;

				//drinking deal breaker
				if($this->input->post('alcohol_deal') == 1):
					$deal_breaker = array(
					'dea_id' => 9, //drinking deal breaker
					'alexas_user_id' => $user,
					'det_created' => date('Y-m-d H:i:s')
					);
					$this->Alexas_deal_transaction->saveDealBreaker($deal_breaker);
				endif;

				//drinking preferences
				if($this->input->post('drinking_options') && count($this->input->post('drinking_options')) > 0):
					for ($i=0; $i < count($this->input->post('drinking_options')); $i++) { 
						$want_kids_options = array(
						'alexas_user_id' => $user,
						'adv_criteria' => 9, //salary
						'adv_criteria_value' => $this->input->post('drinking_options')[$i],
						'adv_date_created' => date('Y-m-d H:i:s')
						);
					$this->Alexas_advanced_preferences->savePreference($want_kids_options);
					}
				endif;

				//smoking deal breaker
				if($this->input->post('smoking_deal') == 1):
					$deal_breaker = array(
					'dea_id' => 10, //smoking deal breaker
					'alexas_user_id' => $user,
					'det_created' => date('Y-m-d H:i:s')
					);
					$this->Alexas_deal_transaction->saveDealBreaker($deal_breaker);
				endif;

				//smoking preferences
				if($this->input->post('smoking_options') && count($this->input->post('smoking_options')) > 0):
					for ($i=0; $i < count($this->input->post('smoking_options')); $i++) { 
						$want_kids_options = array(
						'alexas_user_id' => $user,
						'adv_criteria' => 10, //smoking
						'adv_criteria_value' => $this->input->post('smoking_options')[$i],
						'adv_date_created' => date('Y-m-d H:i:s')
						);
					$this->Alexas_advanced_preferences->savePreference($want_kids_options);
					}
				endif;

			elseif($this->input->post('step') == 14): // profile summary
				$profile_update = array(
					'alexas_profile_summary' => $this->input->post('profile_summary')
					);
				$this->Alexas_profiles->update($user, $profile_update);

			endif;
		endif;
	}
}

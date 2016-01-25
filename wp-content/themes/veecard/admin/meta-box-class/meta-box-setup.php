<?php

require_once("meta-box-class.php");

if (is_admin()){

	//All meta boxes prefix
	$prefix = 'resume_';


	//Bio info meta box config
	$config1 = array(
	'id' => 'bio_info',          			// meta box id, unique per meta box
	'title' => 'Bio Info',          		// meta box title
	'pages' => array('resume'),      		// post types, accept custom post types as well, default is array('post'); optional
	'context' => 'normal',            		// where the meta box appear: normal (default), advanced, side; optional
	'priority' => 'high',            		// order of meta box: high (default), low; optional
	'fields' => array(),            		// list of meta fields (can be added by field arrays)
	'local_images' => true,          		// Use local or hosted images (meta box images for add/remove)
	'use_with_theme' => true          		//change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
	);


	//Initiate bio info meta box
	$my_meta1 =  new AT_Meta_Box($config1);


	//Bio info fields
	$my_meta1->addText($prefix.'bio_name',array('name'=> 'Full Name '));
	$my_meta1->addText($prefix.'bio_address',array('name'=> 'Address '));
	$my_meta1->addText($prefix.'bio_location',array('name'=> 'Location '));
	$my_meta1->addText($prefix.'bio_email',array('name'=> 'Email '));
	$my_meta1->addText($prefix.'bio_phone',array('name'=> 'Phone Number '));
	$my_meta1->addText($prefix.'bio_url',array('name'=> 'Website ', 'desc'=>'Make sure to include http:// in the URL'));

    //Finish bio info meta mox decleration
	$my_meta1->Finish();




  //Employment info meta box config
  $config2 = array(
    'id' => 'employment',          			// meta box id, unique per meta box
    'title' => 'Employment',          		// meta box title
	  'pages' => array('resume'),      		// post types, accept custom post types as well, default is array('post'); optional
    'context' => 'normal',					// where the meta box appear: normal (default), advanced, side; optional
    'priority' => 'high',            		// order of meta box: high (default), low; optional
    'fields' => array(),            		// list of meta fields (can be added by field arrays)
    'local_images' => true,          		// Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => true          		//change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );


  //Initiate employment info meta box
  $my_meta2 =  new AT_Meta_Box($config2);

  //Employment info fields
  $repeater_fields[] = $my_meta2->addText($prefix.'job_title',array('name'=> 'Job Title '),true);
  $repeater_fields[] = $my_meta2->addTextarea($prefix.'job_description',array('name'=> 'Job Description '),true);
  $repeater_fields[] = $my_meta2->addDate($prefix.'job_fromdate',array('name'=> 'Start Date '),true);
  $repeater_fields[] = $my_meta2->addDate($prefix.'job_todate',array('name'=> 'End Date ', 'desc' =>'Use "PRESENT", if you are still employed'),true);
  $repeater_fields[] = $my_meta2->addText($prefix.'job_employer',array('name'=> 'Employer Name '),true);
  $repeater_fields[] = $my_meta2->addText($prefix.'job_url',array('name'=> 'Employer Url ', 'desc'=>'Make sure to include http:// in the URL'),true);
  $repeater_fields[] = $my_meta2->addText($prefix.'job_reference_letter',array('name'=> 'Reference Letter Name '),true);
  $repeater_fields[] = $my_meta2->addText($prefix.'job_reference_letter_url',array('name'=> 'Reference Letter Url ', 'desc'=>'Make sure to include http:// in the URL'),true);
  $repeater_fields[] = $my_meta2->addText($prefix.'job_intern_report_0',array('name'=> 'Intern Report Name '),true);
  $repeater_fields[] = $my_meta2->addText($prefix.'job_intern_report_url_0',array('name'=> 'Intern Report Url ', 'desc'=>'Make sure to include http:// in the URL'),true);
  $repeater_fields[] = $my_meta2->addText($prefix.'job_intern_report_1',array('name'=> 'Intern Report Name '),true);
  $repeater_fields[] = $my_meta2->addText($prefix.'job_intern_report_url_1',array('name'=> 'Intern Report Url ', 'desc'=>'Make sure to include http:// in the URL'),true);
  $repeater_fields[] = $my_meta2->addText($prefix.'job_intern_report_2',array('name'=> 'Intern Report Name '),true);
  $repeater_fields[] = $my_meta2->addText($prefix.'job_intern_report_url_2',array('name'=> 'Intern Report Url ', 'desc'=>'Make sure to include http:// in the URL'),true);
  
  //Employment repeater block
  $my_meta2->addRepeaterBlock($prefix.'job_',array('inline' => true, 'name' => 'Enter your job info','fields' => $repeater_fields, 'sortable'=> true));


  //Finish employment info meta mox decleration
  $my_meta2->Finish();


 //Education info meta box config
  $config3 = array(
    'id' => 'education_info',          // meta box id, unique per meta box
    'title' => 'Education',          // meta box title
	  'pages' => array('resume'),      		// post types, accept custom post types as well, default is array('post'); optional
    'context' => 'normal',            // where the meta box appear: normal (default), advanced, side; optional
    'priority' => 'high',            // order of meta box: high (default), low; optional
    'fields' => array(),            // list of meta fields (can be added by field arrays)
    'local_images' => true,          // Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => true          //change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );


  //Initiate education info meta box
  $my_meta3 =  new AT_Meta_Box($config3);

  //Education info fields
  $repeater_fields1[] = $my_meta3->addText($prefix.'edu_degree',array('name'=> 'Degree '),true);
  $repeater_fields1[] = $my_meta3->addText($prefix.'edu_grade',array('name'=> 'Grade '),true);
  $repeater_fields1[] = $my_meta3->addDate($prefix.'edu_year',array('name'=> 'Graduation Year '),true);
  $repeater_fields1[] = $my_meta3->addText($prefix.'edu_school',array('name'=> 'School '),true);
  $repeater_fields1[] = $my_meta2->addText($prefix.'edu_url',array('name'=> 'School Url ', 'desc'=>'Make sure to include http:// in the URL'),true);

  //Education repeater block
  $my_meta3->addRepeaterBlock($prefix.'edu_',array('inline' => true, 'name' => 'Enter your education info','fields' => $repeater_fields1, 'sortable'=> true));

  //Finish education info meta mox decleration
  $my_meta3->Finish();



  //Skills info meta box config
	$config4 = array(
    'id' => 'skills_info',          		// meta box id, unique per meta box
    'title' => 'Skills',          			// meta box title
	  'pages' => array('resume'),      		// post types, accept custom post types as well, default is array('post'); optional
    'context' => 'normal',            		// where the meta box appear: normal (default), advanced, side; optional
    'priority' => 'high',            		// order of meta box: high (default), low; optional
    'fields' => array(),            		// list of meta fields (can be added by field arrays)
    'local_images' => true,          		// Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => true          		//change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );


  //Initiate skills info meta box
  $my_meta4 =  new AT_Meta_Box($config4);

  //Skills info fields
  $repeater_fields4[] = $my_meta4->addText($prefix.'skill_name',array('name'=> 'Skill Name '),true);
  $repeater_fields4[] = $my_meta4->addSelect($prefix.'skill_level',array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10'),array('name'=> 'Skill Level ', 'std'=> array('2')),true);

  //Skills repeater block
  $my_meta4->addRepeaterBlock($prefix.'skill_',array('inline' => true, 'name' => 'Enter your skill info','fields' => $repeater_fields4, 'sortable'=> true));


  //Finish skills info meta mox decleration
  $my_meta4->Finish();
  
   //Volunteering info meta box config
  $config5 = array(
    'id' => 'volunteering',        			// meta box id, unique per meta box
    'title' => 'Volunteering',         		// meta box title
	  'pages' => array('resume'),      		// post types, accept custom post types as well, default is array('post'); optional
    'context' => 'normal',					// where the meta box appear: normal (default), advanced, side; optional
    'priority' => 'high',            		// order of meta box: high (default), low; optional
    'fields' => array(),            		// list of meta fields (can be added by field arrays)
    'local_images' => true,          		// Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => true          		//change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );


  //Initiate Volunteering info meta box
  $my_meta5 =  new AT_Meta_Box($config5);


  //Volunteering info fields
  $repeater_fields5[] = $my_meta5->addText($prefix.'volunteering_title',array('name'=> 'Volunteering Title '),true);
  $repeater_fields5[] = $my_meta5->addTextarea($prefix.'volunteering_description',array('name'=> 'Volunteering Description '),true);
  $repeater_fields5[] = $my_meta5->addDate($prefix.'volunteering_fromdate',array('name'=> 'Start Date '),true);
  $repeater_fields5[] = $my_meta5->addDate($prefix.'volunteering_todate',array('name'=> 'End Date ', 'desc' =>'Use "PRESENT", if you are still Volunteering'),true);
  $repeater_fields5[] = $my_meta5->addText($prefix.'volunteering_name',array('name'=> 'Volunteerers Name '),true);
  $repeater_fields5[] = $my_meta5->addText($prefix.'volunteering_url',array('name'=> 'Volunteerers Url ', 'desc'=>'Make sure to include http:// in the URL'),true);

  //Volunteering repeater block
  $my_meta5->addRepeaterBlock($prefix.'volunteering_',array('inline' => true, 'name' => 'Enter your volunteering info','fields' => $repeater_fields5, 'sortable'=> true));


  //Finish Volunteering info meta mox decleration
  $my_meta5->Finish();

   //Project info meta box config
  $config6 = array(
    'id' => 'project', 		       			// meta box id, unique per meta box
    'title' => 'Applied Projects',     		// meta box title
	  'pages' => array('resume'),      		// post types, accept custom post types as well, default is array('post'); optional
    'context' => 'normal',					// where the meta box appear: normal (default), advanced, side; optional
    'priority' => 'high',            		// order of meta box: high (default), low; optional
    'fields' => array(),            		// list of meta fields (can be added by field arrays)
    'local_images' => true,          		// Use local or hosted images (meta box images for add/remove)
    'use_with_theme' => true          		//change path if used with theme set to true, false for a plugin or anything else for a custom path(default false).
  );


  //Initiate Project info meta box
  $my_meta6 =  new AT_Meta_Box($config6);


  //Project info fields
  $repeater_fields6[] = $my_meta6->addText($prefix.'project_title',array('name'=> 'Project Title '),true);
  $repeater_fields6[] = $my_meta6->addTextarea($prefix.'project_description',array('name'=> 'Project Description '),true);
  $repeater_fields6[] = $my_meta6->addDate($prefix.'project_fromdate',array('name'=> 'Start Date '),true);
  $repeater_fields6[] = $my_meta6->addDate($prefix.'project_todate',array('name'=> 'End Date ', 'desc' =>'Use "PRESENT", if you are still Project'),true);
  $repeater_fields6[] = $my_meta6->addText($prefix.'project_name',array('name'=> 'Project Name '),true);
  $repeater_fields6[] = $my_meta6->addText($prefix.'project_url',array('name'=> 'Project Url ', 'desc'=>'Make sure to include http:// in the URL'),true);

  //Project repeater block
  $my_meta6->addRepeaterBlock($prefix.'project_',array('inline' => true, 'name' => 'Enter your project info','fields' => $repeater_fields6, 'sortable'=> true));


  //Finish Project info meta mox decleration
  $my_meta6->Finish();

}
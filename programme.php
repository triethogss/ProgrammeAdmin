<?php
	class Programme extends Front_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		public function index()
		{
			$data['title'] = 'Programme';
			// By open to public data			
		    $opentopublic = array(array("id"=>1,"name"=>"By open to public" ),array("id"=>2,"name"=>"Other" ));
		    $data["opentopublic"]=$opentopublic;

		    // category data
		    $category = array(array("id"=>1,"name"=>"Category Name" ),array("id"=>2,"name"=>"Other" ));
		    $data["category"]=$category;

		    //Activity type data
		    $activity = array(array("id"=>1,"name"=>"Activity type" ),array("id"=>2,"name"=>"Other" ));
		    $data["activity"]=$activity;

		    //Venue data
		    $venue = array(array("id"=>1,"name"=>"Venue" ),array("id"=>2,"name"=>"Other" ));
		    $data["venue"]=$venue;

		    Assets::add_js('programme/AvailableForRegistration.js');
			Template::set_view("programme/AvailableForRegistration");
			Template::set($data);
			Template::render();
		}
		// show available programme for registration (index)
		public function availableForRegistration()
		{
			$data['title'] = 'Programme';
			// By open to public data			
		    $opentopublic = array(array("id"=>1,"name"=>"By open to public" ),array("id"=>2,"name"=>"Other" ));
		    $data["opentopublic"]=$opentopublic;

		    // category data
		    $category = array(array("id"=>1,"name"=>"Category Name" ),array("id"=>2,"name"=>"Other" ));
		    $data["category"]=$category;

		    //Activity type data
		    $activity = array(array("id"=>1,"name"=>"Activity type" ),array("id"=>2,"name"=>"Other" ));
		    $data["activity"]=$activity;

		    //Venue data
		    $venue = array(array("id"=>1,"name"=>"Venue" ),array("id"=>2,"name"=>"Other" ));
		    $data["venue"]=$venue;

		    Assets::add_js('programme/AvailableForRegistration.js');
			Template::set_view("programme/AvailableForRegistration");
			Template::set($data);
			Template::render();
		}

		// show screen to add new programme
		public function addNewProgramme()
		{
			$data['title']='Add new programme';
			// programme category data
			$programme = array(array("id"=>1,"name"=>"Programme category" ),array("id"=>2,"name"=>"Other" ));
		    $data["programme"]=$programme;

		    // activity data
			$activity = array(array("id"=>1,"name"=>"Activity" ),array("id"=>2,"name"=>"Other" ));
		    $data["activity"]=$activity;

		    //target audience data
		    $target_audience = array(array("id"=>1,"name"=>"Target audience" ),array("id"=>2,"name"=>"Other" ));
			$data["target_audience"]=$target_audience;

			//list leader data
			$list_leader = array(array("id"=>1,"name"=>"Leader name" ),array("id"=>2,"name"=>"Other" ));
			$data["list_leader"]=$list_leader;

			//additional resource data
			$additional_resource = array(array("id"=>1,"name"=>"Additional resources 1 " ),array("id"=>2,"name"=>"Additional resources 2" ),array("id"=>3,"name"=>"Other" ));
			$data["additional_resource"]=$additional_resource;

		    Assets::add_js('programme/AddNewProgramme.js');
			Template::set($data);
			Template::set_view("programme/AddNewProgramme");
			Template::render();
		}
		//  show sreen of Endorsement Programme
		public function endorsementRequest()
		{
			Assets::add_js('programme/endorsementRequest.js');
			$data['title']="Endorsement Request";
			Template::set($data);
			Template::set_view("programme/EndorsementRequest");
			Template::render();
		}
		//  show sreen of Endorsement Programme
		public function endorsementEndorsed()
		{
			Assets::add_js('programme/endorsementEndorsed.js');
			$data['title']="Endorsement Endorsed";
			Template::set($data);
			Template::set_view("programme/EndorsementEndorsed");
			Template::render();
		}
		// show information of request programme to endorse or decline
		public function detailOfRequestProgramme()
		{
			$data['title']="Request of Endorsement";
			Template::set($data);
			Template::set_view("programme/DetailRequestProgramme");
			Template::render();
		}
		// show screen to add new programme
		public function addProgrammeForRegistration()
		{
			$data["title"]="Add Programme for Registration";
			Assets::add_js('programme/AddProgrammeForRegistration.js');
			Template::set($data);
			Template::set_view("programme/AddProgrammeForRegistration");
			Template::render();
		}
		//show detail of programme when click each available programme
		public function detailOfAvailableProgramme()
		{
			$data["title"]="Detail of Available Programme";
			Template::set($data);
			Template::set_view("programme/DetailOfAvailableProgramme");
			Template::render();
		}
		// show add participant (Individual) of vailable programme
		public function addParticipantIndividual()
		{
			$data["title"]="Add perticipant Individual"; 
		    // citizenship data
		    $citizenship = array(array("id"=>1,"name"=>"Singaporean" ),array("id"=>2,"name"=>"Other" ));
		    $data["citizenship"]=$citizenship;

		    // race data
		    $race = array(array("id"=>1,"name"=>"Chinese" ),array("id"=>2,"name"=>"Other" ));
		    $data["race"]=$race;		

		    //Mode of Payment data
		    $modeofpayment = array(array("id"=>1,"name"=>"Credit card" ),array("id"=>2,"name"=>"Other" ));
		    $data["modeofpayment"]=$modeofpayment;
		    Assets::add_js('programme/AddParticipantIndividual.js');		    
			Template::set($data);
			Template::set_view("programme/AddParticipantIndividual");
			Template::render();
		}
		// show add participant (Group) of vailable programme
		public function addParticipantGroup()
		{
			$data["title"] = "Add participant Group";
			// Payment method data
			$paymenmethod  = array(array("id"=>1,"name"=>"Credit card" ),array("id"=>2,"name"=>"Other" ));
			$data["paymenmethod"]=$paymenmethod;

			Assets::add_js('programme/AddParticipantGroup.js');
			Template::set($data);
			Template::set_view("programme/AddParticipantGroup");
			Template::render();
		}
		public function showAttendance()
		{
			$data["title"]= "Show Attendance";
			Assets::add_js('programme/ShowAttendance.js');
			Template::set($data);
			Template::set_view("programme/ShowAttendance");
			Template::render();

		}
		public function showParticipantGroup()
		{
			$data["title"]= "Show Participant Group";
			Assets::add_js('programme/ShowParticipantGroup.js');
			Template::set($data);
			Template::set_view("programme/ShowParticipantGroup");
			Template::render();

		}
		public function sendNotification()
		{
			$data["title"]= "Send Notification";
			Assets::add_js('programme/SendNotification.js');
			Template::set($data);
			Template::set_view("programme/SendNotification");
			Template::render();
		}
		public function demo($check)
		{
			if($check=="true")
			{
				$data["title"]= "Show Participant Group";
				Template::set_view("programme/ShowParticipantGroup");
			}
			else
			{
				$data["title"]= "Show Participant Group";
				Template::set_view("programme/ShowAttendance");
			}
			Template::set($data);			
			Template::render();
		}


	}

?>
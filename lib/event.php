<?php  
		class Event
		{
		    public $title, $image, $description, $date, $time, $website, $email, $id;

		    public function __construct($id, $title, $image, $description, $date, $time, $website, $email){
		    	$this->id = $id;
				$this->title = $title;
				$this->image = $image;
				$this->description = $description;
				$this->date = $date;
				$this->time = $time;
				$this->website = $website;
				$this->email = $email;
			}
		}?>
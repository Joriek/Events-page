<?php  
		class Event
		{
		    public $title, $image, $discription, $date, $time, $website, $email;

		    public function __construct($title, $image, $discription, $date, $time, $website, $email){
				$this->title = (string) $title;
				$this->image = $image;
				$this->discription = $discription;
				$this->date = $date;
				$this->time = $time;
				$this->website = $website;
				$this->email = $email;
			}
		}?>
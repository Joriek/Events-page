<?php  
		class Events
		{
		    public $title;
		    public $image
		    public $discription;
		    public $date;
		    public $time;
		    public $website;
		    public $email;

		    public function __construct($title, $image, $discription, $date, $time, $website, $email){
				$this->$title = $title;
				$this->$image = $image
				$this->$discription = $discription;
				$this->$date = $date;
				$this->$time = $time;
				$this->$website = $website;
				$this->$email = $email;
			}
		}?>
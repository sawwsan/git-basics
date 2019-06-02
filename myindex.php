<?php 
	class man {
		public $name;
		public $heigh;
		private $no;
		protected $rel;
		public $city;
		public function set($hrel){
			$this->rel=$hrel;
		}
		function moshakhasat(){
			echo "My name is " . $this->name;
		}
		function shomare(){
			echo "My number is " . $this->rel;
		}
	}
	
	$sasan = new man("Sasan");
	// $sasan->name="Sasan";
	$sasan->moshakhasat();
	$sasan->rel="55";
	$sasan->shomare();
?>
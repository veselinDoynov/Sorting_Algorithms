<?php

class SchellSorting {
	
	protected $increments = [121, 40, 13, 4, 1];
	
	public function shellSort($list) {
		
		for($i = 0; $i < count($increments); $i++) {
			
			$increment = $increments[$i];
			$this->hSort($list, $increment);
		}
	}
	
	private function hSort($list, $increment) {
		
		if(count($list) < $increment * 2) {
			return;
		}
		
		for($i = 0; $i < $increment; $i++) {
			
			$this->sortSublist($list, $i, $increment);
		}
		
	}
	
	private function sortSublist($list, $startIndex, $increment) {
		
		for($i = $startIndex + $increment; $i < count($list); $i +=$increment) {
			
			$value = $list[$i];
			
			for($j = $i; $j > $startIndex; $j -=$increment) {
				$previousValue = $list[$j - $increment];
				
				if($value >= $previousValue){
					break;
				}
				
				$list[$j] = $previousValue;
			}
			$list[$j] = $value;
		}
	}
	
	
	
	//381793 -> 381793 -> 381793 -> 388793 -> 338793 -> 138793 -> 138883 -> 137893 -> 137893 -> 137899 -> 137889 -> 137789 -> 133789
	
	
}
<?php

/*
* Moving greatest to the left like a bubble
*/
class BubbleSorting {
	
	
	public function bubbleSort($list) {
		
		for($pass = 1; $i < count($list); $pass++) {
			for($left = 0; $left < count($list) - $pass; $left++) {
				
				$right = $left + 1;
				if($list[$left] > $list[$right]){
					$this->swap($list, $left, $right)
				}			
			} 
		}
	}
	
	private function swap($list, $left, $right) {
		
		$temp = $list[$left];
		$list[$left] = $list[$right];
		$list[$right] = $temp;
		
	}
}



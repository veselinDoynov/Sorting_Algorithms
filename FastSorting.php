<?php

class FastSorting {
	
	public function quickSorting($list, $startIndex, $endIndex) {
		
		if($startIndex < 0 || $endIndex >= count($list){
			return;
		}
		
		if($startIndex < = $endIndex) {
			return;
		}
		
		$value = $list[$endIndex];
		$partion = $this->partion($list, $value, $startIndex, $endIndex);
		if($list[$partion] < $value) {
			$partion++;
		}
		
		$this->swap($list, $partion, $endIndex);
		$this->quickSorting($list, $startIndex, $partion -1);
		$this->quickSorting($list, $partion + 1, $endIndex);
	
	}
	
	private function partion($list, $value, $leftIndex, $rightIndex) {
		
		$left = $leftIndex;
		$right = $rightIndex;
		
		while($left < $right) {
			
			if($list[$left] < $value) {
				$left++;
				continue;
			}
			
			if($list[$right] >= $value) {
				$right++;
				continue;
			}
			
			$this->swap($list, $left, $right);
			$left++;
		}
		
		return $left;
	}
	
	private function swap($list, $left, $right) {
		
		$temp = $list[$left];
		$list[$left] = $list[$right];
		$list[$right] = $temp;
		
	}
}
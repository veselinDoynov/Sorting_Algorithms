<?php

class InsertSorting {
	
	public function insertSort($list) {
			
		$sortedList = [];
		for($i = 0; $i < count($list); $i++) {
			
			$slot = count($sortedList);
			while($slot > 0) {
				
				if($list[$i] >= $sortedList[$slot -1]){
					break;
				}
				$slot--;
			}
			
			$this->insertElement($sortedList, $slot, $list[$i]);
			
			}	
		return  $sortedList;
	}
	
	
	private function insertElement($sortedList, $position, $element) {
		
		array_splice($sortedList, $position, 0, $element);
	}
	
	
	
}
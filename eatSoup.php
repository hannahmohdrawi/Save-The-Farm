<?php
function eatSoup(){
	// Write your code here:
  global $is_hungry, $has_soup;
  if (!$has_soup){
    echo "You don't have any cooked food to eat!\n";
  }else{
    echo "You have eaten the soup!\n";
    $has_soup = false;
    $is_hungry = false;
  }
  
  
  
  
}
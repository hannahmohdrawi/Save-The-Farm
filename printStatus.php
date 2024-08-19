<?php
// Print Current Status
function printStatus(){
    global $location, $wearing_glasses, $wearing_contacts, $has_mushrooms, $has_soup, $is_hungry, $needs_to_pee;
  
    echo "You are in: $location\n";
  
  // Write your code here:
  
  if($wearing_contacts){
    echo "You are wearing contacts.\n";
  }elseif($wearing_glasses){
    echo "You are wearing glasses.\n";
  }elseif($has_mushrooms){
    echo "You are holding mushrooms";
  }elseif($has_soup){
    echo "You are holding a scalding-hot bowl of mushroom soup.\n";
  }elseif($needs_to_pee){
    echo "You need to pee!\n";
  }elseif($is_hungry){
    echo "You are hungry.\n";
  }else{
    echo "You are well-fed and energetic.\n";
  }
  
}

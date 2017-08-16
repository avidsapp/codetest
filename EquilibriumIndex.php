<?php

# Finds equilibrium index - an index into the sequence such that the sum of elements at lower indices is equal to the sum of elements at higher indices.
function getEquilibriums($arr) {
	$output = array();

  # find sum of the values in the array
  $rightSum = array_sum($arr);

  # sum of left indices = 0
  $leftSum = 0;

  # loop through array, assigning each value of the index to $key and $value
  foreach($arr as $key => $value){
      # the value of the current index is subtracted from the sum of the array (or the sum of the right side of the current index)
      $rightSum -= $value;

      # if the current sum of the left side of the current index is equal to the sum of the right side of the index, add the index to the output array (equilibrium indexes)
      if($leftSum == $rightSum) $output[] = $key;

      # the value of the current index is added to the sum of the left side of the current index as the loop continues
      $leftSum += $value;
  }

  return $output;
}

<?php

/** sanitise and validate the entered number
 */

function validate_integer($p_value_to_check)
{
  $m_checked_value = false;
  $options = array(
    'options' => array(
      'default' => -1, // value to return if the filter fails
      'min_range' => 0
    )
  );
  if (isset($p_value_to_check)) {
    $m_checked_value = filter_var($p_value_to_check, FILTER_VALIDATE_INT, $options);
  }

  return $m_checked_value;
}

function validate_calculation_type($p_type_to_check)
{
  $m_checked_calculation_type = false;
  $m_arr_calculation_type = array('addition', 'subtraction', 'multiplication', 'division');
  if (in_array($p_type_to_check, $m_arr_calculation_type)) {
    $m_checked_calculation_type = $p_type_to_check;
  }

  return $m_checked_calculation_type;
}

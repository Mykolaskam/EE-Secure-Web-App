<?php

function do_calculation($p_validated_value_1, $p_validated_value_2, $p_validated_calculation_type)
{
  $m_calculation_result = null;

  $m_value_1 = $p_validated_value_1;
  $m_value_2 = $p_validated_value_2;
  $m_calculation_type = $p_validated_calculation_type;

  switch ($m_calculation_type) {
    case 'addition':
      $m_calculation_result = $m_value_1 + $m_value_2;
      break;
    case 'subtraction':
      $m_calculation_result = $m_value_1 - $m_value_2;
      break;
    case 'multiplication':
      $m_calculation_result = $m_value_1 * $m_value_2;
      break;
    case 'division':
      $m_calculation_result = $m_value_1 / $m_value_2;
      break;
  }
  return $m_calculation_result;
}

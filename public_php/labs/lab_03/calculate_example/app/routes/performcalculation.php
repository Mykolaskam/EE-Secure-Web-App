<?php
/**
 * Created by PhpStorm.
 * User: slim
 * Date: 13/10/17
 * Time: 10:41
 */

use Slim\Http\Request;
use Slim\Http\Response;

$app->post(
  '/performcalculation',
  function (Request $request, Response $response) use ($app) {

    $file_path = __DIR__ . DIRSEP . '../src/';
    require $file_path . 'calculateValidate.php';
    require $file_path . 'calculateModel.php';

    $params = $request->getParsedBody();

    $f_value_1 = $params['value1'];
    $f_value_2 = $params['value2'];
    $f_calculation_type = $params['calctype'];

    $f_validated_value_1 = validate_integer($f_value_1);
    $f_validated_value_2 = validate_integer($f_value_2);
    $f_validated_calculation_type = validate_calculation_type($f_calculation_type);

    $f_calculation_result = do_calculation($f_validated_value_1, $f_validated_value_2, $f_validated_calculation_type);

    return $this->view->render(
      $response,
      'calculation_result.html.twig',
      [
        'value_1' => $f_value_1,
        'value_2' => $f_value_2,
        'calculation_type' => $f_calculation_type,
        'calculation_result' => $f_calculation_result,
      ]
    );
  }
);

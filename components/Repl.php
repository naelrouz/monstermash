<?php

namespace app\components;
/**
 * Description of View
 *
 * @author nael
 */
class Repl extends \yii\web\View
{
    function render($view, $params = [],$context = null) 
    {
        return str_ireplace('the', 'ЗАМЕНИЛИ ТЕКСТ', parent::render($view, $params, $context));
        //return str_ireplace('the', 'HHH', parent::render($view, $params, $context));
    }
}
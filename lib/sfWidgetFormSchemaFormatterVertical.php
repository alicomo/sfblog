<?php

class sfWidgetFormSchemaFormatterVertical extends sfWidgetFormSchemaFormatter
{
  protected
    $rowFormat       = "%label%<br>%field%%error%
                        %help% %hidden_fields%<br>";
  //protected $errorRowFormat  = "<div class='error-msg'>%errors%</div>";
  
  protected $errorListFormatInARow  = "<div class='error-msg'><ul class=\"error_list\">%errors%  </ul></div>";
  protected $helpFormat      = "<div class='form_help'>%help%</div>";
  protected $decoratorFormat = "<div>\n  %content%</div>";
  
  
//  public function formatRow($label, $field, $errors = array(), $help = '', $hiddenFields = null)
//  {
//    $row = parent::formatRow(
//      $label,
//      $field,
//      $errors,
//      $help,
//      $hiddenFields
//    );
// 
//    return strtr($row, array(
//      '%row_class%' => (count($errors) > 0) ? ' ui-state-error ui-corner-all' : '',
//    ));
//  }
  
  
  
}


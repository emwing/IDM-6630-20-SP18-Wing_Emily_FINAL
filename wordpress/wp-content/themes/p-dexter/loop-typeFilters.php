<?php
  $field_key = "field_5ae2352229840";
  $field = get_field_object($field_key);
  if ($field) {
    foreach ($field['choices'] as $key => $value) {

      $str = strtolower($value);

    echo '<input type="checkbox" class="checkbox single" checked="checked" id="' . $str . 'CB" value=".' . $str . '">';

    echo '<label for="' . $str . 'CB" class="typeBox ' . $str . 'Filter">' . $key . '</label>';
    }
  }
?>

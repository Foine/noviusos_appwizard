'<?= $model['column_prefix'].$field['column_name'] ?>' => array(
    'label' => __(<?= var_export($field['label']) ?>),
    'form' => array(
        'type' => 'checkbox',
        'value' => '1',
        'empty' => '0',
    ),
),
<div class="field_item input_item">
    <div class="labelled_input">
        <label>
            <?= __('Name') ?>
        </label>
        <input type="text" name="name" />
    </div>
    <div class="labelled_input">
        <label>
            <?= __('Type') ?>
        </label>
        <select name="type" class="notransform">
<?php
foreach ($config['fields'] as $key => $val) {
    echo '<option value="'.$key.'">'.$val['label'].'</option>';
}
?>
        </select>
    </div>
    <div class="labelled_input">
        <label>
            <?= __('Is on appdesk ?') ?>
        </label>
        <input type="checkbox" name="is_on_appdesk" />
    </div>
    <div class="labelled_input">
        <label>
            <?= __('Is on crud ?') ?>
        </label>
        <input type="checkbox" name="is_on_crud" />
    </div>
    <div class="crud_options">
        <div class="labelled_input">
            <label>
                <?= __('Is title ?') ?>
            </label>
            <input type="checkbox" name="is_title" />
        </div>
        <div class="labelled_input">
            <label>
                <?= __('Category') ?>
            </label>
            <select name="category" class="category_type notransform">
            </select>
        </div>
    </div>
</div>
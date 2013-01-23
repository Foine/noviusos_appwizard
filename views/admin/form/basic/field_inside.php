<div class="field_item input_item">
    <div class="labelled_input">
        <label>
            <?= __('Label (e.g. Title):') ?>
        </label>
        <input type="text" name="label" class="label_input" />
    </div>
    <div class="labelled_input">
        <label>
            <?= __('Column name (without prefix; e.g. title):') ?>
        </label>
        <input type="text" name="column_name" class="column_input" style="width: 85%;" />
        <input type="checkbox" name="use_title" class="use_title_checkbox" checked/>
        <label class="inline">
            <?= __('Use label') ?>
        </label>

    </div>
    <div class="labelled_input">
        <label>
            <?= __('Type') ?>
        </label>
        <select name="type">
<?php
foreach ($config['fields'] as $key => $val) {
    echo '<option value="'.$key.'">'.$val['label'].'</option>';
}
?>
        </select>
    </div>
    <div class="visible_where">
        <div class="labelled_input">
            <input type="checkbox" name="is_on_appdesk" />
            <label class="inline">
                <?= __('Shows in the main grid of the App Desk') ?>
            </label>
        </div>
        <div class="labelled_input">
            <input type="checkbox" name="is_on_crud" class="is_on_crud_checkbox" checked/>
            <label class="inline">
                <?= __('Shows in the add/update forms') ?>
            </label>
        </div>
        <div class="crud_options">
            <div class="labelled_input">
                <input type="checkbox" name="is_title" class="is_title_checkbox" />
                <label class="inline">
                    <?= __('Is the form title') ?>
                </label>
            </div>
            <div class="crud_other_options">
                <div class="labelled_input">
                    <label>
                        <?= __('Field group') ?>
                    </label>
                    <select name="category" class="category_type">
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
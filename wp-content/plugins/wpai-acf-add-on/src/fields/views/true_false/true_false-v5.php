<div class="switcher-target-is_multiple_field_value_<?php echo str_replace(array('[',']'), '', $field_name);?>_<?php echo $field['key'];?>_yes">
    <div class="input sub_input">
        <div class="input">
            <?php
                $field_class = 'acf_field_' . $field['type'];
                $field['other_choice'] = false;
                $tmp_key = $field['key'];
                $field['key'] = 'multiple_value'. $field_name .'[' . $field['key'] . ']';
                $field['value'] = $current_multiple_value;
                $field['prefix'] = '';
                $field['message'] = empty($field['ui_on_text']) ? 'Yes' : $field['ui_on_text'];
                $field['ui'] = 0;
                acf_render_field( $field );
                $field['key'] = $tmp_key;
            ?>
        </div>
    </div>
</div>
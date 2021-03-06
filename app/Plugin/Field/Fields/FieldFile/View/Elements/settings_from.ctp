<?php
    echo $this->Form->input('Field.settings.extensions',
        array(
            'type' => 'text',
            'label' => __d('field_file', 'Allowed extensions')
        )
    );
?>
<em><?php echo __d('field_file', 'Comma separated. i.e.: jpg,gif,png'); ?></em>

<?php
    echo $this->Form->input('Field.settings.multi',
        array(
            'type' => 'select',
            'options' => array(1 => 1, 2 => 2, 3 => 3, 4 => 4, 5 => 5, 6 => 6, 7 => 7, 8 => 8, 9 => 9, 10 => 10),
            'label' => __d('field_file', 'Number of files')
        )
    );
?>
<em><?php echo __d('field_file', 'Maximum number of files users can upload for this field.'); ?></em>

<?php
    echo $this->Form->input('Field.settings.upload_folder',
        array(
            'type' => 'text',
            'label' => __d('field_file', 'Upload folder')
        )
    );
?>
<em><?php echo __d('field_file', 'Optional subdirectory within the upload destination where files will be stored. Do not include preceding or trailing slashes.'); ?></em>

<?php
    echo $this->Form->input('Field.settings.description',
        array(
            'type' => 'checkbox',
            'label' => __d('field_file', 'Enable Description field')
        )
    );
?>
<em><?php echo __d('field_file', 'The description field allows users to enter a description about the uploaded file.'); ?></em>
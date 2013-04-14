<div class="people form">
<?php echo $this->Form->create('Person'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Person'); ?></legend>
	<?php
		echo $this->Form->input('firstname', array('required' => false));
		echo $this->Form->input('lastname', array('required' => false));
		echo $this->Form->input('biography', array(
            'required' => false,
            'class' => 'ckeditor'
        ));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List People'), array('action' => 'index')); ?></li>
	</ul>
</div>

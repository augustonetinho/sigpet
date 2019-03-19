<div class="clienteTelefones form">
<?php echo $this->Form->create('ClienteTelefone'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cliente Telefone'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('CLIENTE_ID');
		echo $this->Form->input('TIPO_TELEFONE');
		echo $this->Form->input('NUMERO_TELEFONE');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ClienteTelefone.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('ClienteTelefone.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Cliente Telefones'), array('action' => 'index')); ?></li>
	</ul>
</div>

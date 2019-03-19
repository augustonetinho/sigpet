<div class="clientes form">
<?php echo $this->Form->create('Cliente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cliente'); ?></legend>
	<?php
		echo $this->Form->input('ID');
		echo $this->Form->input('NOME_CLIENTE');
		echo $this->Form->input('CPF_CLIENTE');
		echo $this->Form->input('RG_CLIENTE');
		echo $this->Form->input('DT_NASCIMENTO');
		echo $this->Form->input('DT_CADASTRO');
		echo $this->Form->input('TELEFONE');
		echo $this->Form->input('EMAIL');
		echo $this->Form->input('TIPO_CLIENTE');
		echo $this->Form->input('CNPJ_CLIENTE');
		echo $this->Form->input('REFERENCIA_CLIENTE');
		echo $this->Form->input('CELULAR');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cliente.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Cliente.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?></li>
	</ul>
</div>

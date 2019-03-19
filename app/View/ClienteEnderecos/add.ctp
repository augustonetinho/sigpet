<div class="clienteEnderecos form">
<?php echo $this->Form->create('ClienteEndereco'); ?>
	<fieldset>
		<legend><?php echo __('Add Cliente Endereco'); ?></legend>
	<?php
		echo $this->Form->input('CODIGO_ENDERECO');
		echo $this->Form->input('CLIENTE_ID');
		echo $this->Form->input('LOGRADOURO_ENDERECO');
		echo $this->Form->input('COMPLEMENTO_ENDERECO');
		echo $this->Form->input('CEP_ENDERECO');
		echo $this->Form->input('BAIRRO_ENDERECO');
		echo $this->Form->input('CIDADE_ENDERECO');
		echo $this->Form->input('UF_ENEDERECO');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cliente Enderecos'), array('action' => 'index')); ?></li>
	</ul>
</div>

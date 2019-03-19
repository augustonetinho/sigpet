<div class="clienteEnderecos view">
<h2><?php echo __('Cliente Endereco'); ?></h2>
	<dl>
		<dt><?php echo __('CODIGO ENDERECO'); ?></dt>
		<dd>
			<?php echo h($clienteEndereco['ClienteEndereco']['CODIGO_ENDERECO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CLIENTE ID'); ?></dt>
		<dd>
			<?php echo h($clienteEndereco['ClienteEndereco']['CLIENTE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('LOGRADOURO ENDERECO'); ?></dt>
		<dd>
			<?php echo h($clienteEndereco['ClienteEndereco']['LOGRADOURO_ENDERECO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('COMPLEMENTO ENDERECO'); ?></dt>
		<dd>
			<?php echo h($clienteEndereco['ClienteEndereco']['COMPLEMENTO_ENDERECO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CEP ENDERECO'); ?></dt>
		<dd>
			<?php echo h($clienteEndereco['ClienteEndereco']['CEP_ENDERECO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('BAIRRO ENDERECO'); ?></dt>
		<dd>
			<?php echo h($clienteEndereco['ClienteEndereco']['BAIRRO_ENDERECO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CIDADE ENDERECO'); ?></dt>
		<dd>
			<?php echo h($clienteEndereco['ClienteEndereco']['CIDADE_ENDERECO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('UF ENEDERECO'); ?></dt>
		<dd>
			<?php echo h($clienteEndereco['ClienteEndereco']['UF_ENEDERECO']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente Endereco'), array('action' => 'edit', $clienteEndereco['ClienteEndereco']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente Endereco'), array('action' => 'delete', $clienteEndereco['ClienteEndereco']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clienteEndereco['ClienteEndereco']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Cliente Enderecos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente Endereco'), array('action' => 'add')); ?> </li>
	</ul>
</div>

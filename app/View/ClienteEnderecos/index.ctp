<div class="clienteEnderecos index">
	<h2><?php echo __('Cliente Enderecos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('CODIGO_ENDERECO'); ?></th>
			<th><?php echo $this->Paginator->sort('CLIENTE_ID'); ?></th>
			<th><?php echo $this->Paginator->sort('LOGRADOURO_ENDERECO'); ?></th>
			<th><?php echo $this->Paginator->sort('COMPLEMENTO_ENDERECO'); ?></th>
			<th><?php echo $this->Paginator->sort('CEP_ENDERECO'); ?></th>
			<th><?php echo $this->Paginator->sort('BAIRRO_ENDERECO'); ?></th>
			<th><?php echo $this->Paginator->sort('CIDADE_ENDERECO'); ?></th>
			<th><?php echo $this->Paginator->sort('UF_ENEDERECO'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clienteEnderecos as $clienteEndereco): ?>
	<tr>
		<td><?php echo h($clienteEndereco['ClienteEndereco']['CODIGO_ENDERECO']); ?>&nbsp;</td>
		<td><?php echo h($clienteEndereco['ClienteEndereco']['CLIENTE_ID']); ?>&nbsp;</td>
		<td><?php echo h($clienteEndereco['ClienteEndereco']['LOGRADOURO_ENDERECO']); ?>&nbsp;</td>
		<td><?php echo h($clienteEndereco['ClienteEndereco']['COMPLEMENTO_ENDERECO']); ?>&nbsp;</td>
		<td><?php echo h($clienteEndereco['ClienteEndereco']['CEP_ENDERECO']); ?>&nbsp;</td>
		<td><?php echo h($clienteEndereco['ClienteEndereco']['BAIRRO_ENDERECO']); ?>&nbsp;</td>
		<td><?php echo h($clienteEndereco['ClienteEndereco']['CIDADE_ENDERECO']); ?>&nbsp;</td>
		<td><?php echo h($clienteEndereco['ClienteEndereco']['UF_ENEDERECO']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $clienteEndereco['ClienteEndereco']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $clienteEndereco['ClienteEndereco']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $clienteEndereco['ClienteEndereco']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clienteEndereco['ClienteEndereco']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Cliente Endereco'), array('action' => 'add')); ?></li>
	</ul>
</div>

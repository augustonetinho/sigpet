<div class="clientes index">
	<h2><?php echo __('Clientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('ID'); ?></th>
			<th><?php echo $this->Paginator->sort('NOME_CLIENTE'); ?></th>
			<th><?php echo $this->Paginator->sort('CPF_CLIENTE'); ?></th>
			<th><?php echo $this->Paginator->sort('RG_CLIENTE'); ?></th>
			<th><?php echo $this->Paginator->sort('DT_NASCIMENTO'); ?></th>
			<th><?php echo $this->Paginator->sort('DT_CADASTRO'); ?></th>
			<th><?php echo $this->Paginator->sort('TELEFONE'); ?></th>
			<th><?php echo $this->Paginator->sort('EMAIL'); ?></th>
			<th><?php echo $this->Paginator->sort('TIPO_CLIENTE'); ?></th>
			<th><?php echo $this->Paginator->sort('CNPJ_CLIENTE'); ?></th>
			<th><?php echo $this->Paginator->sort('REFERENCIA_CLIENTE'); ?></th>
			<th><?php echo $this->Paginator->sort('CELULAR'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($clientes as $cliente): ?>
	<tr>
		<td><?php echo h($cliente['Cliente']['ID']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['NOME_CLIENTE']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['CPF_CLIENTE']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['RG_CLIENTE']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['DT_NASCIMENTO']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['DT_CADASTRO']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['TELEFONE']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['EMAIL']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['TIPO_CLIENTE']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['CNPJ_CLIENTE']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['REFERENCIA_CLIENTE']); ?>&nbsp;</td>
		<td><?php echo h($cliente['Cliente']['CELULAR']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cliente['Cliente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cliente['Cliente']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cliente['Cliente']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?></li>
	</ul>
</div>

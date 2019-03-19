<div class="clienteTelefones view">
<h2><?php echo __('Cliente Telefone'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($clienteTelefone['ClienteTelefone']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CLIENTE ID'); ?></dt>
		<dd>
			<?php echo h($clienteTelefone['ClienteTelefone']['CLIENTE_ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TIPO TELEFONE'); ?></dt>
		<dd>
			<?php echo h($clienteTelefone['ClienteTelefone']['TIPO_TELEFONE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NUMERO TELEFONE'); ?></dt>
		<dd>
			<?php echo h($clienteTelefone['ClienteTelefone']['NUMERO_TELEFONE']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente Telefone'), array('action' => 'edit', $clienteTelefone['ClienteTelefone']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente Telefone'), array('action' => 'delete', $clienteTelefone['ClienteTelefone']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $clienteTelefone['ClienteTelefone']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Cliente Telefones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente Telefone'), array('action' => 'add')); ?> </li>
	</ul>
</div>

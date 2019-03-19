<div class="clientes view">
<h2><?php echo __('Cliente'); ?></h2>
	<dl>
		<dt><?php echo __('ID'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['ID']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('NOME CLIENTE'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['NOME_CLIENTE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CPF CLIENTE'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['CPF_CLIENTE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('RG CLIENTE'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['RG_CLIENTE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DT NASCIMENTO'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['DT_NASCIMENTO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DT CADASTRO'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['DT_CADASTRO']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TELEFONE'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['TELEFONE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('EMAIL'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['EMAIL']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TIPO CLIENTE'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['TIPO_CLIENTE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CNPJ CLIENTE'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['CNPJ_CLIENTE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('REFERENCIA CLIENTE'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['REFERENCIA_CLIENTE']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('CELULAR'); ?></dt>
		<dd>
			<?php echo h($cliente['Cliente']['CELULAR']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cliente'), array('action' => 'edit', $cliente['Cliente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cliente'), array('action' => 'delete', $cliente['Cliente']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cliente['Cliente']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Clientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cliente'), array('action' => 'add')); ?> </li>
	</ul>
</div>

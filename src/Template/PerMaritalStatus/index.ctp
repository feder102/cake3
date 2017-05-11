<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Per Marital Status'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perMaritalStatus index large-9 medium-8 columns content">
    <h3><?= __('Per Marital Status') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_marital_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perMaritalStatus as $perMaritalStatus): ?>
            <tr>
                <td><?= $this->Number->format($perMaritalStatus->id_marital_status) ?></td>
                <td><?= h($perMaritalStatus->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $perMaritalStatus->id_marital_status]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $perMaritalStatus->id_marital_status]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $perMaritalStatus->id_marital_status], ['confirm' => __('Are you sure you want to delete # {0}?', $perMaritalStatus->id_marital_status)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

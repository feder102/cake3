<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Add Add Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="addAddType index large-9 medium-8 columns content">
    <h3><?= __('Add Add Type') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_add_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($addAddType as $addAddType): ?>
            <tr>
                <td><?= $this->Number->format($addAddType->id_add_type) ?></td>
                <td><?= h($addAddType->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $addAddType->id_add_type]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $addAddType->id_add_type]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $addAddType->id_add_type], ['confirm' => __('Are you sure you want to delete # {0}?', $addAddType->id_add_type)]) ?>
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

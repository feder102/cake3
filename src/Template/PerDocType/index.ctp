<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Per Doc Type'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="perDocType index large-9 medium-8 columns content">
    <h3><?= __('Per Doc Type') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_doc_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($perDocType as $perDocType): ?>
            <tr>
                <td><?= $this->Number->format($perDocType->id_doc_type) ?></td>
                <td><?= h($perDocType->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $perDocType->id_doc_type]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $perDocType->id_doc_type]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $perDocType->id_doc_type], ['confirm' => __('Are you sure you want to delete # {0}?', $perDocType->id_doc_type)]) ?>
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

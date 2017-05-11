<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Aso Per Add'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="asoPerAdd index large-9 medium-8 columns content">
    <h3><?= __('Aso Per Add') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_person') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_add') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_add_type') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($asoPerAdd as $asoPerAdd): ?>
            <tr>
                <td><?= $this->Number->format($asoPerAdd->id_person) ?></td>
                <td><?= $this->Number->format($asoPerAdd->id_add) ?></td>
                <td><?= $this->Number->format($asoPerAdd->id_add_type) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $asoPerAdd->id_person]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $asoPerAdd->id_person]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $asoPerAdd->id_person], ['confirm' => __('Are you sure you want to delete # {0}?', $asoPerAdd->id_person)]) ?>
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

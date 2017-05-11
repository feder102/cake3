<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tel Phone Company'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="telPhoneCompany index large-9 medium-8 columns content">
    <h3><?= __('Tel Phone Company') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_phone_company') ?></th>
                <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($telPhoneCompany as $telPhoneCompany): ?>
            <tr>
                <td><?= $this->Number->format($telPhoneCompany->id_phone_company) ?></td>
                <td><?= h($telPhoneCompany->value) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $telPhoneCompany->id_phone_company]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $telPhoneCompany->id_phone_company]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $telPhoneCompany->id_phone_company], ['confirm' => __('Are you sure you want to delete # {0}?', $telPhoneCompany->id_phone_company)]) ?>
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

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tel Phone Company'), ['action' => 'edit', $telPhoneCompany->id_phone_company]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tel Phone Company'), ['action' => 'delete', $telPhoneCompany->id_phone_company], ['confirm' => __('Are you sure you want to delete # {0}?', $telPhoneCompany->id_phone_company)]) ?> </li>
        <li><?= $this->Html->link(__('List Tel Phone Company'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tel Phone Company'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="telPhoneCompany view large-9 medium-8 columns content">
    <h3><?= h($telPhoneCompany->id_phone_company) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($telPhoneCompany->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Phone Company') ?></th>
            <td><?= $this->Number->format($telPhoneCompany->id_phone_company) ?></td>
        </tr>
    </table>
</div>

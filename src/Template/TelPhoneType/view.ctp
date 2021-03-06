<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tel Phone Type'), ['action' => 'edit', $telPhoneType->id_phone_type]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tel Phone Type'), ['action' => 'delete', $telPhoneType->id_phone_type], ['confirm' => __('Are you sure you want to delete # {0}?', $telPhoneType->id_phone_type)]) ?> </li>
        <li><?= $this->Html->link(__('List Tel Phone Type'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tel Phone Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="telPhoneType view large-9 medium-8 columns content">
    <h3><?= h($telPhoneType->id_phone_type) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($telPhoneType->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Phone Type') ?></th>
            <td><?= $this->Number->format($telPhoneType->id_phone_type) ?></td>
        </tr>
    </table>
</div>

<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tel Phone'), ['action' => 'edit', $telPhone->id_phone]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tel Phone'), ['action' => 'delete', $telPhone->id_phone], ['confirm' => __('Are you sure you want to delete # {0}?', $telPhone->id_phone)]) ?> </li>
        <li><?= $this->Html->link(__('List Tel Phone'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tel Phone'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="telPhone view large-9 medium-8 columns content">
    <h3><?= h($telPhone->id_phone) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($telPhone->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Phone') ?></th>
            <td><?= $this->Number->format($telPhone->id_phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Person') ?></th>
            <td><?= $this->Number->format($telPhone->id_person) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Phone Type') ?></th>
            <td><?= $this->Number->format($telPhone->id_phone_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Phone Company') ?></th>
            <td><?= $this->Number->format($telPhone->id_phone_company) ?></td>
        </tr>
    </table>
</div>

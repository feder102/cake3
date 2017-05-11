<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Per Marital Status'), ['action' => 'edit', $perMaritalStatus->id_marital_status]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Per Marital Status'), ['action' => 'delete', $perMaritalStatus->id_marital_status], ['confirm' => __('Are you sure you want to delete # {0}?', $perMaritalStatus->id_marital_status)]) ?> </li>
        <li><?= $this->Html->link(__('List Per Marital Status'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Per Marital Status'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perMaritalStatus view large-9 medium-8 columns content">
    <h3><?= h($perMaritalStatus->id_marital_status) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($perMaritalStatus->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Marital Status') ?></th>
            <td><?= $this->Number->format($perMaritalStatus->id_marital_status) ?></td>
        </tr>
    </table>
</div>

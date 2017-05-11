<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Per Condition'), ['action' => 'edit', $perCondition->id_condition]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Per Condition'), ['action' => 'delete', $perCondition->id_condition], ['confirm' => __('Are you sure you want to delete # {0}?', $perCondition->id_condition)]) ?> </li>
        <li><?= $this->Html->link(__('List Per Condition'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Per Condition'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perCondition view large-9 medium-8 columns content">
    <h3><?= h($perCondition->id_condition) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($perCondition->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Condition') ?></th>
            <td><?= $this->Number->format($perCondition->id_condition) ?></td>
        </tr>
    </table>
</div>

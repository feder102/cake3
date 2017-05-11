<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Add Add Type'), ['action' => 'edit', $addAddType->id_add_type]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Add Add Type'), ['action' => 'delete', $addAddType->id_add_type], ['confirm' => __('Are you sure you want to delete # {0}?', $addAddType->id_add_type)]) ?> </li>
        <li><?= $this->Html->link(__('List Add Add Type'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Add Add Type'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="addAddType view large-9 medium-8 columns content">
    <h3><?= h($addAddType->id_add_type) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Value') ?></th>
            <td><?= h($addAddType->value) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Add Type') ?></th>
            <td><?= $this->Number->format($addAddType->id_add_type) ?></td>
        </tr>
    </table>
</div>

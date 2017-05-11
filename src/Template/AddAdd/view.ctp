<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Add Add'), ['action' => 'edit', $addAdd->id_add]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Add Add'), ['action' => 'delete', $addAdd->id_add], ['confirm' => __('Are you sure you want to delete # {0}?', $addAdd->id_add)]) ?> </li>
        <li><?= $this->Html->link(__('List Add Add'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Add Add'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="addAdd view large-9 medium-8 columns content">
    <h3><?= h($addAdd->id_add) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Street') ?></th>
            <td><?= h($addAdd->street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= h($addAdd->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cp') ?></th>
            <td><?= h($addAdd->cp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('District') ?></th>
            <td><?= h($addAdd->district) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Add') ?></th>
            <td><?= $this->Number->format($addAdd->id_add) ?></td>
        </tr>
    </table>
</div>

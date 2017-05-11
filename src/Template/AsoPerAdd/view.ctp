<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aso Per Add'), ['action' => 'edit', $asoPerAdd->id_person]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aso Per Add'), ['action' => 'delete', $asoPerAdd->id_person], ['confirm' => __('Are you sure you want to delete # {0}?', $asoPerAdd->id_person)]) ?> </li>
        <li><?= $this->Html->link(__('List Aso Per Add'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aso Per Add'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="asoPerAdd view large-9 medium-8 columns content">
    <h3><?= h($asoPerAdd->id_person) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id Person') ?></th>
            <td><?= $this->Number->format($asoPerAdd->id_person) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Add') ?></th>
            <td><?= $this->Number->format($asoPerAdd->id_add) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Add Type') ?></th>
            <td><?= $this->Number->format($asoPerAdd->id_add_type) ?></td>
        </tr>
    </table>
</div>

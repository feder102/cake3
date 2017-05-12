<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Per Person'), ['action' => 'edit', $perPerson->id_person]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Per Person'), ['action' => 'delete', $perPerson->id_person], ['confirm' => __('Are you sure you want to delete # {0}?', $perPerson->id_person)]) ?> </li>
        <li><?= $this->Html->link(__('List Per Person'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Per Person'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perPerson view large-9 medium-8 columns content">
    <h3><?= h($perPerson->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($perPerson->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surname') ?></th>
            <td><?= h($perPerson->surname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Person') ?></th>
            <td><?= $this->Number->format($perPerson->id_person) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Doc Type') ?></th>
            <td><?= $this->Number->format($perPerson->id_doc_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doc Num') ?></th>
            <td><?= $this->Number->format($perPerson->doc_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Gender') ?></th>
            <td><?= $this->Number->format($perPerson->id_gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Nal') ?></th>
            <td><?= $this->Number->format($perPerson->id_nal) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Marital Status') ?></th>
            <td><?= $this->Number->format($perPerson->id_marital_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Condition') ?></th>
            <td><?= $this->Number->format($perPerson->id_condition) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Date') ?></th>
            <td><?= h($perPerson->birth_date) ?></td>
        </tr>
    </table>
</div>

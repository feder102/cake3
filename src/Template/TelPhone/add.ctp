<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tel Phone'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="telPhone form large-9 medium-8 columns content">
    <?= $this->Form->create($telPhone) ?>
    <fieldset>
        <legend><?= __('Add Tel Phone') ?></legend>
        <?php
            echo $this->Form->control('id_person');
            echo $this->Form->control('value');
            echo $this->Form->control('id_phone_type');
            echo $this->Form->control('id_phone_company');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

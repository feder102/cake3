<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Add Add Type'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="addAddType form large-9 medium-8 columns content">
    <?= $this->Form->create($addAddType) ?>
    <fieldset>
        <legend><?= __('Add Add Add Type') ?></legend>
        <?php
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

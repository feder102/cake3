<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $addAddType->id_add_type],
                ['confirm' => __('Are you sure you want to delete # {0}?', $addAddType->id_add_type)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Add Add Type'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="addAddType form large-9 medium-8 columns content">
    <?= $this->Form->create($addAddType) ?>
    <fieldset>
        <legend><?= __('Edit Add Add Type') ?></legend>
        <?php
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

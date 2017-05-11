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
                ['action' => 'delete', $perGender->per_gender],
                ['confirm' => __('Are you sure you want to delete # {0}?', $perGender->per_gender)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Per Gender'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="perGender form large-9 medium-8 columns content">
    <?= $this->Form->create($perGender) ?>
    <fieldset>
        <legend><?= __('Edit Per Gender') ?></legend>
        <?php
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

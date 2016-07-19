<?php if($post->type == 'link'): ?>
    <?= $this->Html->icon('anchor');?><span class="sr-only"><?= __('Link');?></span>
<?php else: ?>
    <?= $this->Html->icon('file-word-o');?><span class="sr-only"><?= __('Text');?></span>
<?php endif; ?>

<div class="row">
    <div class="posts index col-lg-9 col-md-8 content">
        <h2><?= h($post->title) ?></h2>

        <div class="post-meta">
            <?php if($post->created!=$post->modified):?>
                <b><?= __('Modification date:'); ?>: </b>
                <?= h($post->modified) ?>
            <?php endif; ?>
            <b><?= __('Creation date:'); ?> </b>
            <?= h($post->created) ?>
            <?php if($post->has('user')):?>
                <b><?= __('Author:') ?></b>
                <?= $post->user->display_name; ?>
            <?php endif; ?>
        </div>
        <?= $post->content ?>

    </div>
</div>


<div class="row">
    <div class="posts index col-lg-9 col-md-8 content">
        <?php foreach ($posts as $post): ?>
            <div class="panel <?= ($post->state == 'pinned') ? 'panel-primary' : 'panel-default';?>">
                <div class="panel-heading">
                    <h2 class="panel-title">
                        <?= $this->element('post-type-icon', ['post' => $post]); ?>
                        <?= $this->Html->link($post->title, ['action' => 'view', $post->slug]) ?>
                    </h2>
                </div>
                <div class="panel-body">
                    <div class="post-meta">
                        <b><?= __('Creation date:'); ?> </b>
                        <?= h($post->created) ?>
                    </div>
                    <?php
                    $link_more = $this->Html->link(
                        __('Read more') . ' <span class="sr-only">' . h($post->title) . '</span>' ,
                        ['action' => 'view', $post->slug],
                        ['escape' => false]); ?>
                    <?= $this->Text->truncate($post->content, 750, ['exact' => false, 'ellipsis' => ' ' . $link_more]) ?>

                </div>
            </div>
        <?php endforeach; ?>
        <nav class="paginator text-center">
            <?= $this->Paginator->numbers([
                'prev' => 'i:chevron-left ' . __('previous'),
                'next' =>  __('next') . ' i:chevron-right',
                ]) ?>
        </nav>
    </div>
</div>

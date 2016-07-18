<div class="row">
    <div class="posts index col-lg-9 col-md-8 content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2 class="panel-title"><?= h($post->title) ?></h2>
            </div>
            <table class="table table-hover">
                <tbody>
                    <?php if($post->isHasBennModifited()):?>
                        <tr>
                            <th scope="row"><?= __('Modification date:'); ?></th>
                            <td><?= h($post->modified) ?></td>
                        </tr>
                    <?php endif; ?>
                    <tr>
                        <th scope="row"><?= __('Creation date:'); ?> </th>
                        <td><?= h($post->created) ?></td>
                    </tr>
                    <?php if($post->has('user')):?>
                    <tr>
                        <th scole="row"><?= __('Author:') ?></th>
                        <td><?= $post->user->display_name; ?></td>
                    </tr>
                    <?php endif; ?>
                </tbody>
            </table>
            <div class="panel-body">
                <?= $post->content ?>
            </div>
        </div>
    </div>
</div>

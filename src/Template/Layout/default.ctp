<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Rodzić po ludzku';
?>
<?php
if(isset($title)){
    $this->start('title');
        echo $title;
    $this->end();
}
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('/css/style.css') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css') ?>
    <link rel="alternate" type="application/rss+xml" title="<?= $cakeDescription ?> Feed" href="<?= $this->Url->build(['_name' => 'feed', '_ext' => 'rss', '_full' => true]);?>">
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <?php if($this->request->session()->read('Auth.User.id')): ?>
        <?= $this->Navbar->create(__('Petition'), ['responsive' => true]) ?>
            <?= $this->Navbar->beginMenu() ?>
                <?= $this->Navbar->link(__('Sign'), ['controller' => 'Petition', 'action' => 'index']) ?>
                <?php if($this->request->session()->read('Auth.User.id')): ?>
                    <?= $this->Navbar->link(__('Signatures'), ['controller' => 'Signatures', 'action' => 'index']) ?>
                    <?= $this->Navbar->link(__('Posts'), ['controller' => 'Posts', 'action' => 'index']) ?>
                    <?= $this->Navbar->link(__('Users'), ['controller' => 'Users', 'action' => 'index']) ?>
                <?php endif; ?>
            <?= $this->Navbar->endMenu() ?>
            <?= $this->Navbar->beginMenu(['class' => 'navbar-right']) ?>
                <?php if($this->request->session()->read('Auth.User.id')): ?>
                    <?= $this->Navbar->link(__('Logout'), ['_name' => 'auth.logout']) ?>
                <?php else: ?>
                    <?= $this->Navbar->link(__('Login'), ['_name' => 'auth.login']) ?>
                <?php endif; ?>
            <?= $this->Navbar->endMenu() ?>
        <?= $this->Navbar->end() ?>
    <?php endif; ?>
    <div class="header">
        <div class="container">
            <div class="top">
                <div class="top-logo">
                    <a href="/">
                        <img src="http://www.rodzicpoludzku.pl/templates/frpl/images/logo_frpl_255x55.png" alt="" />
                    </a>
                </div>
            </div>
            <nav class="main-menu">
                <ul>
                    <li>
                        <?= $this->Html->link(__('Sign'), ['controller' => 'Petition', 'action' => 'index']) ?>
                    </li>
                    <li>
                        <?php
                        // <?= $this->Html->link(__('Signatures'), ['controller' => 'Petition', 'action' => 'petition.list'])
                        ?>
                        <a href="/list"><?php echo __('Signatures'); ?></a>
                    </li>
                    <li>
                        <?= $this->Html->link(__('Aktualności'), ['controller' => 'Blog', 'action' => 'index']) ?>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="main-content">
                <div class="page-header">
                    <h1><?= $this->fetch('title') ?></h1>
                </div>
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </div>
    </div>
    <footer>
    </footer>
    <?= $this->Html->script('https://code.jquery.com/jquery-2.2.4.js') ?>
    <?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js') ?>

    <?= $this->fetch('script') ?>
</body>
</html>

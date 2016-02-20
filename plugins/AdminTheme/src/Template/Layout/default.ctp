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
?>

<!doctype html>
<html>
<head>
    <?= $this->Html->charset(); ?>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        <?= $this->fetch('title'); ?>
    </title>
    <?= $this->Html->meta('icon'); ?>
    <?= $this->fetch('meta'); ?>
    <?= $this->Html->css('bootstrap/bootstrap.min'); ?>
    <?= $this->Html->css('bootstrap-datetimepicker/bootstrap-datetimepicker.min'); ?>
    <?= $this->Html->css('iCheck/all.css'); ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css'); ?>
    <?= $this->Html->css('AdminLTE'); ?>
    <?= $this->Html->css('skins/_all-skins.min'); ?>
    <?= $this->Html->script('jQuery/jQuery-2.1.4.min'); ?>
    <?= $this->Html->script('bootstrap/bootstrap.min'); ?>
    <?= $this->Html->script('momentjs/moment-with-locales.min'); ?>
    <?= $this->Html->script('bootstrap-datetimepicker/bootstrap-datetimepicker.min'); ?>
    <?= $this->Html->script('iCheck/iCheck.min'); ?>
    <?= $this->Html->script('slimScroll/jquery.slimscroll'); ?>
    <?= $this->Html->script('AdminLTE/app'); ?>
    <?= $this->fetch('css'); ?>
    <?= $this->fetch('script'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?= $this->element('top_menu'); ?>
        <?= $this->element('left_sidebar'); ?>

        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Control panel
                </h1>
            </section>

            <section class="content">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </section>
        </div>

        <footer class="main-footer">
            <strong>Copyright &copy; <?= date('Y'); ?> All rights reserved.
        </footer>
    </div>
</body>
</html>

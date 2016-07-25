<?php

include dirname(__DIR__) . '/config/bootstrap.php';

Cake\Console\ShellDispatcher::run([__FILE__, 'plugin', 'assets', 'copy']);
Cake\Console\ShellDispatcher::run([__FILE__, 'migrations', 'migrate']);
Cake\Console\ShellDispatcher::run([__FILE__, 'orm_cache', 'clear']);

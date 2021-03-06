<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InstallAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '安装 Admin 后台';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('key:generate');
        // 删除所有表
        $this->call('migrate:fresh');
        // 迁移文件
        $this->call('migrate');
        // 填充数据库
        $this->call('db:seed');
    }
}

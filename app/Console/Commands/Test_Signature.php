<?php

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class Test_Signature extends Command
{
    protected $signature = 'test_signature:creat';

    protected $description = 'Create new posst';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        DB::table('signature')->insert([
            'title' => 'Nguyen Thi ha',
            'content' => 'Day la noi dung bai viet'
        ]);
    }

}

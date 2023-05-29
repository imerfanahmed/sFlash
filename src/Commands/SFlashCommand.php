<?php

namespace Eru\SFlash\Commands;

use Illuminate\Console\Command;
use Illuminate\Console\ConfirmableTrait;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
class SFlashCommand extends Command
{
    // public $signature = 'sflash';

    // public $description = 'My command';

    // public function handle(): int
    // {
    //     $this->comment('All done');

    //     return self::SUCCESS;
    // }

    use ConfirmableTrait;
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'session:flush';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Flush all user sessions';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        if ($this->ask("Do You really want to run this command?")) {
            $driver = config('session.driver');
            $method_name = 'clean' . ucfirst($driver);
            if (method_exists($this, $method_name)) {
                try {
                    $this->$method_name();
                    $this->comment('Session Data Flushed Successfully.');
                } catch (\Exception $e) {
                    $this->comment($e->getMessage());
                }
            } else {
                $this->comment("Unable to clean the sessions of the driver '{$driver}'.");
            }
        }
    }
    //file
    protected function cleanFile()
    {
        $directory = config('session.files');
        $ignoreFiles = ['.gitignore', '.', '..'];

        $files = scandir($directory);

        foreach ($files as $file) {
            if (!in_array($file, $ignoreFiles)) {
                unlink($directory . '/' . $file);
            }
        }
    }
    //database
    protected function cleanDatabase()
    {
        $table = config('session.table');
        DB::table($table)->truncate();
    }
    //cookie
//    protected function cleanCookie()
//    {
//
//        Cache::clear();
//    }
//    //Redis
//    protected function cleanRedis()
//    {
//        Cache::clear();
//    }
//    //Memcached
//    protected function cleanMemcached()
//    {
//        Cache::clear();
//    }
}

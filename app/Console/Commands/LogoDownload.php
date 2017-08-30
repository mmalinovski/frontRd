<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Station;
use App\Models\RadioDetail;


class LogoDownload extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'LogoDownload';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Downloads logos from radio.net';

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
        $this->info("Ready to download logos!");
        $counter = 0;
        while ($logos = RadioDetail::whereNull('logoStatus')->first()) {
            $counter ++;
            $logos->logoStatus = 'Downloading';
            $logos->save();
            echo "\n";
            echo 'Logo no.'.$counter."\n";
            echo $logos->logo."\n";
            echo $logos->station->slug."\n";
            $path = storage_path().'/logos/'.$logos->station->slug.'.png';
            $logo = $logos->logo;
            if(empty($logo)) {
                echo 'Failed to get url';
            } else {
                file_put_contents($path, @fopen($logo, 'r'));
            
                $logos->logoStatus = 'Done';
                $logos->save();
                sleep(2);
            }

        }
        echo 'Finished, all done!, no more logos!';

    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Station;
use App\Models\RadioDetail;


class CheckStream extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'CheckStream';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Checks the streams if valid or not';

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
        $this->info("Ready for checking url!");
        $counter = 0;
        while($url = Station::whereNull('status')->first()) {
            $counter ++;
            $url->status = 'Checking';
            $url->save();
            echo "\n";
            echo 'Url no.'.$counter."\n";
            echo $url->streams[0]->listenurl."\n";

            $urlCheck = $url->streams->listenurl;
            $urlHeaders = @get_headers($urlCheck);
            if($urlHeaders === false) return false;
            foreach($urlHeaders as $header) { // parse all headers:
                // corrects $url when 301/302 redirect(s) lead(s) to 200:
                if(preg_match("/^Location: (http.+)$/",$header,$m)) $urlCheck=$m[1]; 
                // grabs the last $header $code, in case of redirect(s):
                if(preg_match("/^HTTP.+\s(\d\d\d)\s/",$header,$m)) $code=$m[1]; 
              } // End foreach...
              if($code==200) {
                $url->active = '1';
                echo 'Url uredu.';

              } else {
                $url->active = '0';
                echo 'Url ne e uredu.';
              }

                $url->status = 'Done';
                $url->save();


        }


    }
}



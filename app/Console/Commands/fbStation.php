<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Station;
use App\Models\RadioDetail;


class fbStation extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fbStation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Facebook Station Command';

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
        $station = Station::where('active', 1)->orderByRaw("RAND()")->first();
        print_r($station);
        $data['message'] = 'Nextuner Station of the day';
        $data['link'] = $station->url;

        print_r($data);


        $page_id = 'nextuner';

        $data['access_token'] = 'EAAMTbKaoonoBAA7S2F145Qj2QGJ5sgyZCl0PinpSf1OApMFyS5CZBsw204yiiZC6vP9l9bZAYhsXtinYtwsoezFQTEXK1ZAGfq6ZAWcFNELZBDZBWMrZBEC85ZC0VbGcRcPGrI9cwIifSQyZBGZCH58JGmLv4iUAJh14PA7tJy8HLE5ZCmgsE6GEmK2WnB1uHm8EZCqe4ZD';

        $post_url = 'https://graph.facebook.com/'.$page_id.'/feed';



        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $post_url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $return = curl_exec($ch);
        curl_close($ch);

        print_r($return);

    }
}

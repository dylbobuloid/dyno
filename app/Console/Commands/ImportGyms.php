<?php

namespace App\Console\Commands;

use App\Models\ClimbingCentre;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Symfony\Component\VarDumper\VarDumper;

class ImportGyms extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-gyms';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retrieves Gym data from Openbeta API endpoint, then add to table in the database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        echo "Executing Query";
      $response = Http::post('https://api.openbeta.io/', ["query"=>"query UsaAreas{areas { id areaName pathTokens }}"]);
      echo "Query Executed";

      /**Goes into JSON and retrieves with the key data and retrieces properties of the name and area */
      foreach($response->json($key = "data")["areas"] as $area){
        $location = "";

        echo "Saving... " . $area["areaName"];

        if(isset($area["pathTokens"][1] )){
            $location = $area["pathTokens"][1] . ", " . $area["pathTokens"][0] ;
        }else{
            $location = $area["pathTokens"][0];
        }

       
        /** Add those properties into the table in the database */
        ClimbingCentre::create(["name"=> $area["areaName"] , "location"=>$location, "indoors"=>false]);

        echo "Saved into database!";

      }
    }
}

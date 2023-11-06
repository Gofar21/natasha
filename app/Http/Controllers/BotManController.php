<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use Google\ApiCore\ApiException;
use Google\Cloud\Dialogflow\V2\SessionsClient;
use Google\Cloud\Dialogflow\V2\QueryInput;
use Google\Cloud\Dialogflow\V2\TextInput;
use App\Models\Chat;


class BotManController extends Controller
{
    //
    public function handle()
    {

         $botman = app('botman');
         $botman->hears('{message}', function($botman, $message) {
         if ($message == 'hi')
          {
            $this->askName($botman);
          }
          elseif ($message == 'promo') {
            $this->promo($botman);
          }
          else
          {
            $botman->reply("write 'hi' for testing...");
          }
       });

       $botman->listen();

       

    }

      /**
       * Place your BotMan logic here.
      */

      public function askName($botman)
      {

          $botman->ask('Hello! What is your Name?', function(Answer $answer) {
          $name = $answer->getText();
          Chat::create([
            'chat' => $name,
          ]);

          $this->say('Hello '.$name);
        });

      }

      public function promo($botman)
      {

        $botman->ask('jika ingin melihat promo ketik mau promo', function(Answer $answer) {
            if($answer=='mau'){

                $jawaban = '<a href="https://natasha-skin.com/product/natasha-insta-glow-whitening-series-ii/">klik link</a>';
            }else{
                $jawaban = 'tidak tampil promo';
            }

            $this->say($jawaban);
        });
      }

}

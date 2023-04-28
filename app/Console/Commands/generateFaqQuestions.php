<?php

namespace App\Console\Commands;

use App\Models\Faq\Item;
use Illuminate\Console\Command;

class generateFaqQuestions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:generatefaq';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $itemsToGenerate = 8;
        for ($i = 0; $i < $itemsToGenerate; $i++){
            $newItem = new Item();
            //generate random question
            $newItem->question = 'Pergunta ' . ($i + 1);
            //generate random answer
            $newItem->answer = 'Resposta ' . ($i + 1);
            //generate random is_active
            $newItem->is_active = rand(0, 1);
            $newItem->save();
        }
        return 0;
    }
}

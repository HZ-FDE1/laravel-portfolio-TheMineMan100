<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'question' => 'Q: How can you print a document from your laptop at HZ?',
            'answer' => 'A: Everything about printing documents can be found at the HZ Topdesk website here. A link to the printing website can be found here.',
            'link' => 'https://mynetpay.hz.nl/webprint',
            'created_at' => now(),
        ]);

        DB::table('faqs')->insert([
            'question' => 'Q: How can you scan a document a send it to your laptop at HZ?',
            'answer' => 'A: You can find the instructions on the HZ Topdesk website; a link to that tutorial can be found here.',
            'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/knowledgeitem?unid=d065a4e8a56d47dcbd0ffb9cdf78f20b&origin=searchPreview',
            'created_at' => now(),
        ]);

        DB::table('faqs')->insert([
            'question' => 'Q: How can I buy something (like when I sign up for the IT introduction event at Friday 16/09) on the HZ web shop?',
            'answer' => 'A: You can find the webshop on the MyHZ portal, and from there you can easily make your purchase. You can also find the link to the web shop here.',
            'link' => 'https://webshop.hz.nl/WebshopApp/defaulten.aspx?menu=082076044027019251066025111065201099237062130097',
            'created_at' => now(),
        ]);

        DB::table('faqs')->insert([
            'question' => 'Q: Where can I find the latest instructions on what to do when you are sick / show symptoms of COVID?',
            'answer' => 'A: You can find the link to everything regarding Covid-19 at the HZ here.',
            'link' => 'https://hz.nl/en/current-affairs/coronavirus',
            'created_at' => now(),
        ]);

        DB::table('faqs')->insert([
            'question' => 'Q: How can you book a project space in one of the wings?',
            'answer' => 'A: All the precise information, including the reservation procedure can be found here on the HZ Topdesk website.',
            'link' => 'https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/service?unid=7e54d40b762c4dc79205e200f0d4d818',
            'created_at' => now(),
        ]);

        DB::table('faqs')->insert([
            'question' => 'Q: What are the instructions if you want to park your car at the HZ parking lot?',
            'answer' => "A: Free parking is available at the car park at Poelendaelesingel 8 in Middelburg. This is at a few minutes' walk from HZ...",
            'link' => 'https://hz.nl/en/about-hz/contact/middelburg',
            'created_at' => now(),
        ]);
    }
}

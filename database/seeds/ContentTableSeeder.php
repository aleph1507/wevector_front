<?php

use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $content = [
        ['menu', 'howitworks', '1', 'How it works'],
        ['menu', 'plans', '2', 'Packages'],
        ['menu', 'contact', '3', 'Contact'],
        ['menu', 'customers', '4', 'Hire us'],
        ['text', 'landing', 's1h', 'we do one thing well'],
        ['text', 'landing', 's1p', 'We transform raster graphics into beautiful, pixel perfect vector artworks. Through considered aesthetic and a firm understanding of your business objectives.'],
        ['text', 'landing', 's2h', 'crafted with care'],
        ['text', 'landing', 's2p', 'Details matter. No matter how challenging they are, we create each and every one by hand. No automation, tracing, or magic potions.'],
        ['img', 'landing', 's2i', 'Motor.png'],
        ['text', 'landing', 's2b', 'how it works'],
        ['link', 'landing', 's2burl', 'http://www.wevector.com/howitworks'],
        ['text', 'landing', 'shows2b', 'true'],
        ['text', 'landing', 's1bgcolor', '#15053a'],
        ['text', 'landing', 's2bgcolor', '#464646'],
        ['text', 'landing', 's3bgcolor', '#a9d7d5'],
        ['text', 'landing', 's4bgcolor', '#fddfdf'],
        ['text', 'landing', 's5bgcolor', '#ffffff'],
        ['text', 'landing', 's6bgcolor', '#15053a'],
        ['text', 'landing', 's1fontcolor', '#ffffff'],
        ['text', 'landing', 's2fontcolor', '#ffffff'],
        ['text', 'landing', 's3fontcolor', '#ffffff'],
        ['text', 'landing', 's4fontcolor', '#000000'],
        ['text', 'landing', 's5fontcolor', '#000000'],
        ['text', 'landing', 's6fontcolor', '#ffffff'],
        ['img', 'landing', 's2ibg', 'group-210.png'],
        ['text', 'landing', 'shows2bgi', 'false'],
        ['text', 'landing', 's3h', 'perfect in any format'],
        ['text', 'landing', 's3p', 'We take great pride in drawing each and every artwork by hand. For us this is the only way to achieve the quality we are known for.'],
        ['img', 'landing', 's3i', 'simple-iphone-x-mockup-for-dribbble.png'],
        ['text', 'landing', 's3b', 'see our plans'],
        ['link', 'landing', 's3burl', 'http://www.wevector.com/plans'],
        ['text', 'landing', 'shows3b', 'true'],
        ['text', 'landing', 's4h', 'CUSTOMIZE EVERY DETAIL'],
        ['text', 'landing', 's4p', 'Customize every aspect of your vector graphic while always staying pixel perfect. Resize. Change colour. Save in different format. We are with you every step of the way.'],
        ['img', 'landing', 's4i', 'hand-pattern-01.png'],
        ['text', 'landing', 's4b', 'hire us'],
        ['link', 'landing', 's4burl', 'http://www.wevector.com/hireus'],
        ['text', 'landing', 'shows4b', 'true'],
        ['text', 'landing', 's5h', 'YOUR DEDICATED TEAM'],
        ['text', 'landing', 's5p', 'Based on years of experience, we aim to always provide personized, one-on-one experience.'],
        ['img', 'landing', 's5i', 'layer-1.png'],
        ['text', 'landing', 's5b', 'hire us'],
        ['link', 'landing', 's5burl', 'http://www.wevector.com/hireus'],
        ['text', 'landing', 'shows5b', 'true'],
        ['text', 'landing', 's6h', 'HOW CAN WE HELP?'],
        ['text', 'landing', 's6p', 'If you would you like to know more about our work and services, please get in touch with us. We\'re available 8.00 AM – 4:00 PM CET, Monday through Friday. We do our best to respond to each request with a personalized reply within few hours.'],
        ['text', 'howitworks', 's1h', 'we made things simple for you'],
        ['text', 'howitworks', 's1p', 'In order to provide you with a tailor-made service that is both aesthetic and profitable, we always start by carefully defining your wishes, conditions and goals. Bellow is our 4-step process.'],
        ['text', 'howitworks', 's2h', 'Determine your needs'],
        ['text', 'howitworks', 's2p', 'Determine how many raster graphics you would like to vectorize and how fast you would like them back. Leave the rest to us.'],
        ['img', 'howitworks', 's2i', 'group-5.svg'],
        ['text', 'howitworks', 's3h', 'Select a plan  that suits your goals'],
        ['text', 'howitworks', 's3p', 'We offer three monthly plans that allow for 15 vector artworks over a period of one month. Where they differ is in how fast you would like the vector artworks to be available.'],
        ['img', 'howitworks', 's3i', 'group-6.svg'],
        ['text', 'howitworks', 's4h', 'Prepare your  raster graphics '],
        ['text', 'howitworks', 's4p', 'Your final vector artworks will be as good as the raster graphics you provide us with. We recommend you spend a few minutes to select the best quality you have.'],
        ['text', 'howitworks', 's4i', 'group-4.svg'],
        ['text', 'howitworks', 's5h', 'Share your raster graphics with us     '],
        ['text', 'howitworks', 's5p', 'The only thing left is to tell us of any specific needs & share your graphics with us. We’ll collaborate over Dropbox, where you’ll have full access to your files.'],
        ['img', 'howitworks', 's5i', 'group-2.svg'],
        ['text', 'packages', 's1h', 'OUR PLANS. SIMPLE.'],
        ['text', 'packages', 's1p', 'We offer three plans that allow for 15 vector artworks over a period of 30 days. Where they differ is in how fast you would like the vector artworks to be available.'],
        ['text', 'packages', 'p1title', 'RUSH'],
        ['text', 'packages', 'p1price', '30'],
        ['text', 'packages', 'p1timetable', 'Completed within 24 hours'],
        ['text', 'packages', 'p1corrections', 'Two corrections'],
        ['text', 'packages', 'p1export', 'Export in different file formats'],
        ['text', 'packages', 'p1support', 'Dedicated online support'],
        ['text', 'packages', 'p2title', 'STANDARD'],
        ['text', 'packages', 'p2price', '20'],
        ['text', 'packages', 'p2timetable', 'Completed within 48 hours'],
        ['text', 'packages', 'p2corrections', 'Two corrections'],
        ['text', 'packages', 'p2export', 'Export in different file formats'],
        ['text', 'packages', 'p2support', 'Email support'],
        ['text', 'packages', 'p3title', 'BASIC'],
        ['text', 'packages', 'p3price', '10'],
        ['text', 'packages', 'p3timetable', 'Completed within 72 hours'],
        ['text', 'packages', 'p3corrections', 'One correction'],
        ['text', 'packages', 'p3support', 'Email support'],
        ['text', 'packages', 'faqq1', 'HOW LONG ARE YOUR PLANS?'],
        ['text', 'packages', 'faqa1', 'Wevector plans are valid for 30 days or 15 artworks from the moment they are purchased. You are free to choose when and how many vector artworks you need over that period of time.'],
        ['text', 'packages', 'faqq2', 'CAN I SWITCH PLANS?'],
        ['text', 'packages', 'faqa2', 'At the moment you cannot switch between plans.'],
        ['text', 'packages', 'faqq3', 'DO YOU OFFER ANNUAL PLANS?'],
        ['text', 'packages', 'faqa3', 'Yes. We have many years of experience with clients that have a continuous need to vector artworks. Annual plans benefit from dedicated teams and offer higher level of flexibility. Contact our customer service at hello@wevector.io to hear how we can help you.'],
        ['text', 'packages', 'faqq4', 'CAN YOU COMPLETE MORE THEN 15 VECTOR ARTWORKS?'],
        ['text', 'packages', 'faqa4', 'Yes. If you need a higher volume of vector artworks, we would like you to send us an email at hello@wevector.io. Our customer service will create a custom plan to suit your needs.'],
        ['text', 'packages', 'faqq5', 'WHAT IS MEANT BY CORRECTION?'],
        ['text', 'packages', 'faqa5', 'Once your vector artwork is available for review, depending on your plan, you are able to modify: - colours - orientation (portrait or landscape) - size of artwork elements - position of elements'],
        ['text', 'packages', 'faqq6', 'WHERE CAN I FIND MY VECTOR ARTWORKS?'],
        ['text', 'packages', 'faqa6', 'Once you purchase one of our plans, you will get access to your dedicated space on Dropbox. Everything will be stored there for your convenience.'],
        ['text', 'packages', 'faqq7', 'DO YOU WORK ON WEEKENDS?'],
        ['text', 'packages', 'faqa7', 'No. Weekends are reserved for fun, family & friends. Vector artwork requests received outside of business hours will be completed next business day.'],
        ['text', 'packages', 'faqq8', 'WHAT IS DEDICATED ONLINE SUPPORT?'],
        ['text', 'packages', 'faqa8', 'Dedicated online support provides unlimited access to our customer service in order to ensure you reach your goals as fast as possible. Dedicated online support is only available during business hours.'],
        ['text', 'contact', 's1h', 'HOW CAN WE HELP?'],
        ['text', 'contact', 's1p', 'If you would you like to know more about our work and services, please get in touch with us. We\'re available 8.00 AM – 4:00 PM CET, Monday through Friday. We do our best to respond to each request with a personalized reply within a few hours.'],
        ['text', 'contact', 'addressTitle', 'ADDRESS'],
        ['text', 'contact', 'addressStreet', 'Nikola Trimpare 33 1-4'],
        ['text', 'contact', 'addressZip', '1000'],
        ['text', 'contact', 'addressCity', 'Skopje'],
        ['text', 'contact', 'addressCountry', 'Macedonia'],
        ['text', 'contact', 'addressMap', 'https://goo.gl/maps/Fm4eWESxceB2'],
        ['text', 'contact', 'contactTitle', 'Managing Director'],
        ['text', 'contact', 'contactText', 'Please get in touch and let’s have a talk about your challenges.'],
        ['text', 'contact', 'contactName', 'Sasha Jacimic'],
        ['text', 'contact', 'contactEmail', 'sj@wevector.io'],
        ['text', 'contact', 'contactPhone', '+389 2310 7005'],
        ['text', 'contact', 'contactDirect', '+ 389 70 344 130'],
        ['img', 'footer', 'fi1', 'we_vector_logo.svg'],
        ['text', 'footer', 'fc2h1', 'get in touch'],
        ['text', 'footer', 'fc2p1', 'Would you like to hear more about our service and how we can help you? Please get in touch and let’s have a talk about your challenges.'],
        ['text', 'footer', 'fc2phone1', 'Office +389 2310 7005'],
        ['link', 'footer', 'fc2mail1', 'hello@wevector.io'],
        ['text', 'footer', 'fc3h1', 'address'],
        ['text', 'footer', 'fc2l1', 'Wevector'],
        ['text', 'footer', 'fc2l2', 'Nikola Trimpare 33, 1-4'],
        ['text', 'footer', 'fc2l3', '1000 Skopje Macedonia'],
        ['link', 'footer', 'fc4link1', 'http://www.facebook.com'],
        ['link', 'footer', 'fc4link2', 'http://www.linkedin.com'],
        ['link', 'footer', 'fc2link3', 'http://www.pinterest.com']
      ];

      for($i = 0; $i<count($content); $i++){
        DB::table('contents')->insert([
          'type' => $content[$i][0],
          'page' => $content[$i][1],
          'placement' => $content[$i][2],
          'content' => $content[$i][3],
          // 'background-image' => $content[$i][4],
          // 'background-color' => $content[$i][5]
        ]);
      }
    }
}

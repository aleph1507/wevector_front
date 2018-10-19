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
        ['menu', 'howitworks', '1', 'How it works', null, null],
        ['menu', 'plans', '2', 'Packages', null, null],
        ['menu', 'contact', '3', 'Contact', null, null],
        ['menu', 'customers', '4', 'Hire us', null, null],
        ['text', 'landing', 's1h', 'we do one thing well', null, null],
        ['text', 'landing', 's1p', 'We transform raster graphics into beautiful, pixel perfect vector artworks. Through considered aesthetic and a firm understanding of your business objectives.', null, null],
        ['text', 'landing', 's2h', 'crafted with care', null, null],
        ['text', 'landing', 's2p', 'Details matter. No matter how challenging they are, we create each and every one by hand. No automation, tracing, or magic potions.', null, null],
        ['img', 'landing', 's2i', 'Motor.png', null, null],
        ['text', 'landing', 's3h', 'perfect in any format', null, null],
        ['text', 'landing', 's3p', 'We take great pride in drawing each and every artwork by hand. For us this is the only way to achieve the quality we are known for.', null, null],
        ['img', 'landing', 's3i', 'simple-iphone-x-mockup-for-dribbble.png', null, null],
        ['text', 'landing', 's4h', 'CUSTOMIZE EVERY DETAIL', null, null],
        ['text', 'landing', 's4p', 'Customize every aspect of your vector graphic while always staying pixel perfect. Resize. Change colour. Save in different format. We are with you every step of the way.', null, null],
        ['img', 'landing', 's4i', 'hand-pattern-01.png', null, null],
        ['text', 'landing', 's5h', 'YOUR DEDICATED TEAM', null, null],
        ['text', 'landing', 's5p', 'Based on years of experience, we aim to always provide personized, one-on-one experience.', null, null],
        ['img', 'landing', 's5i', 'layer-1.png', null, null],
        ['text', 'landing', 's6h', 'HOW CAN WE HELP?', null, null],
        ['text', 'landing', 's6p', 'If you would you like to know more about our work and services, please get in touch with us. We\'re available 8.00 AM – 4:00 PM CET, Monday through Friday. We do our best to respond to each request with a personalized reply within few hours.', null, null],
        ['text', 'howitworks', 's1h', 'we made things simple for you', null, null],
        ['text', 'howitworks', 's1p', 'In order to provide you with a tailor-made service that is both aesthetic and profitable, we always start by carefully defining your wishes, conditions and goals. Bellow is our 4-step process.', null, null],
        ['text', 'howitworks', 's2h', 'Determine your needs', null, null],
        ['text', 'howitworks', 's2p', 'Determine how many raster graphics you would like to vectorize and how fast you would like them back. Leave the rest to us.', null, null],
        ['img', 'howitworks', 's2i', 'group-5.svg', null, null],
        ['text', 'howitworks', 's3h', 'Select a plan  that suits your goals', null, null],
        ['text', 'howitworks', 's3p', 'We offer three monthly plans that allow for 15 vector artworks over a period of one month. Where they differ is in how fast you would like the vector artworks to be available.', null, null],
        ['img', 'howitworks', 's3i', 'group-6.svg', null, null],
        ['text', 'howitworks', 's4h', 'Prepare your  raster graphics ', null, null],
        ['text', 'howitworks', 's4p', 'Your final vector artworks will be as good as the raster graphics you provide us with. We recommend you spend a few minutes to select the best quality you have.', null, null],
        ['text', 'howitworks', 's4i', 'group-4.svg', null, null],
        ['text', 'howitworks', 's5h', 'Share your raster graphics with us     ', null, null],
        ['text', 'howitworks', 's5p', 'The only thing left is to tell us of any specific needs & share your graphics with us. We’ll collaborate over Dropbox, where you’ll have full access to your files.', null, null],
        ['img', 'howitworks', 's5i', 'group-2.svg', null, null],
        ['text', 'packages', 's1h', 'OUR PLANS. SIMPLE.', null, null],
        ['text', 'packages', 's1p', 'We offer three plans that allow for 15 vector artworks over a period of 30 days. Where they differ is in how fast you would like the vector artworks to be available.', null, null],
        ['text', 'packages', 'p1title', 'RUSH', null, null],
        ['text', 'packages', 'p1price', '30', null, null],
        ['text', 'packages', 'p1timetable', 'Completed within 24 hours', null, null],
        ['text', 'packages', 'p1corrections', 'Two corrections', null, null],
        ['text', 'packages', 'p1export', 'Export in different file formats', null, null],
        ['text', 'packages', 'p1support', 'Dedicated online support', null, null],
        ['text', 'packages', 'p2title', 'STANDARD', null, null],
        ['text', 'packages', 'p2price', '20', null, null],
        ['text', 'packages', 'p2timetable', 'Completed within 48 hours', null, null],
        ['text', 'packages', 'p2corrections', 'Two corrections', null, null],
        ['text', 'packages', 'p2export', 'Export in different file formats', null, null],
        ['text', 'packages', 'p2support', 'Email support', null, null],
        ['text', 'packages', 'p2title', 'BASIC', null, null],
        ['text', 'packages', 'p2price', '10', null, null],
        ['text', 'packages', 'p3timetable', 'Completed within 72 hours', null, null],
        ['text', 'packages', 'p3corrections', 'One correction', null, null],
        ['text', 'packages', 'p3support', 'Email support', null, null],
        ['text', 'packages', 'faqq1', 'HOW LONG ARE YOUR PLANS?', null, null],
        ['text', 'packages', 'faqa1', 'Wevector plans are valid for 30 days or 15 artworks from the moment they are purchased. You are free to choose when and how many vector artworks you need over that period of time.', null, null],
        ['text', 'packages', 'faqq2', 'CAN I SWITCH PLANS?', null, null],
        ['text', 'packages', 'faqa2', 'At the moment you cannot switch between plans.', null, null],
        ['text', 'packages', 'faqq3', 'DO YOU OFFER ANNUAL PLANS?', null, null],
        ['text', 'packages', 'faqa3', 'Yes. We have many years of experience with clients that have a continuous need to vector artworks. Annual plans benefit from dedicated teams and offer higher level of flexibility. Contact our customer service at hello@wevector.io to hear how we can help you.', null, null],
        ['text', 'packages', 'faqq4', 'CAN YOU COMPLETE MORE THEN 15 VECTOR ARTWORKS?', null, null],
        ['text', 'packages', 'faqa4', 'Yes. If you need a higher volume of vector artworks, we would like you to send us an email at hello@wevector.io. Our customer service will create a custom plan to suit your needs.', null, null],
        ['text', 'packages', 'faqq5', 'WHAT IS MEANT BY CORRECTION?', null, null],
        ['text', 'packages', 'faqa5', 'Once your vector artwork is available for review, depending on your plan, you are able to modify: - colours - orientation (portrait or landscape) - size of artwork elements - position of elements', null, null],
        ['text', 'packages', 'faqq6', 'WHERE CAN I FIND MY VECTOR ARTWORKS?', null, null],
        ['text', 'packages', 'faqa6', 'Once you purchase one of our plans, you will get access to your dedicated space on Dropbox. Everything will be stored there for your convenience.', null, null],
        ['text', 'packages', 'faqq7', 'DO YOU WORK ON WEEKENDS?', null, null],
        ['text', 'packages', 'faqa7', 'No. Weekends are reserved for fun, family & friends. Vector artwork requests received outside of business hours will be completed next business day.', null, null],
        ['text', 'packages', 'faqq8', 'WHAT IS DEDICATED ONLINE SUPPORT?', null, null],
        ['text', 'packages', 'faqa8', 'Dedicated online support provides unlimited access to our customer service in order to ensure you reach your goals as fast as possible. Dedicated online support is only available during business hours.', null, null],
        ['text', 'contact', 's1h', 'HOW CAN WE HELP?', null, null],
        ['text', 'contact', 's1p', 'If you would you like to know more about our work and services, please get in touch with us. We\'re available 8.00 AM – 4:00 PM CET, Monday through Friday. We do our best to respond to each request with a personalized reply within a few hours.', null, null],
        ['text', 'contact', 'addressTitle', 'ADDRESS', null, null],
        ['text', 'contact', 'addressStreet', 'Nikola Trimpare 33 1-4', null, null],
        ['text', 'contact', 'addressZip', '1000', null, null],
        ['text', 'contact', 'addressCity', 'Skopje', null, null],
        ['text', 'contact', 'addressCountry', 'Macedonia', null, null],
        ['text', 'contact', 'addressMap', 'https://goo.gl/maps/Fm4eWESxceB2', null, null],
        ['text', 'contact', 'contactTitle', 'CONTACT', null, null],
        ['text', 'contact', 'contactText', 'Please get in touch and let’s have a talk about your challenges.', null, null],
        ['text', 'contact', 'contactName', 'Sasha Jacimic', null, null],
        ['text', 'contact', 'contactEmail', 'sj@wevector.io', null, null],
        ['text', 'contact', 'contactPhone', '+389 2310 7005', null, null],
        ['text', 'contact', 'contactDirect', '+ 389 70 344 130', null, null],
        ['img', 'footer', 'fi1', 'we_vector_logo.svg', null, null],
        ['text', 'footer', 'fc2h1', 'get in touch', null, null],
        ['text', 'footer', 'fc2p1', 'Would you like to hear more about our service and how we can help you? Please get in touch and let’s have a talk about your challenges.', null, null],
        ['text', 'footer', 'fc2phone1', 'Office +389 2310 7005', null, null],
        ['link', 'footer', 'fc2mail1', 'hello@wevector.io', null, null],
        ['text', 'footer', 'fc3h1', 'address', null, null],
        ['text', 'footer', 'fc2l1', 'Wevector', null, null],
        ['text', 'footer', 'fc2l2', 'Nikola Trimpare 33, 1-4', null, null],
        ['text', 'footer', 'fc2l3', '1000 Skopje Macedonia', null, null],
        ['link', 'footer', 'fc4link1', 'http://www.facebook.com', null, null],
        ['link', 'footer', 'fc4link2', 'http://www.linkedin.com', null, null],
        ['link', 'footer', 'fc2link3', 'http://www.pinterest.com', null, null]
      ];

      for($i = 0; $i<count($content); $i++){
        DB::table('contents')->insert([
          'type' => $content[$i][0],
          'page' => $content[$i][1],
          'placement' => $content[$i][2],
          'content' => $content[$i][3],
          'background-image' => $content[$i][4],
          'background-color' => $content[$i][5]
        ]);
      }
    }
}

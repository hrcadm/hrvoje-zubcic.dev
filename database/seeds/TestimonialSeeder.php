<?php

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Preset testimonials
        $testimonials = [
            [
                'testimonial_order' => 2,
                'testimonial_author_name' => 'Ivan Lozancic',
                'testimonial_author_role' => 'CEO',
                'testimonial_author_company' => 'GiftCash Inc',
                'testimonial_note' => null,
                'testimonial_content' => 'I would recommend Hrvoje for the position of PHP Web Developer (or other, if he acquire new language knowledge) to anyone, as he demonstrated strong will, creative approach to the problems, flawless communication with the clients and much more in such a short time. His rapid development and the learning curve is amazing and he would definitely be a valuable asset to any company!'
            ],
            [
                'testimonial_order' => 1,
                'testimonial_author_name' => 'Colin Moffat',
                'testimonial_author_role' => 'CEO',
                'testimonial_author_company' => 'Gauss Development d.o.o.',
                'testimonial_note' => null,
                'testimonial_content' => 'Hrvoje was a very honest and reliable developer who helped push our start up to the next level. He is diligent and takes a strong initiative to solve difficult problems using a creative mindset. I would strongly recommend utilizing him as he is a strong asset for any company. '
            ],
            [
                'testimonial_order' => 3,
                'testimonial_author_name' => 'Jay Syzdek',
                'testimonial_author_role' => 'CTO',
                'testimonial_note' => null,
                'testimonial_author_company' => 'Digital Marketing Group LLC',
                'testimonial_content' => 'One of the best people I\'ve worked with in years. Highly recommend!'
            ]
        ];

        foreach($testimonials as $testimonial)
        {
            Testimonial::create([
                'testimonial_order' => $testimonial['testimonial_order'],
                'testimonial_author_name' => $testimonial['testimonial_author_name'],
                'testimonial_author_role' => $testimonial['testimonial_author_role'],
                'testimonial_note' => $testimonial['testimonial_note'],
                'testimonial_author_company' => $testimonial['testimonial_author_company'],
                'testimonial_content' => $testimonial['testimonial_content'],
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SliderSeeder extends Seeder
{
    public function run()
    {
        Slider::create([
            'title_uz' => 'Birinchi Slayder',
            'description_uz' => 'Bu birinchi slayderning taʼrifi. Bu slayderda foydalanuvchilar uchun eng yaxshi maʼlumotlar joylashtirilgan.',
            'title_ru' => 'Первый Слайдер',
            'description_ru' => 'Это описание первого слайдера. Здесь размещены лучшие предложения для пользователей.',
            'title_en' => 'First Slider',
            'description_en' => 'This is the description of the first slider. It features the best offers for users.',
            'image' => 'slider_ru_1.jpg',
        ]);

        Slider::create([
            'title_uz' => 'Ikkinchi Slayder',
            'description_uz' => 'Bu ikkinchi slayderda yangiliklar va takliflar mavjud.',
            'title_ru' => 'Второй Слайдер',
            'description_ru' => 'На втором слайдере размещены новости и предложения.',
            'title_en' => 'Second Slider',
            'description_en' => 'This second slider showcases news and offers.',
            'image' => 'slider_uz_2.jpg',
        ]);

        Slider::create([
            'title_uz' => 'Uchinchi Slayder',
            'description_uz' => 'Bu uchinchi slayderda eng mashhur mahsulotlar taqdim etiladi.',
            'title_ru' => 'Третий Слайдер',
            'description_ru' => 'На третьем слайдере представлены самые популярные товары.',
            'title_en' => 'Third Slider',
            'description_en' => 'This third slider displays the most popular products.',
            'image' => 'slider_uz_3.jpg',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Page;
use App\Template;
use App\Meta;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(['login'=> 'cmslogin', 'password'=> bcrypt('asd123')]);

        $index_page = Page::create([
            'name'=> 'Главная', 
            'title'=> 'Титул на главной странице',
            'description'=> 'Описание страницы', 
            'scripts' => ''
        ]);
        $hero_1 = Template::create(['page_id' => $index_page->id, 'type' => 'hero-1']);
        Meta::create([
            'template_id' => $hero_1->id,
            'key' => 'title',
            'value' => 'Титул для первой'
        ]);
        Meta::create([
            'template_id' => $hero_1->id,
            'key' => 'subtitle',
            'value' => 'Подзаголовок на первой. Подзаголовок на первойПодзаголовок на первой'
        ]);
        Meta::create([
            'template_id' => $hero_1->id,
            'key' => 'btn_title',
            'value' => 'Текст для кнопки'
        ]);
        Template::create(['page_id' => $index_page->id, 'type' => 'left-side']);

        $thanks_page = Page::create([
            'name'=> 'Спасибо', 
            'title'=> 'Титул на странице спасибо',
            'description'=> 'Описание страницы', 
            'scripts' => ''
        ]);
    }
}

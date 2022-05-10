<?php
    namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet. Qui necessitatibus veritatis est voluptatibus quod ab nobis necessitatibus ut dolorum quam et doloribus pariatur. Hic libero iure ut voluptas dolorem est velit modi et culpa nihil et tenetur dolor.'           
            ],

            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet. Qui necessitatibus veritatis est voluptatibus quod ab nobis necessitatibus ut dolorum quam et doloribus pariatur. Hic libero iure ut voluptas dolorem est velit modi et culpa nihil et tenetur dolor.'           
            ],
            ];
    }
}

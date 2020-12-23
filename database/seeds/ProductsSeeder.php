<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'title_en' => 'Product 1',
                'title_ar' => ' منتج 1',
                'image' => 'img.png',
                'price_ae' => '52',
                'price_sa' => '50',
                'stock_ae' => '50',
                'stock_sa' => '20',
              ],
              [
                'title_en' => 'Product 2',
                'title_ar' => ' منتج 2',
                'image' => 'img.png',
                'price_ae' => '52',
                'price_sa' => '50',
                'stock_ae' => '50',
                'stock_sa' => '20',
              ],
              [
                'title_en' => 'Product 3',
                'title_ar' => ' منتج 3',
                'image' => 'img.png',
                'price_ae' => '52',
                'price_sa' => '50',
                'stock_ae' => '50',
                'stock_sa' => '20',
              ],
              [
                'title_en' => 'Product 4',
                'title_ar' => ' منتج 4',
                'image' => 'img.png',
                'price_ae' => '52',
                'price_sa' => '50',
                'stock_ae' => '50',
                'stock_sa' => '20',
              ],
              [
                'title_en' => 'Product 5',
                'title_ar' => ' منتج 5',
                'image' => 'img.png',
                'price_ae' => '52',
                'price_sa' => '50',
                'stock_ae' => '50',
                'stock_sa' => '20',
              ],
                     
            ]);
        
    }
}

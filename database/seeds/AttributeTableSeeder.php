<?php

use Illuminate\Database\Seeder;

class AttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->delete();

        $now = Carbon::now();

        DB::table('attributes')->insert([
            ['id' => '1','code' => 'sku','name' => 'SKU','type' => 'text','validation' => NULL,'position' => '1','is_required' => '1','is_unique' => '1','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0','created_at' => $now,'updated_at' => $now],
            ['id' => '2','code' => 'name','name' => 'Наименование','type' => 'text','validation' => NULL,'position' => '2','is_required' => '1','is_unique' => '0','value_per_locale' => '1','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '3','code' => 'url_key','name' => 'URL Key','type' => 'text','validation' => NULL,'position' => '3','is_required' => '1','is_unique' => '1','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '4','code' => 'tax_category_id','name' => 'Категория налога','type' => 'select','validation' => NULL,'position' => '4','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '5','code' => 'new','name' => 'Новый','type' => 'boolean','validation' => NULL,'position' => '5','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '6','code' => 'featured','name' => 'Рекомендуемый','type' => 'boolean','validation' => NULL,'position' => '6','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '7','code' => 'visible_individually','name' => 'Показывать индивидуально','type' => 'boolean','validation' => NULL,'position' => '7','is_required' => '1','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0','created_at' => $now,
            'updated_at' => $now],
            ['id' => '8','code' => 'status','name' => 'Статус','type' => 'boolean','validation' => NULL,'position' => '8','is_required' => '1','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '9','code' => 'short_description','name' => 'Краткое описание','type' => 'textarea','validation' => NULL,'position' => '9','is_required' => '1','is_unique' => '0','value_per_locale' => '1','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0',
            'is_visible_on_front' => '0','created_at' => $now,'updated_at' => $now],
            ['id' => '10','code' => 'description','name' => 'Описание','type' => 'textarea','validation' => NULL,'position' => '10','is_required' => '1','is_unique' => '0','value_per_locale' => '1','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '11','code' => 'price','name' => 'Цена','type' => 'price','validation' => 'decimal','position' => '11','is_required' => '1','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '1','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '12','code' => 'cost','name' => 'Стоимость','type' => 'price','validation' => 'decimal','position' => '12','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '1','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '13','code' => 'special_price','name' => 'Скидочная цена','type' => 'price','validation' => 'decimal','position' => '13','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0','created_at' => $now,'updated_at' => $now],
            ['id' => '14','code' => 'special_price_from','name' => 'Скидочная цена от','type' => 'date','validation' => NULL,'position' => '14','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0','created_at' => $now,'updated_at' => $now],
            ['id' => '15','code' => 'special_price_to','name' => 'Скидочная цена до','type' => 'date','validation' => NULL,'position' => '15','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0',
            'is_visible_on_front' => '0','created_at' => $now,'updated_at' => $now],
            ['id' => '16','code' => 'meta_title','name' => 'Meta Title','type' => 'textarea','validation' => NULL,'position' => '16','is_required' => '0','is_unique' => '0','value_per_locale' => '1','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '17','code' => 'meta_keywords','name' => 'Meta Keywords','type' => 'textarea','validation' => NULL,'position' => '17','is_required' => '0','is_unique' => '0','value_per_locale' => '1','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '18','code' => 'meta_description','name' => 'Meta Description','type' => 'textarea','validation' => NULL,'position' => '18','is_required' => '0','is_unique' => '0','value_per_locale' => '1','value_per_channel' => '1','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '1','is_visible_on_front' => '0','created_at' => $now,'updated_at' => $now],
            ['id' => '19','code' => 'width','name' => 'Ширина','type' => 'text','validation' => 'decimal','position' => '19','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '1','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '20','code' => 'height','name' => 'Высота','type' => 'text','validation' => 'decimal','position' => '20','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '1','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '21','code' => 'depth','name' => 'Глубина','type' => 'text','validation' => 'decimal','position' => '21','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '1','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '22','code' => 'weight','name' => 'Вес','type' => 'text','validation' => 'decimal','position' => '22','is_required' => '1','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '0','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '23','code' => 'color','name' => 'Цвет','type' => 'select','validation' => NULL,'position' => '23','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '1','is_configurable' => '1','is_user_defined' => '1','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '24','code' => 'size','name' => 'Размер','type' => 'select','validation' => NULL,'position' => '24','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '1','is_configurable' => '1','is_user_defined' => '1','is_visible_on_front' => '0',
            'created_at' => $now,'updated_at' => $now],
            ['id' => '25','code' => 'brand','name' => 'Бренд','type' => 'select','validation' => NULL,'position' => '25','is_required' => '0','is_unique' => '0','value_per_locale' => '0','value_per_channel' => '0','is_filterable' => '1','is_configurable' => '0','is_user_defined' => '0','is_visible_on_front' => '1',
            'created_at' => $now,'updated_at' => $now]
        ]);
    }
}

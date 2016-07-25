<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 19.07.2016
 * Time: 17:18
 * модель для страницы портфолио
 */

class Model_Portfolio extends Model{
    public function get_data()
    {
        return array(
            array(
                'Year'=>'2016',
                'Site'=>'http:/DunkelBeer.ru',
                'Description'=>'Промо сайт темного пива Dunkel от немецкого производителя выпускаемого "САН ИнБев".'
            ),
            array(
                'Year'=>'2015',
                'Site'=>'http:ZopoMobile.ru',
                'Description'=>'Русскоязычный каталог китайских телефонов'
            ),
        );
    }

}

<?php
/**
 * Class Config
 * Organize and easily retrieve global values
 *
 * Benefits of the config class
 * - Does not pollute the global space
 * - Organize global variables
 *
 * @version 1.00
 * @copyright Alex Vovk avcoding.com
 * @contact vovk347@gmail.com
 * https://github.com/avovk/Config
 */



class Config{
    private static $_config = [
        'MySQL'=>[
            'local' =>[
                'host' => 'localhost',
                'user' => 'root',
                'password' => 'root',
                'database' => 'db'
            ],
            'production' =>[
                'host' => 'localhost',
                'user' => 'DBuser',
                'password' => 'DBpassword',
                'database' => 'db'
            ]
        ],
        'rootDIR' => '//www.website.com',
        'tax' => .0865,
        'admin' => ['name'=>'alex','email'=>'email@mail.com']
    ];

    static public function get($string){
        $path = explode('/',$string);
        $location = self::$_config;

        foreach($path as $element){
            if(isset($location[$element])){
                $location = $location[$element];
            }else{
                return '';
            }
        }
        return $location;
    }

}
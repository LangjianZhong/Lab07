<?php
namespace App\Models;

/*
 * Mock travel destination data.
 * Note that we don't have to extend CodeIgniter's model for now
 */

class Places {

    protected $origin = WRITEPATH . 'data/placesData.json';
protected $keyField = 'id';
protected $validationRules = [];

    
    //mock data : an array of records
   /* protected $data = [
        '1' => [
            'id' => 1,
            'name' => 'LinDan',
            'age' => '37year',
            'position' => 'ball control',
            'gender' => 'man',
            'height'=>'178cm',
            'weight' => '70kg',
           'nationality' => 'China',   
            'image' => '1.jpg',
        ],
          '2' => [
            'id' => 2,
            'name' => 'LeeChongWei',
            'age' => '38year',
            'position' => 'Speed fast',
            'gender' => 'man',
            'height'=>'172cm',
            'weight' => '60kg',
           'nationality' => 'Malaysia',   
            'image' => '2.jpg',
        ],
       '3' => [
            'id' => 3,
            'name' => 'Kento Momota',
            'age' => '26year',
            'position' => 'defensive',
            'gender' => 'man',
            'height'=>'175cm',
            'weight' => '65.kg',
           'nationality' => 'Japan',   
            'image' => '3.jpg',
        ],
      '4' => [
            'id' => 4,
            'name' => 'Kevin Sanjaya Sukamuljo',
            'age' => '25year',
            'position' => 'speed fast',
            'gender' => 'man',
            'height'=>'170cm',
            'weight' => '64kg',
           'nationality' => 'Indonesia',   
            'image' => '4.jpg',
        ],
       '5' => [
            'id' => 5,
            'name' => 'Ginting',
            'age' => '23year',
            'position' => 'attack',
            'gender' => 'man',
            'height'=>'171cm',
            'weight' => '60kg',
           'nationality' => 'Indonesia',   
            'image' => '5.jpg',
        ],
          '6' => [
            'id' => 6,
            'name' => 'Aya Ohori',
            'age' => '24year',
            'position' => 'ball control',
            'gender' => 'woman',
            'height'=>'169cm',
            'weight' => '52kg',
           'nationality' => 'Japan',   
            'image' => '6.jpg',
        ],
    ];*/

    public function findAll() {
        return $this->data;
    }

    public function find($id = null) {
        if (!empty($id) && isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }

}
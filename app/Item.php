<?php

namespace App;

use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use AutoNumberTrait;

    protected $table = 'items';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'kode' => [
                'format' => function() {
                 return 'NO-BR/'.date('Ymd').'/?';
                },
             'length' => 5
             ]
        ];
    }

    public function transaction()
    {
       return $this->hasMany(Transaction::class);
    }

}

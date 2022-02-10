<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Transaction extends Model
{
    use AutoNumberTrait;

    protected $table = 'transactions';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'no_faktur' => [
                'format' => function() {
                 return 'NO-FT/'.date('Ymd').'/?';
                },
             'length' => 5
             ]
        ];
    }

    public function item()
    {
       return $this->belongsTo(Item::class, 'kode_id');
    }

    

}

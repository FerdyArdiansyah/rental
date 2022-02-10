<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Pengembalian extends Model
{
    use AutoNumberTrait;

    protected $table = 'returns';
    protected $guarded = [];

    public function getAutoNumberOptions()
    {
        return [
            'no_pengembalian' => [
                'format' => function() {
                 return 'NO-PB/'.date('Ymd').'/?';
                },
             'length' => 5
             ]
        ];
    }

    public function transaction()
    {
       return $this->belongsTo(Transaction::class, 'nofaktur_id');
    }

    public function item()
    {
       return $this->belongsTo(Item::class, 'kode_id');
    }
}

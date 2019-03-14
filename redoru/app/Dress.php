<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'image' => 'required',
        'size' => 'required' ,
        'owner_id' => 'required',
        'exchange_stage' => 'required'
    );

    public function getData(){
        return 'id=' . $this->id . ': image=' . $this->image . ': size=' 
        . $this->size . ': owner_id=' . $this->owner_id . ': exchange_state=' . $this->exchange_state;
    }

}

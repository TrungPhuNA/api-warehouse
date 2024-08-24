<?php

namespace Modules\Admin\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Admin\Database\factories\AttributeValueFactory;

class AttributeValue extends Model
{
    use HasFactory;
    protected $table = 'attribute_values';
    protected $guarded = [''];

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [];
    
    protected static function newFactory(): AttributeValueFactory
    {
        //return AttributeValueFactory::new();
    }
}

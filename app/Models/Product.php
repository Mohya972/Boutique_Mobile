<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    //
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'category_id', // clé étrangère catégory
        'name', 
        'image', 
        'description', 
        'news', 
        'price'
    ];

    // Convertir automatiquement les types de données
    protected $casts = [
        'news' => 'boolean',
        'price' => 'decimal:2'
    ];
    
    // Liaison ELOQUENT BELONGS TO pour lire le contenu de la catégorie du produit
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

}

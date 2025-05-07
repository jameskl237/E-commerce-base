<?php

namespace App\Repositories;
use App\Models\Product;

class ProductRepository extends BaseRepository
{
    public function __construct(Product $product)
    {
        parent::__construct($product);
    }

    public function getAllProductsWithCategories()
    {
        return $this->model::with('categories')->get();
    }

    public function getProductWithCategory($id)
    {
        return $this->model::with('category')->find($id);
    }

    public function getProductWithMedias($id)
    {
        return $this->model::with('medias')->find($id);
    }
}
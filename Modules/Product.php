<?php

namespace DataCue\Modules;

class Product extends Base
{
    public function create($productData)
    {
        echo 'call create';
    }

    public function batchCreate($productDataList)
    {

    }

    public function update($productId, $variantId, $productData)
    {

    }

    public function batchUpdate($productDataList)
    {

    }

    public function delete($productId, $variantId = null)
    {

    }

    public function batchDelete($productAndVariantIdList)
    {

    }
}

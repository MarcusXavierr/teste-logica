<?php
namespace App;

class ProductStructure
{
    private $products = [
        "preto-PP",
        "preto-M",
        "preto-G",
        "preto-GG",
        "preto-GG",
        "branco-PP",
        "branco-G",
        "vermelho-M",
        "azul-XG",
        "azul-XG",
        "azul-XG",
        "azul-P"
    ];

    public function make(): array
    {

        $array = [];
        foreach($this->products as $product)
        {
            $productData = explode('-', $product);
            $productName = $productData[0];
            $productSize = $productData[1];

            //verifico se a chave existe, se não existir eu adiciono ela no array
            if(!array_key_exists($productName, $array))
            {
                $array[$productName] = [];
            }
            
            //verifico se a chave do subarray existe
            if(!array_key_exists($productSize, $array[$productName]))
            {
                $array[$productName][$productSize] = 1;
            }
            else
            {
                $array[$productName][$productSize]++;
            }
        }
        return $array;
    }

}
<?php

namespace Nin\EnterpriseAppTemplate\Repository\Repository;

use Nin\EnterpriseAppTemplate\Repository\Entity\Product;

class ProductRepository
{
    protected IdentityMap $identityMap;

    public function __construct()
    {
        $this->identityMap = new IdentityMap();
    }

    /**
     * Поиск продуктов по массиву id
     *
     * @param int[] $ids
     * @return Product[]
     * @throws OutOfBoundsException
     */
    public function search(array $ids = []): array
    {
        if (!count($ids)) {
            return [];
        }

        $productList = [];

        foreach ($this->getDataFromSource(['id' => $ids]) as $item) {
            $product = $this->getProduct($item);
            $productList[] = $product;
        }

        return $productList;
    }

    /**
     * Получаем все продукты
     *
     * @return Product[]
     * @throws OutOfBoundsException
     */
    public function fetchAll(): array
    {
        $productList = [];
        foreach ($this->getDataFromSource() as $item) {
            $productList[] = $this->getProduct($item);
        }

        return $productList;
    }

    /**
     * Получаем продукты из источника данных
     *
     * @param array $search
     *
     * @return array
     */
    private function getDataFromSource(array $search = []): array
    {
        $dataSource = [
            [
                'id' => 1,
                'name' => 'PHP',
                'price' => 15300,
            ],
            [
                'id' => 2,
                'name' => 'Python',
                'price' => 20400,
            ],
            [
                'id' => 3,
                'name' => 'C#',
                'price' => 30100,
            ],
            [
                'id' => 4,
                'name' => 'Java',
                'price' => 30600,
            ],
            [
                'id' => 5,
                'name' => 'Ruby',
                'price' => 18600,
            ],
            [
                'id' => 8,
                'name' => 'Delphi',
                'price' => 8400,
            ],
            [
                'id' => 9,
                'name' => 'C++',
                'price' => 19300,
            ],
            [
                'id' => 10,
                'name' => 'C',
                'price' => 12800,
            ],
            [
                'id' => 11,
                'name' => 'Lua',
                'price' => 5000,
            ],
        ];

        if (!count($search)) {
            return $dataSource;
        }

        $productFilter = function (array $dataSource) use ($search): bool {
            return in_array($dataSource[key($search)], current($search), true);
        };

        return array_filter($dataSource, $productFilter);
    }

    /**
     * @param $item
     * @return mixed
     * @throws OutOfBoundsException
     */
    public function getProduct($item): Product
    {
        if (true === $this->identityMap->hasId($item['id'])) {
            $product = $this->identityMap->getObject($item['id']);
        } else {
            $product = new Product($item['id'], $item['name'], $item['price']);
            $this->identityMap->set($item['id'], $product);
        }
        return $product;
    }
}
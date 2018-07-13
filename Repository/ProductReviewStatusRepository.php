<?php

/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plugin\ProductReview\Repository;

use Eccube\Repository\AbstractRepository;
use Plugin\ProductReview\Entity\ProductReviewConfig;
use Plugin\ProductReview\Entity\ProductReviewStatus;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * ProductReview Status.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductReviewStatusRepository extends AbstractRepository
{
    /**
     * ProductReviewStatusRepository constructor.
     * @param RegistryInterface $registry
     */
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, ProductReviewStatus::class);
    }
}

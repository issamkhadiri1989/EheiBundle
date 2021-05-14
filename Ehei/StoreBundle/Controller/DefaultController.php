<?php

declare(strict_types=1);

namespace Ehei\StoreBundle\Controller;

use App\Ehei\StoreBundle\Service\Store;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/ehei", name="ehei_store_")
 */
class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     * @param Store $store
     * @return Response
     */
    public function index(Store $store)
    {
        $store->example();
        return new Response('This is the response from Ehei Bundle');
    }
}
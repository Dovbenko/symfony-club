<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController
{
    #[Route('/product/{id}', methods: ['GET'])]
    public function show(int $id): Response
    {
        return new Response( "Product show (GET) id={$id}" );
    }

    #[Route('/product', methods: ['POST'])]
    public function create(): Response
    {
        return new Response( "Product create (POST)" );
    }

    #[Route('/product/{id}', methods: ['PUT'])]
    public function replace(int $id): Response
    {
        return new Response( "Product replace (PUT) id={$id}" );
    }

    #[Route('/product/{id}', methods: ['PATCH'])]
    public function update(int $id): Response
    {
        return new Response( "Product update (PUT) id={$id}" );
    }

    #[Route('/product/{id}', methods: ['DELETE'])]
    public function delete(int $id): Response
    {
        return new Response( "Product delete (DELETE) id={$id}" );
    }
}

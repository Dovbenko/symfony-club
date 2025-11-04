<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CatalogController
{
    #[Route('/catalog/{id}', methods: ['GET'])]
    #[Route('/catalog/{id}/page/{page}', methods: ['GET'])]
    public function show(int $id, int $page = 0): Response
    {
        return new Response( "Catalog show (GET) id={$id} and page={$page}" );
    }

    #[Route('/catalog', methods: ['POST'])]
    public function create(): Response
    {
        return new Response( "Catalog create (POST)" );
    }

    #[Route('/catalog/{id}', methods: ['PUT'])]
    public function replace(int $id): Response
    {
        return new Response( "Catalog replace (PUT) id={$id}" );
    }

    #[Route('/catalog/{id}', methods: ['PATCH'])]
    public function update(int $id): Response
    {
        return new Response( "Catalog update (PUT) id={$id}" );
    }

    #[Route('/catalog/{id}', methods: ['DELETE'])]
    public function delete(int $id): Response
    {
        return new Response( "Catalog delete (DELETE) id={$id}" );
    }
}

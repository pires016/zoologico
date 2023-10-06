<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController

{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Olá, Mundo!');
    }

    //Posso ter quantas rotas eu quiser, porém tenho que mudar o lugar de rota Route('') e o nome dela no public function

    #[Route('/dioguinho')]
    public function dioguinho(): Response
    {
        return new Response('Olá, Dioguinho!');
    }

    #[Route('/cachorros')]
    public function cachorros(): Response
    {
        return new Response('Olá, Cachorros!');
    }

    #[Route('/cobras')]
    public function cobras(): Response
    {
        return new Response('Olá, cobras!');
    }

    #[Route('/wabzinho')]
    public function wabzinho(): Response
    {
        return new Response('Olá, wabers!');
    }

    #[Route('/felinos')]
    public function felinos(): Response
    {
        return new Response('Olá, felinos!');
    }
}
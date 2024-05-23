<?php

namespace App\Controller;

use App\Entity\Menufacturer;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ManufacturerController
{
    public function __invoke(Request $request, EntityManagerInterface $entityManager): Menufacturer|Response
    {
        $menufacturer = new Menufacturer();
        $menufacturer->setName($request->request->get('name'));
        $menufacturer->setDescription($request->request->get('description'));
        $menufacturer->setCountryCode($request->request->get('country_code'));
        $menufacturer->setListedDate(new \DateTimeImmutable());
        $menufacturer->setFile(file: $request->files->get('image'));
        $entityManager->persist($menufacturer);
        $entityManager->flush();

        if ($menufacturer->getName()) {
            return new Response('File uploaded successfully with name: ' . $menufacturer->getImage(), Response::HTTP_OK);
        }

        return $menufacturer;
    }
}
<?php
 namespace App\Controller;

 use App\Entity\Video;
 use Doctrine\ORM\EntityManagerInterface;
 use JetBrains\PhpStorm\NoReturn;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\HttpFoundation\Response;
 use Symfony\Component\HttpFoundation\Request;
 use Symfony\Contracts\Service\ServiceSubscriberInterface;

 class VideoUploadController
 {
      public function __invoke(Request $request, EntityManagerInterface $entityManager): Video|Response
     {
         $video = new Video();
//         $video->setName(name: $request->request->get('title'));
         $video->setTitle(title: $request->request->get('title'));
         $video->setFile(file: $request->files->get('file'));
         $video->setUpdatedAt(updatedAt: new \DateTimeImmutable());
         $entityManager->persist($video);
         $entityManager->flush();

          if ($video->getName()) {
              return new Response('File uploaded successfully with name: ' . $video->getName(), Response::HTTP_OK);
          }

         return $video;
     }

 }
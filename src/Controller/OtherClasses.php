<?php


namespace App\Controller;
//
//
//use App\Entity\Post;
//use Michelf\MarkdownInterface;
//use Symfony\Component\Cache\Adapter\AdapterInterface;
//use Symfony\Component\HttpFoundation\JsonResponse;
//use Symfony\Component\HttpFoundation\Response;
//use Twig\Environment;
//
class OtherClasses
{
//    /**
//     * @Route("/article/{slug}", name="article_asteroid")
//     */
//
//    public function newpage($slug, Environment $twigEnvironment, AdapterInterface $cache, MarkdownInterface $markdown)
//    {
//        $coments = [
//            'aaaa', 'bbbb', ' cvcv', 'sdsaf'
//        ];
//
//        $content = <<<EOF
//        jskasdkjsvd **akwejdalkjelwka**
// [beef](https:\\google.com)
//EOF;
//        $content = $markdown->transform($content);
//        $item = $cache->getItem('markdown_' . md5($articleContent));
//        if (!$item->isHit()) {
//            $item->set($markdown->transform($articleContent));
//            $cache->save($item);
//        }
//        $content = $item->get();
//
//        $html = $twigEnvironment->render('show.html.twig', [
//            'title' => ucwords(str_replace("-", " ", $slug)),
//            'comments' => $coments,
//            'content' => $content,
//            'slug' => $slug,
//        ]);
//        return new Response($html);
//    }
//
//    /**
//     * @Route("/article/{slug}/heart",methods="POST", name="article_count")
//     */
//
//    public function toggleArticleHeart($slug)
//    {
//
//        return new JsonResponse(['hearts' => rand(5, 100)]);
//    }
//
//    /**
//     * @Route("/forms")
//     */
//
//    public function postforms()
//    {
//        $post=new Post();
//        $post->setTitle("annannana");
//        $post->setDescription("Detestesasxct");
//        $post->setNumber(5);
//        $em=$this->getDoctrine()->getManager();
//        $em->persist($post);
//        $em->flush();
//
//
//        return $this->render('templates.html.twig',[
//            'post'=> $post->getDescription(),
//        ]);
//    }
//    /**
//     * @Route("/dump")
//     */
//    public function getForms(){
//        $em = $this->getDoctrine()->getManager();
//        $posts = $em->getRepository('App:Post')
//            ->findAll();
////        dump($posts);
////        die;
//
//        return $this->render('list.html.twig',[
//            'posts'=>$posts,
//        ]);
//    }
//
//    /**
//     * @Route("/dump/{formName}",name ="one_form")
//     */
//    public function oneForm($formName){
//
//        $funFact = 'Octopuses can change the color of their body in just *three-tenths* of a second!';
////
////        $cache = $this->get('doctrine_cache.providers.my_markdown_cache');
////        $key = $formName;
////        if ($cache->contains($key)) {
////            $funFact = $cache->fetch($key);
////        } else {
////            sleep(1); // fake how slow this could be
////            $funFact = $this->get('markdown.parser')
////                ->transform($funFact);
////            $cache->save($key, $funFact);
////        }
////        $this->get('logger')
////            ->info('Showing genus: '.$formName);
//        $em = $this->getDoctrine()->getManager();
//        $formName = $em->getRepository('App:Post')
//            ->findOneBy(['title' => $formName]);
//        dump($formName);
//        if (!$formName) {
////            throw $this->createNotFoundException('genus not found');
//            return $this->render('404.html.twig');
//        }
//        elseif ($formName) {
//            return $this->render('listone.html.twig', [
//                'title' => $formName,
//                'funfact' => $funFact,
//            ]);
//        }
//    }
}
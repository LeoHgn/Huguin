<?php


namespace App\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloWorldControler extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
/**
 *  Controller "hello world" affiche chaine dans le navigateurz
 * @param $prenom le prenom à afficher
 * @return Response
 */
function hello($prenom):Response{
    $returnString ="Hello $prenom";
    return $this->render( 'hello.html.twig',[
        'prenom'=>$prenom
    ]);
}

/**
 * Affiche un formulaire HTML
 * @return Response
 */
function form():Response{
    return new Response("<html>
    <body>
    <form methode='POST'>
    Nom : <input name='name'/>
    <input type=''submit'/>
    </form>
</body>
</html>");
}

function formReceive(Request $request):Response{
    $name = $request->request->get('name');
    return new Response("Merci $name");
}
function helloListe():Response{
    $liste = ['Bernard', 'Jean', 'Daniel', 'Patrick'];
    return $this->render('helloListe.html.twig',['liste'=>$liste]);
}
}
<?
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BackendController extends Controller
{

    /**
     * @Route("/admin", name="adminHomepage")
     */
    public function indexAction(Request $request)
    {
        $entries = $this->getDoctrine()->getRepository("AppBundle:Entries")->findAll();
        $categories = $this->getDoctrine()->getRepository("AppBundle:Category")->findAll();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'entries' => $entries,
            'categories' => $categories
        ]);
    }
}
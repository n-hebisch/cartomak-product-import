<?php
/**
 * Created by PhpStorm.
 * User: niklas
 * Date: 12.11.18
 * Time: 13:38
 */

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductImportController
{
    /**
     * @Route("/import")
     */
    public function productImportAction()
    {

        return new Response(
            '<html><body>Hey</body></html>'
        );
    }
}

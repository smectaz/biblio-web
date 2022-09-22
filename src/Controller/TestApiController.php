<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestApiController extends AbstractController
{
    #[Route('/test/api', name: 'app_test_api')]
    public function index(HttpClientInterface $httpClient): Response
    {
        $response = $httpClient -> request(
            'GET',
            'https://127.0.0.1:8000/apip/books?page=1&bearer=eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2NjM4Nzc4MDIsImV4cCI6MTY2Mzg4MTQwMiwicm9sZXMiOlsiUk9MRV9BRE1JTiIsIlJPTEVfVVNFUiJdLCJ1c2VybmFtZSI6ImFkbWluQGJvb2thcGkuY29tIn0.VWLE292OH_dO4EqS2F05phMrtfz0ZF3waNNRAzcBQaJNoC2jPwWCWFaEIlApR2dSUyJHQz3Cqb_PFod1waQi1rJWA7efYId1wW2G4I7zP4uzNNYyeUEqPDw1Yl6z_vGnr5iQcCsjdaZbTO5cX-80lX0_tnF3jgjLpPrJ-SvjehT_MS8nfDXkEygipheHfdu5C1qU_wzujnEoAa_pZ994mYGJKRPGlxZX1dRMYx7u1agsUL_zPZ-j1QFxQiAupfg3UtAtYu6Pkw9jckOmtIFk4JPewf2zG0YJAnPJFMHAnwT4CAVcXITWWFYZ2aZ5ouyItgiJhUB8AILxcfSciG2TbUr9Ry2OBBJAihfdkKBj6H8lYBcq_bF8UXkF4n2XybU4EP2LEiooSu6XOHW8nn47DXD-2tLdA7gc5oPUeHiikrdrNnhzZJh-jkBOZWgHKeCZir-GePSDhFyWPvhZxI42bcum_IjmZuGGwe1sJ3sqtQW7VNt1x7q-ny-9gwrjg8q7GUrIHM2B1QZg-v6AaRClLdV1xUESe5kyhVwNRxEEqWczU6Iifhq-B3cna4WXR0PsL8JQLpTs2oGnbvLGrXL7WKd0iIsOiT__14O94CcxiIb_as_5s0nnLQM6wM8PBaGjs_B3Ht8sQcBaQsar3uiuWIzYfLMcgJdGcaHeksGdERQ'
        );

        return $this->render('test_api/index.html.twig', [
            'controller_name' => $response
        ]);
    }
}

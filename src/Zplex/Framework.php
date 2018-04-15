<?php

namespace Zplex;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;

class Framework
{
    protected $matcher;
    protected $resolver;

    public function __construct(UrlMatcher $matcher, ControllerResolver $resolver)
    {
        $this->matcher = $matcher;
        $this->resolver = $resolver;
    }


    public function handle(Request $request)
    {
        $this->matcher->getContext()->fromRequest($request);

        try {
            $request->attributes->add($this->matcher->match($request->getPathInfo()));

            $controller = $this->resolver->getController($request);

            $arguments = $this->resolver->getArguments($request, $controller);



            return call_user_func_array($controller, $arguments);
        } catch (ResourceNotFoundException $e) {
            return new Response('Not fund', 404);
        } catch (\Exception $e){
            return new Response ('An error occurent: ' . $e->getMessage() . '<br /> File ' . $e->getFile() . ' <br />Line: ' . $e->getLine());

        }
    }
}
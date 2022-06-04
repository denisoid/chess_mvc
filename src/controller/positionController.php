<?php

namespace Denis\Chess\Controller;


class PositionController extends Controller
{


    function view($params)
    {
        if (!array_key_exists('id', $params)) {
            throw new \Exception('Param id not provided');
        }

        $id = (int)$params['id'];

        $position = $this->Model->findById($id)[0];

        $this->render('view', compact('position'));
    }


    function index()
    {
        $positions = $this->Model->findAll();
        $this->render('index', compact('positions'));
    }
}

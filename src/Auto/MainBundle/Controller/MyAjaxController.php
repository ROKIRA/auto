<?php

namespace Auto\MainBundle\Controller;

use Auto\MainBundle\Entity\Comment;
use Auto\MainBundle\Entity\ZayavkaAuto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Validator\Constraints\DateTime;

class MyAjaxController extends Controller
{
    /* ПОЛУЧЕНИЯ МОДЕЛЕЙ АВТОМОБИЛЯ ДЛЯ ПОЛЯ */
    public function getModelsAction(){
        header('Content-Type: application/json');

        $request = $this->container->get('request');
        $data = $request->request->get('mark_id');

        $model = $this->getDoctrine()
            ->getRepository('AutoMainBundle:Model');

        $query = $model->createQueryBuilder('m')
            ->where("m.mark_id=$data")
            ->getQuery();

        $models = $query->getResult();

        $model = array();

        for($i = 0; $i < count($models); $i++){
            $model[$i]['id'] = $models[$i]->getId();
            $model[$i]['model'] = $models[$i]->getModel();
        }

        $response = array("code" => 100, "success" => true, "models" => $model);

        return new Response(json_encode($response));
    }

    /* ПОЛУЧЕНИЯ ГОДОВ ВЫПУСКА АВТОМОБИЛЯ ДЛЯ ПОЛЯ */
    public function getCarYearAction(){
        header('Content-Type: application/json');

        $request = $this->container->get('request');
        $data = $request->request->get('model_id');

        $year = $this->getDoctrine()
            ->getRepository('AutoMainBundle:CarYear');

        $query = $year->createQueryBuilder('y')
            ->where("y.model_id=$data")
            ->getQuery();

        $years = $query->getResult();

        $year = array();

        for($i = 0; $i < count($years); $i++){
            $year[$i]['id'] = $years[$i]->getId();
            $year[$i]['year'] = $years[$i]->getYear();
        }

        $response = array("code" => 100, "success" => true, "year" => $year);

        return new Response(json_encode($response));
    }

    /* ПОЛУЧЕНИЯ ГОРОДОВ ДЛЯ ПОЛЯ */
    public function getCityAction(){
        header('Content-Type: application/json');

        $request = $this->container->get('request');
        $data = $request->request->get('region_id');

        $city = $this->getDoctrine()
            ->getRepository('AutoMainBundle:City');

        $query = $city->createQueryBuilder('c')
            ->where("c.region_id=$data")
            ->getQuery();

        $cities = $query->getResult();

        $city = array();

        for($i = 0; $i < count($cities); $i++){
            $city[$i]['id'] = $cities[$i]->getId();
            $city[$i]['name'] = $cities[$i]->getName();
        }

        $response = array("code" => 100, "success" => true, "city" => $city);

        return new Response(json_encode($response));
    }



    public function newZayavkaAction(){
        header('Content-Type: application/json');

        $em = $this->getDoctrine()->getManager();

        $session = $this->get('session');

        $request = $this->container->get('request');

            $region = $request->request->get('region');
            $mark = $request->request->get('mark');
            $model = $request->request->get('model');
            $year_from = $request->request->get('year_from');
            $year_to = $request->request->get('year_to');
            $run_from = $request->request->get('run_from');
            $run_to = $request->request->get('run_to');
            $price_from = $request->request->get('price_from');
            $price_to = $request->request->get('price_to');
            $body = $request->request->get('body');
            $color = $request->request->get('color');
            $new = $request->request->get('new_old');
            $description = $request->request->get('description');

        $zayavka = new ZayavkaAuto();
        $error = '';

        $zayavka->setNew($new);
        if(isset($region) && !empty($region)){
            $zayavka->setRegion($region);
        }
        if(isset($mark) && !empty($mark) && $mark != 'Выберите марку'){
            $zayavka->setMark($mark);
        }else{
            $error .= 'Не выбрана марка автомобиля';
            $response = array("code" => 200, "success" => false, 'error' => $error);
            return new Response(json_encode($response));
        }

        if(isset($model) && !empty($model) && $model != 'Выберите модель'){
            $zayavka->setModel($model);
        }
        if(isset($year_from) && !empty($year_from) && $year_from != 'Укажите год выпуска'){
            $zayavka->setYearFrom($year_from);
        }
        if(isset($year_to) && !empty($year_to) && $year_to != 'Укажите год выпуска'){
            $zayavka->setYearTo($year_to);
        }
        if(isset($run_from) && !empty($run_from)){
            $zayavka->setRunFrom(abs((int)$run_from));
        }else{
            $zayavka->setRunFrom(0);
        }
        if(isset($run_to) && !empty($run_to)){
            $zayavka->setRunTo(abs((int)$run_to));
        }else{
            $zayavka->setRunTo(1000000);
        }
        if(isset($price_from) && !empty($price_from)){
            $zayavka->setPriceFrom(abs((int)$price_from));
        }
        if(isset($price_to) && !empty($price_to)){
            $zayavka->setPriceTo(abs((int)$price_to));
        }
        if(isset($body) && !empty($body)){
            $zayavka->setBody($body);
        }
        if(isset($color) && !empty($color)){
            $zayavka->setColor($color);
        }
        if(isset($description) && !empty($description)){
            $zayavka->setDescription($description);
        }

        $zayavka->setUserId($session->get('user_id'));
        $zayavka->setDateAdd(new \DateTime('now'));
        $zayavka->setDateUpdate(new \DateTime('now'));

            $em->persist($zayavka);
            $em->flush();

        $response = array("code" => 100, "success" => true,
            'new' => $zayavka->getNew(),
            'region' => $zayavka->getRegion(),
            'mark' => $zayavka->getMark(),
            'model' => $zayavka->getModel(),
            'year_from' => $zayavka->getYearFrom(),
            'year_to' => $zayavka->getYearTo(),
            'body' => $zayavka->getBody(),
            'price_from' => $zayavka->getPriceFrom(),
            'price_to' => $zayavka->getPriceTo(),
            'run_from' => $zayavka->getRunFrom(),
            'run_to' => $zayavka->getRunTo(),
            'color' => $zayavka->getColor(),
            'description' => $zayavka->getDescription(),
            'user_id' => $session->get('user_id'));

        return new Response(json_encode($response));
    }

    public function addCommentAction(){
        header('Content-Type: application/json');

        $em = $this->getDoctrine()->getManager();
        $session = $this->get('session');

        // GETTING USER NAME AND EMAIL FROM SESSION IF ONE IS AUTH
        $user_id = $session->get('user_id');
        $user_name = $session->get('user_name');
        $user_email = $session->get('user_email');

        $request = $this->container->get('request');

        $name = trim($request->request->get('name'));
        if(isset($user_name) && !empty($user_name)){
            $name = $user_name;
        }
        $email = trim($request->request->get('email'));
        if(isset($user_email) && !empty($user_email)){
            $email = $user_email;
        }
        $text = trim($request->request->get('text'));
        $auto_id = $request->request->get('auto_id');
        $parent_id = $request->request->get('parent_id');

        $comment = new Comment();
        $error = '';

        if(isset($user_id) && !empty($user_id)){
            $comment->setIdUser($user_id);
        }
        if(isset($name) && !empty($name) && !is_null($name) ){
            $comment->setName($name);
        }else{
            $error .= '<li>Необходимо ввести имя!</li>';
        }
        if(isset($email) && !empty($email) && !is_null($email) ){
            $comment->setEmail($email);
        }else{
            $error .= '<li>Необходимо ввести email!</li>';
        }
        if(isset($text) && !empty($text) && !is_null($text) ){
            $comment->setText($text);
        }else{
            $error .= '<li>Поле комментария не должно быть пустым!</li>';
        }

        if($error == ''){
            $comment->setDateAdd(new \DateTime('now'));
            $comment->setIdAuto($auto_id);
            $comment->setParentId($parent_id);
            $comment->setPublic(1);

            $em->persist($comment);
            $em->flush();

            $date = date_format($comment->getDateAdd(), 'd.m.Y, H:i');

            $response = array("code" => 100, "success" => true,
                'comment_id' => $comment->getId(),
                'name' => htmlspecialchars($name),
                'email' => htmlspecialchars($email),
                'text' => htmlspecialchars($text),
                'date' => $date,
            );
        }else{

            $response = array("code" => 200, "success" => false,
                'name' => htmlspecialchars($name),
                'email' => htmlspecialchars($email),
                'text' => htmlspecialchars($text),
                'error' => $error,
            );
        }



        return new Response(json_encode($response));
    }

}
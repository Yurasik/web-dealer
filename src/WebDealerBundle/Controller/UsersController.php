<?php

namespace WebDealerBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller
{

    public function registerAction()
    {
//        $user_model = $this->loadModel('Users');
//
//        if(null !== $user_model->request('register')){
//            $user_model->register();
//        }
//
//        if(isset($_SESSION['email'])){
//            $this->redirect('/');
//        }
//
//        if(isset($_COOKIE['email'])){
//            $data['email'] = $_COOKIE['email'];
//        }
//        $data['message'] = Model::getMessage();
        return $this->render('Users/register.html.twig');
    }

    public function loginAction()
    {
//        $user_model = $this->loadModel('Users');
//
//        if(null !== $user_model->request('authorization')){
//            $user_model->authorization();
//        }
//
//        if(isset($_SESSION['email'])){
//            $this->redirect('/');
//        }
//
//        if(isset($_COOKIE['email'])){
//            $data['email'] = $_COOKIE['email'];
//        }
//        $data['message'] = Model::getMessage();
        return $this->render('Users/authorization.html.twig');
    }

    public function logoutAction()
    {
        unset($_SESSION['email']);
        $this->redirect('/');
    }

    public function profileAction()
    {
        $data['title'] = 'Страница пользователя';
        return $this->render('WebDealerBundle:Users:profile.html.twig', $data);
    }

    public function submit_articleAction()
    {
//        $news_model = $this->loadModel('News');
//        $data['title'] = 'Предложить новость';
//        $data['category'] = $news_model->getCategory();
//
//        if(null !== $news_model->request('save')){
//            $title = $news_model->request('title');
//            $full_text = $news_model->request('full_text');
//            $description = $news_model->getDescription($full_text);
//            $category_id = $news_model->request('category');
//            $author_id = $news_model->getAuthorId($_SESSION['email']);
//            $date = date('d-m-Y');
//            $values = array(
//                'category_id' => $category_id,
//                'author_id' => $author_id['id'],
//                'title' => $title,
//                'description' => $description,
//                'full_text' => $full_text,
//                'date' => $date,
//                'status' => 'moderation');
//
//            $user_model = $this->loadModel('Users');
//
//            if($user_model->addArticle($values)){
//                $user_model->redirect('/news');
//            }
//        }
//
//        $data['submit_news'] = true;
        return $this->render('Users/profile.html.twig', $data);
    }
}
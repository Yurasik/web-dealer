<?php

namespace WebDealerBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
//    function __construct()
//    {
//        $this->checkStaff();
//        parent::__construct();
//    }
//
//    protected function checkStaff()
//    {
//        $admin_model = $this->loadModel('Admin');
//
//        if(isset($_SESSION['email'])){
//            $role = Model::isStaff($_SESSION['email']);
//            if ($role != 'admin'){
//                $admin_model->redirect('/login');
//            }
//        } else {
//            $admin_model->redirect('/login');
//        }
//    }

    public function indexAction()
    {
        return $this->render('WebDealerBundle:Admin:admin_main.html.twig');
    }

    public function newsAction()
    {
//        $admin_model = $this->loadModel('Admin');
//        $data['news'] = $admin_model->getNews();
        return $this->render('WebDealerBundle:Admin:admin_news.html.twig');
    }

    public function articleAddAction()
    {
//        $admin_model = $this->loadModel('Admin');
//        $data['category'] = $admin_model->getCategory();
//
//        if(null !== $admin_model->request('save')){
//            $title = $admin_model->request('title');
//            $full_text = $admin_model->request('full_text');
//            $description = $admin_model->getDescription($full_text);
//            $category_id = $admin_model->request('category');
//            $author_id = $admin_model->getAuthorId($_SESSION['email']);
//            $date_model = new DateTime();
//            $date = $date_model->getTimestamp();
//            $values = array(
//                'category_id' => $category_id,
//                'author_id' => $author_id['id'],
//                'title' => $title,
//                'description' => $description,
//                'full_text' => $full_text,
//                'date' => $date,
//                'status' => 'published');
//            if($admin_model->addArticle($values)){
//                $admin_model->redirect('/admin/news');
//            }
//        }
//        $data['article_add'] = true;

        return $this->render('WebDealerBundle:Admin:admin_news.html.twig');
    }

    public function articleEditAction($id)
    {
//        $admin_model = $this->loadModel('Admin');
//        $data['article_edit'] = $admin_model->getArticleById($id);
//        $data['category'] = $admin_model->getCategory();
//
//        if(null !== $admin_model->request('save')){
//            $title = $admin_model->request('title');
//            $full_text = $admin_model->request('full_text');
//            $description = substr($full_text, 0, 250);
//            $date_model = new DateTime();
//            $date = $date_model->getTimestamp();
//            $newValues = array(
//                'title' => $title,
//                'description' => $description,
//                'full_text' => $full_text,
//                'date' => $date);
//
//            if($admin_model->updateArticleById($id, $newValues)){
//                $admin_model->redirect('/admin/news');
//            }
//        }

        return $this->render('WebDealerBundle:Admin:admin_news.html.twig');
    }

    public function articleDeleteAction($id)
    {
//        $admin_model = $this->loadModel('Admin');
//        $admin_model->deleteArticleById($id);
//        $admin_model->redirect('/admin/news');
    }

    public function categoryAction()
    {
//        $admin_model = $this->loadModel('Admin');
//        $data['category'] = $admin_model->getCategory();
        return $this->render('WebDealerBundle:Admin:admin_news.html.twig');
    }

    public function categoryAddAction()
    {
//        $admin_model = $this->loadModel('Admin');
//        $data['category'] = $admin_model->getCategory();
//
//        if(null !== $admin_model->request('save')){
//            $parent_id = $admin_model->request('parent_id');
//            $category_name = $admin_model->request('category_name');
//            $values = array('parent_id' => $parent_id, 'category_name' => $category_name);
//
//            if($admin_model->addCategory($values)){
//                $admin_model->redirect('/admin/category');
//            }
//        }
//
//        $data['category_add'] = true;
        return $this->render('WebDealerBundle:Admin:admin_news.html.twig');
    }

    public function categoryEditAction($id)
    {
//        $admin_model = $this->loadModel('Admin');
//        $data['category_info'] = $admin_model->getCategoryById($id);
//        $data['category'] = $admin_model->getCategoryExceptId($id);
//
//        if(null !== $admin_model->request('save')){
//            $id = $admin_model->request('id');
//            $parent_id = $admin_model->request('parent_id');
//            $category_name = $admin_model->request('category_name');
//            $newValues = array('parent_id' => $parent_id, 'category_name' => $category_name);
//            if($admin_model->editCategoryById($id, $newValues)){
//                $admin_model->redirect('/admin/category');
//            }
//        }
//
//        $data['category_edit'] = true;
        return $this->render('WebDealerBundle:Admin:admin_news.html.twig');
    }

    public function categoryDeleteAction($id)
    {
//        $admin_model = $this->loadModel('Admin');
//        $admin_model->deleteCategoryById($id);
//        $admin_model->redirect('/admin/category');
    }
}
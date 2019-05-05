<?php

namespace Admin\Controller;

class PageController extends AdminController {

  public function listing() {
    $pageModel = $this->load->model('Page');
    $data['pages'] = $pageModel->repository->getPages();
    $this->view->render('pages/list', $data);
  }

  public function edit($id) {
    $pageModel = $this->load->model('Page');
    $data['page'] = $pageModel->repository->getPageData($id);
    $this->view->render('pages/edit', $data);
  }

  public function create() {
    $this->view->render('pages/create');
  }

  public function add() {
    $params = $this->request->post;
    $pageModel = $this->load->model('Page');

    $pageId = $pageModel->repository->createPage($params);
    echo $pageId;
  }

  public function update() {
    $params = $this->request->post;
    $pageModel = $this->load->model('Page');
    $pageModel->repository->updatePage($params);
  }
}

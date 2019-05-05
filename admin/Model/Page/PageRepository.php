<?php

namespace Admin\Model\Page;

use Core\Model;

class PageRepository extends Model {

  public function getPages() {
    $sql = $this->qb->select()
      ->from('page')
      ->orderBy('id', 'DESC')
      ->sql();

    return $this->db->query($sql);
  }

  public function getPageData($id) {
    $page = new Page($id);

    return $page->findOne();
  }

  public function createPage($params) {
    $page = new Page;
    $page->setTitle($params['title']);
    $page->setContent($params['content']);
    $pageId = $page->save();

    return $pageId;
  }

  public function updatePage($params) {
    if (isset($params['id'])) {
      $page = new Page($params['id']);
      $page->setTitle($params['title']);
      $page->setContent($params['content']);
      $page->save();
    }
  }
}

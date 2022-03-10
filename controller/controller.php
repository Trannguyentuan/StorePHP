<?php
include_once(__DIR__ . '/../model/repository.php');
include_once(__DIR__ . '/../model/DTO/productDTO.php');
//ham trung gian + xu ly product
class Controller{
    private $db;
    public function __construct(repository $repo) {
        $this->db = $repo;
    }
    
    public function getAllProduct()
    {
        return $this->db->getAllProduct();
    }
    public function getAllCategory()
    {
        return $this->db->getAllCategory();
    }
    public function getProductByCateId($cateid)
    {
        return $this->db->getProductByCategoryId($cateid);
    }
    public function getBestSell()
    {
        return $this->db->getBestSeller();
    }
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


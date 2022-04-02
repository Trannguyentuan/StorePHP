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
    public function getProductById($id) 
    {
        return $this->db->getProductById($id);
    }
    public function getProductByCateId($cateid)
    {
        return $this->db->getProductByCategoryId($cateid);
    }
    public function getBestSell()
    {
        return $this->db->getBestSeller();
    }
    public function getPopular()
    {
        return $this->db->getPopular();
    }
    public function getLatest()
    {
        return $this->db->getLatest();
    }
    public function getPriceUp()
    {
        return $this->db->getPriceUp();
    }
        public function getPriceDown()
    {
        return $this->db->getPriceDown();
    }
    public function getAZ()
    {
        return $this->db->getAZ();
    }
        public function getZA()
    {
        return $this->db->getZA();
    }
    public function getProduct_detailsById($id)
    {
        $this->db->getProduct_detailsById($id);
    }

    public function filter($cid,$sortby)
    {
        $popular=$this->db->getPopular();
        $latest=$this->db->getLatest();
        $priceup=$this->db->getPriceUp();
        $pricedown=$this->db->getPriceDown();
        $az=$this->db->getAZ();
        $za=$this->db->getZA();
        $filter=[];
        //$onlycid=$this->db->getProductByCategoryId($cateid);
        if(!empty($cid))//cate
        {//kiem tra co category                               
            if(!empty($sortby))// co category->kiem tra co filter ko// CATE+SORTBY
            {//vua category vua sortby
                
                if($sortby=='1')
                {
                    $filter= $this->db->getCategory_Latest($cid);
                }
                elseif ($sortby=='2') 
                {
                    $filter= $this->db->getCategory_Popular($cid);
                }
                elseif ($sortby=='3') 
                {
                    $filter= $this->db->getCategory_PriceUp($cid);
                }
                elseif ($sortby=='4') 
                {
                    $filter= $this->db->getCategory_PriceDown($cid);
                }
                elseif ($sortby=='5') 
                {
                    $filter= $this->db->getCategory_AZ($cid);
                }
                elseif ($sortby=='6') 
                {
                    $filter= $this->db->getCategory_ZA($cid);
                }
            }
            else//ko co sortby chi co cate->get product by categoryid
            {
                $filter=$this->db->getCategory_Latest($cid);
            }
        } 
        //ko co category->chi con sortby                                                    
        elseif(!empty($sortby))//check sortby
        {
            if($sortby=='1'){
               $filter=$latest; 
            }
            elseif ($sortby=='2') {
                $filter=$popular;
            }
            elseif ($sortby=='3') {
                $filter=$priceup;
            }
            elseif ($sortby=='4') {
                $filter=$pricedown;
            }
            elseif ($sortby=='5') {
                $filter=$az;
            }
            elseif ($sortby=='6') {
                $filter=$za;
            }
            //else{$sortby=$latest; }
        }
        else{$filter=$latest;}//ko co category+sortby-> lay sortby latest
        return $filter;
    }
}
/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


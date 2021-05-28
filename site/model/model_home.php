<?php

require_once '../system/database.php';
class model_home extends model_system{
      public function SaveTtTK($hoten, $email, $tentk, $pass_hash)
      {
          $sql = "INSERT INTO nguoidung (username, password, hoten, email) VALUES ('$tentk','$pass_hash','$hoten','$email')";
          $this->execute($sql);
          $last_id = $this->conn->lastInsertId();
          return $last_id;
      }
      function CheckLogin($tentk, $pass){
          $sql = "SELECT * FROM nguoidung WHERE username='$tentk' AND password='$pass'";
          return $this->queryOne($sql);
      }
      function GetALLBd(){
          $sql = "SELECT * FROM danhmuc";
          return $this->query($sql);
      }
      function Dangbai_($dm, $user, $img, $baiviet_new,$tieude){
        $sql = "INSERT INTO baiviet (iduser, iddm, img, noidung, thoigian, tieude) VALUES ('$user','$dm','$img','$baiviet_new',NOW(),'$tieude')";
        $this->execute($sql);
      }
      function InsertBinhLuan($id,$noidung,$idbv){
        $sql = "INSERT INTO binhluan (iduser, idbv, noidung, thoigian) VALUES ('$id','$idbv','$noidung',NOW())";
        $this->execute($sql);
      }
      function Insertthaoluan($id,$noidung){
        $sql = "INSERT INTO thaoluan (iduser, noidung, thoigian) VALUES ('$id','$noidung',NOW())";
        $this->execute($sql);
      }
      function GetBVByID($id){
          $sql = "SELECT * FROM baiviet WHERE idbv=".$id;
          return $this->queryOne($sql);
      }
      function getUser($id){
        $sql = "SELECT * FROM nguoidung WHERE idnd=".$id;
        return $this->queryOne($sql);
      }
      function getdm($id){
        $sql = "SELECT * FROM danhmuc WHERE iddm=".$id;
        return $this->queryOne($sql);
      }
      function GetNbbv(){
        $sql = "SELECT * FROM baiviet ORDER BY idbv ASC";
        return $this->queryOne($sql);
      }
      function GetAllNbbv(){
        $sql = "SELECT * FROM baiviet ORDER BY idbv DESC LIMIT 3";
        return $this->query($sql);
      }
      function ListBV_new(){
        $sql = "SELECT * FROM baiviet ORDER BY idbv DESC LIMIT 5";
        return $this->query($sql);
      }
      function User_DangBai($id){
        $sql = "SELECT * FROM nguoidung WHERE idnd=".$id;
        $name = $this->queryOne($sql);
        return $name['username'];
      }
      function Danhmuc_Bai($id){
        $sql = "SELECT * FROM danhmuc WHERE iddm=".$id;
        $name = $this->queryOne($sql);
        return $name['tendm'];
      }
      function ListBL($idbv){
        $sql = "SELECT * FROM binhluan WHERE idbv='$idbv' ORDER BY idbl DESC";
        return $this->query($sql);
      }
      function ListTL(){
        $sql = "SELECT * FROM thaoluan ORDER BY idtl ASC";
        return $this->query($sql);
      }
      function ListBV($page_num, $page_size){
        $start_size = ($page_num - 1) * $page_size;
        $sql = "SELECT * FROM baiviet ORDER BY idbv DESC LIMIT $start_size,$page_size";
        return $this->query($sql);
      }
      function CountBV(){
        $sql = "SELECT count(*) as sl FROM baiviet";
        $row = $this->queryOne($sql);
        return $row['sl'];
      }
      function base_url($page_num,$page_size,$rows_total,$base_url){
        $total_pages = ceil($rows_total / $page_size);
        if ($rows_total <= 0) return "Không có sản phẩm";
        if ($total_pages <= 0) return "Không có sản phẩm";

        $links = '<ul class="pagination justify-content-center mt-5">';
        // Trang đầu trang trước
        if ($page_num >= 2) {
            $pr = $page_num - 1;
            // $links .= "<li class='page-item'><a href='{$baseurl}' class='page-link'><</a></li>";
            $links .= "<li class='page-item'><a href='{$base_url}page={$pr}' class='page-link'>Trở lại</a></li>";
        }
        // -	Tạo item trang hiện hành : Code tiếp theo code tạo Trang đầu, Trang trước 
        for ($i = 1; $i <= $total_pages; $i++) {
            if ($page_num == $i) {
                $links .= "<li class='page-item active mr-0'><a href='{$base_url}page={$i}' class='page-link'>{$i}</a></li>";
            } else {
                $links .= "<li class='page-item'><a href='{$base_url}page={$i}' class='page-link'>{$i}</a></li>";
            }
        }
        //-	Tạo link Trang kế, Trang cuối (khi user không phải ở trang cuối) Code tiếp sau item trang hiện hành:
        //Trang kế , Trang cuối
        if ($page_num < $total_pages) {
            $pn = $page_num + 1;
            $links .= "<li class='page-item'><a href='{$base_url}page={$pn}' class='page-link'>Tiếp</a></li>";
        }
        // $links .= "<li class='page-item'><a href='{$baseurl}&page_num={$total_pages}' class= 'page-link'>></a></li>";
        $links .= '</ul>';
        return $links;
      }
}


?>
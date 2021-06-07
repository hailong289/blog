<?php

    /*  Database's posts functions  */

    include_once '../'.PATH::SYSTEM_CORE.'/model.php';

    class m_posts
    {
        private $__dtb;

        /**
         *      Hàm khởi tạo
         */
        public function __construct() {
            //  Gọi hàm khởi tạo của Database
            $this->__dtb = new Model(DTB::MAIN_NAME);
        }

        
        /**
         *      Get một record
         */
        public function getRecord(int $id)
        {
            $sql =
                "SELECT post.idbv as id, post.tieude as title, post.anhien as status, post.noidung as content,
                        post.tomtat as summary, DATE_FORMAT(post.thoigian, '%d/%m/%Y') as date,
                        users.username as author, post.img as image, cat.tendm
                    FROM baiviet post INNER JOIN nguoidung users ON post.iduser = users.idnd
                                    INNER JOIN danhmuc cat ON post.iddm = cat.iddm
                WHERE post.idbv = $id";

            return $this->__dtb->queryOne($sql);
        }

        /**
         *      Get tất cả record
         *      @param int $limit (default 0) -> Giới hạn số records lấy về
         *      @param int $start (default 0) -> Lấy từ record thứ $start
         *      @param string $order (default 'id') -> Sắp xếp theo: 'id', 'date'
         *      @param string $sort (default 'DESC') -> Thứ tự: 'DESC' (Giảm dần), 'ASC' (Tăng dần)
         */
        public function getAllRecords(int $limit = 0, int $start = 0, string $order = 'id', string $sort = 'DESC')
        {
            $arr_param = [
                'order' => ['id', 'sort'],
                'sort' => ['DESC', 'ASC']
            ];

            if (!in_array($order, $arr_param['order'])) {
                $order = 'idbv';
            }
            if (!in_array($sort, $arr_param['sort'])) {
                $sort = 'DESC';
            }

            $sql =
                "SELECT idbv as id, tieude as title, DATE_FORMAT(thoigian, '%d/%m/%Y') as date, thutu as sort, anhien as status
                    FROM baiviet ORDER BY $order $sort";

            if ($limit > 0) {
                $sql .= " LIMIT $start, $limit";
            }

            return $this->__dtb->query($sql);
        }
        /**
         *      Đếm tổng số records
         */
        public function countAllRecords()
        {
            $sql = "SELECT COUNT(idbv) as count FROM baiviet";

            return $this->__dtb->queryOne($sql);
        }
        
        /**
         *      Thêm mới 1 record
         */
        public function storeRecord(string $title, int $status, string $summary, string $content, int $author)
        {
            $sql =
                "INSERT INTO baiviet (tieude, tomtat, anhien, noidung, iduser)
                        VALUES ('$title', '$status', '$summary', '$content', '$author')";

            return $this->__dtb->getExec($sql);
        }
        /**
         *      Thêm ảnh bìa cho 1 record
         */
        public function storeImg(string $path, string $id_posts)
        {
            $sql =
                "UPDATE baiviet SET img = '$path' WHERE idbv = '$id_posts'";

            return $this->__dtb->execute($sql);
        }

        /**
         *      Xóa 1 record
         */
        public function dropRecord(string $id = NULL)
        {
            if (is_null($id)) {
                return false;
            }

            $sql =
                "DELETE FROM baiviet WHERE id IN ($id)";

            return $this->__dtb->execute($sql);
        }
        
        
        /**
         *      Hàm kết thúc
         */
        public function __destruct() {
            //  Unset hàm khởi tạo Database
            $this->__dtb = NULL;
        }

    }

?>
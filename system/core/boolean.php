<?php

    class Boolean
    {
        // public function isset($element)
        // {
        //     return (isset($element) && $element) ? true : false;
        // }

        // public function returnIsset($element)
        // {
        //     $bool = (isset($element) && $element) ? true : false;
        //     return ($bool == true) ? $element : NULL;
        // }

        public function issetURL($url, $return, $replacement)
        {
            return (! @(file_get_contents($url)))
                    ? $replacement
                    : (is_null($return) ? $url : $return);
        }

        public function checkNull()
        {
            $vals = func_get_args();
            $bool = true;
            foreach($vals as $val)
            {
                $bool = (($val == NULL) || ($val == '')) ? false : true;
                if($bool == false)
                    break;
            }
            return $bool;
        }

        public function array_removeNull($array)
        {
            foreach($array as $val)
            {
                if(($val == NULL) || ($val == ''))
                {
                    $index = array_search($val, $array);
                    array_splice($array, $index, 1);
                }
            }
            return $array;
        }

    }

?>
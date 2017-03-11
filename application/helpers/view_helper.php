<?php
/**
 * Created by PhpStorm.
 * User: Sajid
 * Date: 03-03-17
 * Time: 22.41
 */
defined('BASEPATH') OR exit('No direct script access allowed');
if ( ! function_exists('paginator')) {

    function paginator($max, $offset, $total, $url) {
        $html = "<ul class='pagination' max='$max' offset='$offset' total='$total'>".PHP_EOL;
        $currentPage = intval($offset / $max) + 1;
        $noOfPage = ceil($total/$max);
        $class = $currentPage == 1 ? "disabled" : "";
        $html =  $html."<li page='prev' class='$class'><a>&laquo;</a></li>".PHP_EOL;
        $d = $currentPage < 5 ? 10 - $currentPage : 5;
        $n = ($currentPage + $d) > $noOfPage ? $noOfPage : ($currentPage + $d);
        $i = $currentPage - 5 > 0 ? $currentPage - 5 : 1;
        for(; $i <= $n; $i++) {
            $class = $i == $currentPage ? "active" : "";
            $html =  $html."<li page='$i' class='$class' ><a href='". site_url($url)."?offset=". ($currentPage-1) * $max ."'>$i</a></li>".PHP_EOL;
        }
        $class = $currentPage == $noOfPage || $total < $max ?  "disabled" : "";
        $html = $html."<li page='next' class='$class'><a>&raquo;</a></li>".PHP_EOL;
        $html = $html.'</ul>';
        return $html;
    }
}
<?php

class MyTwig extends Twig_Extension
{
    public function getName()
    {
        return "MyTwig";
    }

    public function getFunctions()
    {
        $functions = [
            new Twig_SimpleFunction('pager', 'pager_function')
        ];
        return $functions;
    }

}

/**
 * @param $totalPage
 * @param $currentPage
 * @param $link
 */
function pager_function($totalPage, $currentPage, $link)
{
    $start = 1;
    $end = 5;
    if ($totalPage < 5) $end = $totalPage;
    if ($currentPage > 3 && $totalPage > 5) {
        $start = $currentPage - 2;
        if ($currentPage < $totalPage - 2) {
            $end = $currentPage + 2;
        } else {
            $end = $totalPage;
        }
    }
    $html = '';
    if ($totalPage > 1) {
        $html .= '<ul class="pagination">';
        if ($currentPage > 1) {
            $html .= '<li><a href="' . str_replace('{page}', $currentPage - 1, $link) . '">&laquo;</a>';
        }
        for ($i = $start; $i <= $end; $i++) {
            if ($currentPage == $i) {
                $html .= '<li class="active"><a href="#">' . $i . '</a></li>';
            } else {
                $html .= '<li><a href="' . str_replace('{page}', $i, $link) . '">' . $i . '</a></li>';
            }
        }
        if ($currentPage != $totalPage) {
            $html .= '<li><a href="' . str_replace('{page}', $currentPage + 1, $link) . '">&raquo;</a>';
        }
        $html .= '</ul>';
    }
    echo $html;
}
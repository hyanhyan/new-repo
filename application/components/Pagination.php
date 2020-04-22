<?php
/**
 * Created by PhpStorm.
 * User: Артур
 * Date: 18.04.2020
 * Time: 21:14
 */

namespace application\components;


class Pagination
{
    private $max = 8;
    private $total;
    private $current_page;
    private $notes_on_page;
    private $path;
    private $count;
    private $limit;

    public function __construct($total, $current_page, $notes_on_page, $path)
    {
        $this->path = $path;
        $this->total = $total;
        $this->current_page = $current_page;
        $this->notes_on_page = $notes_on_page;
        $this->count = $this->countOfPages();
    }

    public function html()
    {
        $html = '';
        $links = '';

        for ($i = $this->limit[0]; $i<=$this->limit[1]; $i++) {
           if ($i == $this->current_page) {
               $links .= '<a href="#" style="background-color: green; color: white" class="pag_link">'.$i.'</a>';
           } else {
               $links .= "<a href='{$this->path}{$i}}' style='background-color: lightseagreen; color: white' class='pag_link'>'.$i.'</a>";
           }
        }

        if ($this->current_page > 1) {
            $Page = $this->current_page - 1;
            $html .= "<a href='{$this->path}{$Page}}' style='background-color: lightseagreen; color: white' class='pag_link'>pre</a>";
        }

        $html .= $links;

        if ($this->current_page < $this->count) {
            $Page = $this->current_page + 1;
            $html .= "<a href='{$this->path}{$Page}}' style='background-color: lightseagreen; color: white' class='pag_link'>next</a>";
        }

        return $html;
    }

    private function limit()
    {
        $left = $this->current_page - round($this->max / 2);

        $start = $left > 0 ? $left : 1;

        if ($start + $this->max <= $this->count) {
            $end = $start > 1 ? $start + $this->max : $this->max;
        } else {
            $end = $this->count;
            $start = $this->count - $this->max > 0 ? $this->count - $this->max : 1;
        }

        return array($start, $end);
    }

    private function countOfPages()
    {
        return ceil($this->total / $this->notes_on_page);
    }



}
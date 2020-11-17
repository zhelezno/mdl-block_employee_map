<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Form for editing HTML block instances.
 *
 * @package   block_employee_map
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

class block_employee_map extends block_base {

   function init() {
      $this->title = '<a href="../local/employee_map_core/index.php">' . get_string('pluginname', 'block_employee_map') . "</a>";      
   }

   function get_content() {
      global $CFG, $DB;    
      
      if ($this->content !== NULL) {
         return $this->content;
      }        

      $users = $DB->get_records('user');
      
      $html = '';
      $html .= '
      <div class="container-fluid">
         <ul class="nav nav-tabs" id="employee_map_tab" role="tablist">
            <li class="nav-item">
               <a class="nav-link active" id="notstudied-tab" data-toggle="tab" href="#studied" role="tab" aria-controls="studied" aria-selected="true">Освоенные компетенции</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="notstudied-tab" data-toggle="tab" href="#notstudied" role="tab" aria-controls="notstudied" aria-selected="false">Неосвоенные компетенции</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="recommendation-tab" data-toggle="tab" href="#recommendation" role="tab" aria-controls="recommendation" aria-selected="false">Рекомендованные курсы и книги</a>
            </li>
         </ul>
         <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="studied" role="tabpanel" aria-labelledby="studied-tab">
            <br>
            Второй учебный план<br>
            Направление развития<br>
            Адаптационный план<br>
            <br>
            <a href="#">Ссылка1</a>
            <br>
            <a href="#">Ссылка2</a>
            <br><br>
            <h5><a href="#">Читаю книги</a> <span class="badge badge-secondary">3</span></h5>
            <h5><a href="#">Книги без отчета</a> <span class="badge badge-secondary">2</span></h5>
            <h5><a href="#">Значки</a> <span class="badge badge-secondary">5</span></h5>
            </div>
            <div class="tab-pane fade" id="notstudied" role="tabpanel" aria-labelledby="notstudied-tab">
            <br>
            <a href="#">Менеджер отдела продаж</a>
            <br><br><br>
            Hard Skills
            <div class="progress">
               <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>
            Soft Skills
            <div class="progress">
               <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br>
            Все компетенции отдела
            <div class="progress">
               <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <br><br><br>
            <div class="alert alert-primary" role="alert">
               Дата сдачи учебного плана: 01.01.2021
            </div>
            </div>  
            <div class="tab-pane fade" id="recommendation" role="tabpanel" aria-labelledby="recommendation-tab">              
               <br>
               <a href="#">Курс 1</a>
              <br>
              <a href="#">Курс 2</a>
              <br><br>
              <a href="#">Мои курсы</a>
            </div>
         </div>
      </div>
      ';

      $js = '';
      $js .= '<script>';
      $js .= '';
      $js .= '</script>';

      $content = '';
      $content .= $html;
      $content .= $js;    

      $this->content = new stdClass;   
      $this->content->text = $content;
      //$this->content->footer = 'Карта сотрудника';        
      return $this->content;
    }    
}

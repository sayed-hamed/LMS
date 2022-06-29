<?php

namespace App\Http\Controllers\admin;

use App\Blog;
use App\Courses;
use App\Http\Controllers\Controller;
//use App\Massege;
use App\Massege;
use App\Students;
use App\Trainers;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {

        $courses_count=Courses::count();
        $student_count=Students::count();
        $trainer_count=Trainers::count();
        $msg_count=Massege::count();
        $blogs_count=Blog::count();


        $charts = app()->chartjs
            ->name('barChartTest')
            ->type('bar')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['Courses','Students','Trainers','Contacts','Blogs'])
            ->datasets([
                [
                    "label" => "Count:",
                    'backgroundColor' =>['#ec5858', '#81b214','#ff9642','#5120F5'],
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => [$courses_count,$student_count,$trainer_count,$msg_count,$blogs_count],
                ],

            ])
            ->options([]);



        $charts2 = app()->chartjs
            ->name('pieChartTest')
            ->type('pie')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['Courses','Students','Trainers','Contacts','Blogs'])
            ->datasets([
                [
                    "label" => "Count:",
                    'backgroundColor' => ['#ec5858', '#81b214','#ff9642','#5120F5','#00bfff'],
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => [$courses_count,$student_count,$trainer_count,$msg_count,$blogs_count],
                ],

            ])
            ->options([]);










        return view('admin.dashboard',compact('charts','charts2'));
    }


}

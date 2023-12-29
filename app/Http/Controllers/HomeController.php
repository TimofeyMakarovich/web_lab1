<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $links = ["url1"=>"about_us","url2"=>"contact_page"];
        return view('home',compact('links'));
    }
    public function about()
    {
        $text="Магазин астрономии - уникальное место, которое приглашает любителей и профессионалов астрономии в волнующий и захватывающий мир Вселенной. Здесь вы найдете самые разнообразные астрономические товары, которые позволят вам погрузиться в изучение звезд, планет и глубокого космоса.";
        $about = ["url"=>"about_us","text"=>$text];
        return view('about',compact('about'));
    }
    public function contact()
    {
        $our_contact=["fio"=>"Тимофей Ясько","number_phone"=>"8(917)085-24-54"];
        return view('contact',compact('our_contact'));
    }
    public function result(Request $request)
    {
        $phone = $request->input('number_phone');
        $fio = $request->input('fio');
        $links = ["url1"=>"about_us","url2"=>"contact_page"];
        if (empty($phone) || empty($fio)){
            return view('home',compact('links'));
        }
        else{
            return view('home',compact('links','fio','phone'));
        }

    }
}

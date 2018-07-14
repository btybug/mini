<?php
/**
 * Created by PhpStorm.
 * User: menq
 * Date: 04.07.2018
 * Time: 14:25
 */

namespace Btybug\Mini\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Mini\Http\Requests\PageCreateRequest;
use App\Mini\Model\MiniPainter;
use App\Mini\Services\PagesService;
use Btybug\Console\Repository\FrontPagesRepository;
use Illuminate\Http\Request;

class ClientController extends MiniController
{
    public function account(Request $request)
    {
        $this->ennable($request);
        return $this->cms->run();
    }

    public function accountSettings(Request $request)
    {
        $this->ennable($request);
        return $this->cms->accountSettings();
    }

    public function accountGeneral(Request $request)
    {
        $this->ennable($request);
        return $this->cms->accountGeneral();
    }

    public function plugins(Request $request)
    {
        $this->ennable($request);
        return $this->cms->plugins();
    }

    public function pluginsSettings(Request $request)
    {
        $this->ennable($request);
        return $this->cms->pluginsSettings();
    }

    public function media(Request $request)
    {
        $this->ennable($request);
        return $this->cms->media();
    }

    public function mediaSettings(Request $request)
    {
        $this->ennable($request);
        return $this->cms->mediaSettings();
    }

    public function preferences(Request $request)
    {
        $this->ennable($request);
        return $this->cms->preferences();
    }

    public function extraPlugins(Request $request)
    {
        $this->ennable($request);
        return $this->cms->extraPlugins();
    }

    public function extraGears(Request $request)
    {
        $this->ennable($request);
        return $this->cms->extraGears();
    }

    public function editUserPage(Request $request,$id,PagesService $service,FrontPagesRepository $repository)
    {
        $service->editPage($request,$repository);
        return redirect()->back();
    }

    public function extraGearsOptimize(Request $request)
    {
        $this->ennable($request);
        MiniPainter::optimize();
        return redirect()->back();
    }

    public function extraPluginSettings(Request $request)
    {
        $this->ennable($request);
        return $this->cms->extraPluginSettings();
    }
}
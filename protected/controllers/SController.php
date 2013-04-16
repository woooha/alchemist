<?php 

class SController extends Controller{

    public function actions(){
        return array();
    }

    public function actionIndex( $srcs = '204,213,217,219', $mts = '' ){
        $srcs = explode(',', $srcs);
        Request::getBySrcAndMts($srcs, $mts);
    }
}

<?php

    namespace APP\Home\Controller;

    use HHTCore\Controller\Controller;
    use APP\Home\Model\UsersModel;

    class IndexController extends Controller {
    	public function index () {
    		$users = new UsersModel();

    		$res = $users->get()->where('id', '>', 2)->find();
    		var_dump($res);

    		$a = array('key1' => 'value1', 'key2' => 'value2');
    		$this->render('Header/index.php', $a);
    	}
    }
<?php
class APIController extends CController {
    public function filters(){
        return array(
            'accessControl',
            array(
                'ext.RESTFullYii.starship.RestfullYii.filters.ERestFilter +
                REST.GET, REST.PUT, REST.POST, REST.DELETE'
            ),
        );
    }

    public function accessRules()
    {
        return array(
            array('allow', 'actions'=>array('REST.GET', 'REST.PUT', 'REST.POST', 'REST.DELETE'),
                'users'=>array('*'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    public function actions()
    {
        return array(
            'REST.'=>'ext.RESTFullYii.starship.RestfullYii.actions.ERestActionProvider',
        );
    }
}

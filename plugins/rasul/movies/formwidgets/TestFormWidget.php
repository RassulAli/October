<?php namespace Rasul\Movies\FormWidgets;

use Backend\Classes\FormWidgetBase;
use Config;
use Rasul\Movies\Models\Actor;

/**
 * TestFormWidget Form Widget
 */
class TestFormWidget extends FormWidgetBase
{
    public function widgetDetails()
    {

        return [
            'name' => 'TestFormWidget',
            'descriptiopn' => 'Field for adding actors'
        ];

    }

    /**
     * @inheritDoc
     */
    protected $defaultAlias = 'rasul_movies_test_form_widget';

    /**
     * @inheritDoc
     */
    public function init()
    {
    }

    /**
     * @inheritDoc
     */
    public function render()
    {
        $this->prepareVars();
//        dump($this->vars['selectedValues']);
        return $this->makePartial('testformwidget');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['id'] = $this->model->id;

        $this->vars['actors'] = Actor::all()->lists('full_name','id');

        $this->vars['name'] = $this->formField->getName().'[]';

        if(!empty($this->getLoadValue())){
            $this->vars['selectedValues'] = $this->getLoadValue();
        }else{
            $this->vars['selectedValues'] =[];
        }


    }


    /**
     * @inheritDoc
     */
    public function loadAssets()
    {
        $this->addCss('css/testformwidget.css', 'rasul.movies');
        $this->addJs('js/testformwidget.js', 'rasul.movies');
    }

    /**
     * @inheritDoc
     */
    public function getSaveValue($actors){
        $newArray = [];
        foreach($actors as $actorID){
            if(!is_numeric($actorID)){
                $newActor = new Actor;
                $nameLastname = explode(' ', $actorID);

                $newActor->name = $nameLastname[0];
                $newActor->lastname = $nameLastname[1];
                $newActor->save();
                $newArray[] = $newActor->id;
            } else {
                $newArray[] = $actorID;
            }
        }
        return $newArray;
    }
}

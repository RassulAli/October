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
        //dump($this->vars['actors']);
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
    public function getSaveValue($value)
    {
        return $value;
    }
}

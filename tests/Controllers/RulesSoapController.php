<?php
namespace ivankff\soapserver\tests\Controllers;

/**
 * @description Test for RulesTestModel
 */
class RulesSoapController
{
    /** @var bool */
    public $enableCsrfValidation = false;

    /**
     * @return array
     */
    public function actions()
    {
        return [
            'getRules' => [
                'class' => 'subdee\soapserver\SoapAction',
                'classMap' => [
                    'RulesTestModel' => '\sudbee\soapserver\tests\models\RulesTestModel',
                ],
            ],
        ];
    }

    /**
     * Simple test which returns a RulesTestModel in order to see how the wsdl pans out
     * @return \ivankff\soapserver\tests\models\RulesTestModel
     * @soap
     */
    public function getRules()
    {
        return new \ivankff\soapserver\tests\models\RulesTestModel();
    }
}

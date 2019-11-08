<?php
/**
 * Created by PhpStorm.
 * User: Aurélien
 * Date: 08/11/2019
 * Time: 11:26
 */

namespace App\Form;


class GameForm
{
    // propriété permettant de stocker la saisie
    // et les messages d'erreurs

    private $values = [
      'name' => [
          'value' => null,
          'message' => 'Le nom du jeu est obligatoire'
      ],
        'price' => [
            'value' => null,
            'message' => 'Le prix est incorrect'
        ],
            'date' => [
                'value' => null,
                'message' => 'Date incorrect'
        ]
    ];

    private $messages = [];

    public function __construct()
    {
        // remplir les champs avec la saisie precedente
        $this->fill();
        if (isset($_POST['submit']))
        {
            $this->check();
        }
    }

    private function check():void
    {
        $constraints = [
            'name' => FILTER_SANITIZE_STRING,
            'price' => FILTER_VALIDATE_FLOAT
        ];

        $validation = filter_input_array(INPUT_POST, $constraints);
        //var_dump($validation);

        foreach ($validation as $input => $isValid)
        {
            if (!$isValid)
            {
                $this->messages[] = $this->values[$input]['message'];
            }
        }
    }


    private function fill ():void
    {
        /*
         * $_POST[name] : récupération de la saisie d'un champ
         */
        if (!empty($_POST['name']))
        {
            $this->values['name']['value'] = filter_var(
                $_POST['name'],
                FILTER_SANITIZE_STRING
            );
        }

        if (!empty($_POST['price']))
        {
            $this->values['price']['value'] = filter_var(
                $_POST['price'],
                FILTER_SANITIZE_NUMBER_FLOAT, ['flags'=>FILTER_FLAG_ALLOW_FRACTION]
            );
        }

        if (!empty($_POST['date']))
        {
            $this->values['date']['value'] = filter_var(
                $_POST['date']
            );
        }
    }


    public function getValues():array
    {
        return $this->values;
    }

    public function getMessages():array
    {
        return $this->messages;
    }
}
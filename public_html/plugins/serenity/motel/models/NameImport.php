<?php namespace Serenity\Motel\Models;

use Backend\Models\ImportModel;
use ApplicationException;
use Exception;

class NameImport extends ImportModel
{
    public $table = 'serenity_motel_names';

    /**
     * Обязательные поля
     */
    protected $rules = [
        'name'    => 'required',
        'gender'    => 'required',
    ];

    public function importData($results, $sessionKey = null)
    {
        $firstRow = reset($results);

        foreach ($results as $row => $data) {
            try {

                // Создаем новую запись
                $name = Name::make();

                $name = $this->findDuplicateName($data) ?: $name;

                $nameExists = $name->exists;

                // Исключить из цикла
                $except = ['id']; // В этом массиве мы исключаем те переменные, которые не нужно обрабатывать в автоматическом цикле foreach ниже

                // Цикл заполнения
                foreach (array_except($data, $except) as $attribute => $value) {
                    $name->{$attribute} = $value ?: null; // Присваивание значения в столбец по атрибуту
                }
                // Сохранение
                $name->forceSave();

                if ($nameExists) {
                    $this->logUpdated();
                }
                else {
                    $this->logCreated();
                }
            }
            catch (\Exception $ex) {
                // Ошибка
                $this->logError($row, $ex);
            }

        }
    }

    protected function findDuplicateName($data)
    {
        /*if ($id = array_get($data, 'id')) {
            return Name::find($id);
        }*/

        $title = array_get($data, 'name');
        $name = Name::where('name', $title);


        return $name->first();
    }
}
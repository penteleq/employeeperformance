<?php
/**
 * Created by PhpStorm.
 * User: Rafa�
 * Date: 03.12.2015
 * Time: 18:31
 */

namespace EmployeePerformanceManagement\Validators;

/**
 * Class SummaryObjectivesWeight
 *
 *
Wszystkie regu�y walidacyjne
Krok	Rezultat Przyk�ad 1	Rezultat Przyk�ad 2	Rezultat Przyk�ad 3
Czy ��czna waga cel�w sumuje si� do 100% ?	TAK	TAK	NIE
Czy ��czna suma wag kryteri�w (wzgl�dnie) sumuje si� do 100%?	TAK	TAK	TAK
Czy limit 2 kryteri�w na ca�y arkusz spe�niony ?	TAK	TAK	TAK
Czy spe�niony limit 3.�b�	TAK	TAK	NIE
Czy spe�nione co najmniej 10% na kryterium (bezwzgl)	TAK	TAK	NIE


 *
 * @package EmployeePerformanceManagement\ValidationRules
 */

class SummaryObjectivesWeightRule
{
    public function check()
    {
        return true;
    }
}
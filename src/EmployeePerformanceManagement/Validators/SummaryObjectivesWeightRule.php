<?php
/**
 * Created by PhpStorm.
 * User: Rafa³
 * Date: 03.12.2015
 * Time: 18:31
 */

namespace EmployeePerformanceManagement\Validators;

/**
 * Class SummaryObjectivesWeight
 *
 *
Wszystkie regu³y walidacyjne
Krok	Rezultat Przyk³ad 1	Rezultat Przyk³ad 2	Rezultat Przyk³ad 3
Czy ³¹czna waga celów sumuje siê do 100% ?	TAK	TAK	NIE
Czy ³¹czna suma wag kryteriów (wzglêdnie) sumuje siê do 100%?	TAK	TAK	TAK
Czy limit 2 kryteriów na ca³y arkusz spe³niony ?	TAK	TAK	TAK
Czy spe³niony limit 3.”b”	TAK	TAK	NIE
Czy spe³nione co najmniej 10% na kryterium (bezwzgl)	TAK	TAK	NIE


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
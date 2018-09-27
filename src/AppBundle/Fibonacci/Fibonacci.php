<?php

namespace AppBundle\Fibonacci;

class Fibonacci
{
    public function getFibanocciResult(int $fibNumber)
    {
        if ($fibNumber == 0) {
            return 0;
        } elseif ($fibNumber == 1) {
            return 1;
        }
        $fibSum[0] = 0;
        $fibSum[1] = 1;

        $sum = $fibSum[0] + $fibSum[1];

        for ($i = 2; $i<= $fibNumber;$i++) {
            $fibSum[$i] = $fibSum[$i -1] + $fibSum[$i-2];
            $sum += $fibSum[$i];
        }
        return $sum;
    }
}

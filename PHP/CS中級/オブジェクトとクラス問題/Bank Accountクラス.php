<?php

class BankAccount {
    public $bankName;
    public $ownerName;
    public $savings;

    function __construct(string $bankName, string $ownerName, int $savings) {
        $this->bankName = $bankName;
        $this->ownerName = $ownerName;
        $this->savings = $savings;
    }

    function depositMoney(int $depositAmount): int{
        return $this->savings >= 20000 ? $this->savings += $depositAmount : $this->savings += $depositAmount - 100;
    }

    function withdrawMoney(int $withdrawAmount): int{
        return $this->savings * 0.2 <= $withdrawAmount ? $this->savings -= $this->savings * 0.2 : $this->savings -= $withdrawAmount;
    }

    function pastime(int $days): float{
        return (float)$this->savings += $days * 0.25;
    }
}

$user1 = new BankAccount("Chase", "Claire Simmmons", 30000);
echo $user1->withdrawMoney(2000). PHP_EOL;
echo $user1->depositMoney(10000). PHP_EOL;
echo $user1->pastime(93). PHP_EOL;


$user2 = new BankAccount("Bank Of America", "Remy Clay", 10000);
echo $user2->withdrawMoney(5000). PHP_EOL;
echo $user2->depositMoney(12000). PHP_EOL;
echo $user2->pastime(505). PHP_EOL;
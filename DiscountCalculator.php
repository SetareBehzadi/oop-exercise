<?php
class DiscountCalculator {
    private $originalPrice;

    public function __construct($originalPrice) {
        $this->originalPrice = $originalPrice;
    }

    public function calculateDiscountByPercentage($percentage) {
        $discountAmount = $this->originalPrice * ($percentage / 100);
        $finalPrice = $this->originalPrice - $discountAmount;
        return $finalPrice;
    }

    public function calculateDiscountByAmount($amount) {
        $finalPrice = $this->originalPrice - $amount;
        return $finalPrice;
    }
}

$calculator = new DiscountCalculator(2500000);

$finalPrice1 = $calculator->calculateDiscountByPercentage(38); // Calculate the final price with a 20% discount
echo "Final Price with 38% discount: " . $finalPrice1 . "\n";

$calculator = new DiscountCalculator(3450000);
$finalPrice2 = $calculator->calculateDiscountByAmount(740000); // Calculate the final price with a discount of 30
echo "Final Price with a discount of 740000: " . $finalPrice2 . "\n";
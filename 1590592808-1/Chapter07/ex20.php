function comparePrices($flavor1, $flavor2) {
    if ($this->isFlavor($flavor1) && $this->isFlavor($flavor2)) {
        if ($this->flavors[$flavor1]['price'] <
            $this->flavors[$flavor2]['price']) {
            return array($flavor1, $flavor2);
        } else {
            return array($flavor2, $flavor1);
        }
    } else {
        return false;
    }
}

<?php
class Fesil {
    public $ad;

        public function __construct($ad) {
                $this->ad = $ad;
                    }

                        public function tanit() {
                                return "Bu fesil " . $this->ad . "dir.";
                                    }
                                    }
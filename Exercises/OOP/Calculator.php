<?php

    class Calculator
    {
        private $_a;
        private $_b;
        private $_result;

        public function setVars ($a, $b)
        {
            $this->_a = $a;
            $this->_b = $b;
        }

        public function add ()
        {
            return $this->_result = $this->_a + $this->_b;
        }

        public function subtract ()
        {
            return $this->_a - $this->_b;
        }

        public function multiply ()
        {
            return $this->_a * $this->_b;
        }

        public function divide ()
        {
            return $this->_a / $this->_b;
        }
    }

    $calc = new Calculator(3, 4);
    echo "<p>3 + 4 = " . $calc->add() . "</p>";

<?php

class phpRuleSet {
    private $_secret_text = 'this is private';

    public function execute()
    {
        $this->multipleArgs(
            1, 2, 3, 4, 5
        );

        if (true) {
        echo "wrong indent";
        }
    }

    public function _underlineMethod () {
        echo "Hello!";
    }

    function checkVisibility()
    {
    }

    private function whoUseMe()
    {
        echo 'nobody';
    }

    public function multipleArgs(
        $arg1, $arg2, $arg3,
        ,$arg4
    ) {
        echo $arg1.$arg2.$arg3.$arg4;
    }
}

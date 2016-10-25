<?php

namespace spec;

use Player;
use Tennis;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TennisSpec extends ObjectBehavior
{
    function let (){
        $this->player1 = new Player(0,'Paco');
        $this->player2 = new Player(0,'Player');

    }

    function it_is_initializable() {
        $this->shouldHaveType(Tennis::class);



    }

    function it_score_0_iguals(){
        $this->score()->shouldReturn('0 iguals');

    }

    function it_score_15_0(){


    }

    function it_score_15_15_e(){


    }

}

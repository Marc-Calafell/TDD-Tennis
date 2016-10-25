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
        $this->beConstructedWith($this->player1, $this->player2);
    }

    function it_is_initializable() {
        $this->shouldHaveType(Tennis::class);



    }

    function it_score_0_iguals(){
        $this->score()->shouldReturn('0 iguals');

    }

    function it_score_15_0(){
        $this->player1->winpoint();

    }
    function it_score_30_0(){
        $this->player1->winpoint();
        $this->player1->winpoint();

    }
    function it_score_40_0(){
        $this->player1->winpoint();
        $this->player1->winpoint();

    }

    function it_score_0_15(){
        $this->player2->winpoint();

    }
    function it_score_0_30(){
        $this->player2->winpoint();
        $this->player2->winpoint();
    }
    function it_score_0_40(){
        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();

    }

    function it_score_15_15(){
        $this->player1->winpoint();
        $this->player2->winpoint();

    }

    function it_score_30_15(){
        $this->player1->winpoint();
        $this->player1->winpoint();

        $this->player2->winpoint();

    }
    function it_score_15_30(){
        $this->player1->winpoint();

        $this->player2->winpoint();
        $this->player2->winpoint();
    }

    function it_score_30_30(){
        $this->player1->winpoint();
        $this->player1->winpoint();

        $this->player2->winpoint();
        $this->player2->winpoint();
    }

    function it_score_40_15(){
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player1->winpoint();

        $this->player2->winpoint();

    }
    function it_score_15_40(){
        $this->player1->winpoint();

        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();

    }

    function it_score_40_30(){
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player1->winpoint();

        $this->player2->winpoint();
        $this->player2->winpoint();

    }
    function it_score_30_40(){
        $this->player1->winpoint();
        $this->player1->winpoint();

        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();

    }

    function it_score_40_40(){
        $this->player1->winpoint();
        $this->player1->winpoint();
        $this->player1->winpoint();

        $this->player2->winpoint();
        $this->player2->winpoint();
        $this->player2->winpoint();

    }




}

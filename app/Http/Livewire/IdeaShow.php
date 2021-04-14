<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Idea;

class IdeaShow extends Component
{
    public $idea;
    public $votesCount;
    public $hasVoted;

    public function mount(Idea $idea, $votesCount) {
        $this->idea = $idea;
        $this->votesCount = $votesCount;
        $this->hasVoted = $idea->isVotedByUser(auth()->user());
    }

    public function render()
    {
        return view('livewire.idea-show');
    }

    public function vote()
    {
        if(!auth()->check()){
            redirect(route('login'));
        }

        if ($this->hasVoted) {
            $this->idea->unvote(auth()->user());
            $this->votesCount--;
            $this->hasVoted = false;
        } else {
            $this->idea->vote(auth()->user());
            $this->votesCount++;
            $this->hasVoted = true;
        }
    }
}

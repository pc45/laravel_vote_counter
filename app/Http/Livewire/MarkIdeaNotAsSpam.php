<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Illuminate\Http\Response;
use Livewire\Component;

class MarkIdeaNotAsSpam extends Component
{
    public $idea;

    public function mount(Idea $idea)
    {
        $this->idea = $idea;
    }

    public function markAsNotSpam()
    {
        if (auth()->guest() || ! auth()->user()->isAdmin()) {
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->idea->spam_reports = 0;
        $this->idea->save();

        $this->emit('ideaWasMarkedAsNotSpam');
    }

    public function render()
    {
        return view('livewire.mark-idea-not-as-spam');
    }
}

<?php
namespace App\View\Components;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\Component;


class Input extends Component{
    
    public function image(): bool
    {
        return str_starts_with(Storage::mimeType($this->value), 'image/');
    }
}
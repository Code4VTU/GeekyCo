<?php

namespace App\Http;

class Flash {
    public function message($title, $message, $notice) {
        session()->flash('flash_message', [
            'title' => $title,
            'message' => $message,
            'notice' => $notice
        ]);
    }
}
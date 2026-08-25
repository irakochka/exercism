<?php

class HighSchoolSweetheart
{
    public function firstLetter(string $name): string
    {
        return trim($name)[0];
    }

    public function initial(string $name): string
    {
        return strtoupper($this->firstLetter($name)) . '.';
    }

    public function initials(string $name): string
    {
       $parts = explode(' ', trim($name));
        return $this->initial($parts[0]) . ' ' . $this->initial($parts[1]);
    }

    public function pair(string $sweetheart_a, string $sweetheart_b): string
    {
        $initialsA = $this->initials($sweetheart_a);
        $initialsB = $this->initials($sweetheart_b);

        return <<<HEART
             ******       ******
           **      **   **      **
         **         ** **         **
        **            *            **
        **                         **
        **     {$initialsA}  +  {$initialsB}     **
         **                       **
           **                   **
             **               **
               **           **
                 **       **
                   **   **
                     ***
                      *
        HEART;
    }
}

<?php
function emailCheck($email)
{
    if (isset($email)) {
        if (strlen($email) > 0) {
            if (str_contains($email, '@') && str_contains($email, '.')) {
                return 'Thanks for your subscription!';
            } else {
                return 'Check your email, the format is uncorrect.';
            }
        } else {
            return 'You forgot to write your email in the box.';
        }
    }
};

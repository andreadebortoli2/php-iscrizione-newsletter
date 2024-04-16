<?php
function emailCheck($email)
{
    if (isset($email)) {
        if (strlen($email) > 0) {
            if (str_contains($email, '@') && str_contains($email, '.')) {
                /* return [
                    'status' => 'alert-success',
                    'text' => 'Thanks for your subscription!'
                ]; */
                header('Location: ./subscriptionSuccess.php');
            } else {
                return [
                    'status' => 'fail',
                    'color' => 'alert-danger',
                    'text' => 'Check your email, the format is uncorrect.'
                ];
            }
        } else {
            return [
                'status' => 'fail',
                'color' => 'alert-danger',
                'text' => 'You forgot to write your email in the box.'
            ];
        }
    }
};

function secondTry($message, $email)
{
    if ($message['status'] === 'fail') {
        echo $email;
    }
};

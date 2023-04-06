<?php
function print_film_from_nbr(int $abcde)
{
    switch ($abcde) {
        case '3':
            print("Les trois freres\n");
            break;
        case '6':
            print("Sixieme sens\n");
            break;
        case '0':
            print("l'homme invisible\n");
            break;
        case '23':
            print("Le nombre 23\n");
            break;
        case '28':
            print("28 jours plus tard\n");
            break;

        default:
            print("Je ne connais pas\n");
    }
}
// echo print_film_from_nbr(3);
// echo print_film_from_nbr(6);
// echo print_film_from_nbr(0);
// echo print_film_from_nbr(23);
// echo print_film_from_nbr(28);
// echo print_film_from_nbr(333);
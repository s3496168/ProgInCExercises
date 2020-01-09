#include "options.h"

#include <assert.h>
#include <ctype.h>

#include "menu.h"

#define ANSWERWIDTH 5
#define THISWIDTH 80
#define LOOPWIDTH 10000

/**
 * This file contains the implementations of the different options that are
 * part of the assignment. This file should contain only the logic to implement
 * each function and return values. It should not contain any input or output.
 * If you need to do input or output, you must expose functions in the menu.c
 * and menu.h library and call those functions in this module.
 **/

/**
 * reverse_string(): takes as an argument a string that you must reverse
 *inplace. You must not move the nul terminator but must swap each char in the
 *first half of the string to the appropriate location in the second half of the
 * string and vice-versa.
 **/
void reverse_string(char str[]) {
    /*note-normal_output was provided in menu.c for usage
     * its job is to process strings*/
    int g;
    int count = 0;
    char line[LOOPWIDTH];
    normal_output(
        "Please enter a string to reverse "
        "(maximum of 80 characters): ");

    fgets(line, LOOPWIDTH, stdin);
    line[strlen(line) - 1] = 0;
    /*printf("You answered: %s\n", line);*/

    /*  str = (char*)malloc(sizeof(line));
      memcpy(str, line, sizeof(line));
  */
    for (g = 0; line[g]; ++g) {
        count++;
    }
    if (count > THISWIDTH) {
        printf("Error: input was too long. Please try again.\n");
        memset(line, 0, sizeof line);
        reverse_string(str);
    }
    if (count <= THISWIDTH) {
        str = (char*)malloc(sizeof(line));
        memcpy(str, line, sizeof(line));
        normal_output("The reverse of the string entered is: %s", str + 1);
        putchar(*str);
        free(str);
        normal_output("\n");
    }
}
/**
* play the guess a number game. Generate a random number between 1 and 10.
* Give the user ten guesses to guess the number.
**/
void guess_a_number(long seed) {
    int guess = 10;
    int answer;
    char* end;
    char line[ANSWERWIDTH + 1];
    int solution = (rand() % 10) + 1;
    BOOLEAN success = FALSE;
    srand(seed);
    srand(time(NULL));
    normal_output(
        "I have selected a number between 1 and 10. You have %d "
        "guesses "
        "left.\n",
        guess);
    /*fgets(line, ANSWERWIDTH + 1, stdin);*/
    /*  answer = strtol(line, &end, 10);
      printf("You answered: %d\n", answer);*/
    while (guess >= 1 && success == FALSE && success != TRUE) {
        normal_output("Please enter your guess: ");
        fgets(line, ANSWERWIDTH + 1, stdin);
        /*remove trailing newline*/
        line[strlen(line) - 1] = 0;

        answer = strtol(line, &end, 10);
        if (*end != '\0') {
            error_output("Error! this data is not numeric! \n");
        } else {

            if (answer == solution) {
                /*assigning the value of true to success does nothing
                 * but cause an unused variable warning
                 * and is left here for consistency-see above
                 * break has been used to facilitate an ability to break
                 * out
                 * of the loop*/
                /*success = TRUE;*/
                normal_output("Congratulations! You have won the game!\n");

                normal_output("Would you like to play again (y/n): ");
                fgets(line, ANSWERWIDTH + 1, stdin);
                /*remove trailing newline*/
                line[strlen(line) - 1] = 0;
                if (!strcmp(line, "yes") || !strcmp(line, "Yes") ||
                    !strcmp(line, "y") || !strcmp(line, "Y") ||
                    !strcmp(line, "YES")) {
                    /*except for here-otherwise this will run twice
                     * no matter what is placed below*/
                    success = TRUE;
                    guess_a_number(seed);
                } /*experimental legacy code
                     else if (!strcmp(line, "no") || !strcmp(line, "No") ||
                           !strcmp(line, "n") || !strcmp(line, "N") ||
                           !strcmp(line, "NO")) {
                    printf("Thanks for playing guess a game\n");
                    break;
                }*/ else {
                    normal_output("Thanks for playing \"guess a game\"\n");
                    return;
                }
            } else if (answer > solution) {
                normal_output(
                    "try a lower number "
                    "(you have %d guesses left). \n",
                    guess - 1);
                guess--;
            } else if (answer < solution) {
                normal_output(
                    "try a higher number "
                    "(you have %d guesses left). \n",
                    guess - 1);
                guess--;
            } else {
                error_output("Sorry for the internal error\n");
            }
        }
    }
    if (guess == 0) {
        normal_output("You ran out of guesses!");
    }
}
/**
 * Implementation of the can_give_change() algorithm. for the
 *current
 *cash
 * register, can we provide the list of change requests? Please note
 *that
 * this is most easily completed using recursion but it is up to you
 *how
 *you
 * do this. This task is much more freeform as it is considered an
 * advanced task for this assignment.
 **/
struct falsible_register can_give_change(const cash_register reg,
                                         const change_requests requests,
                                         int num_requests) {
    /* replace this comment and the stub with code to calculate
     * whether
     * the
     * change requests can be satisfied with the cash register
     * provided
     */
    struct falsible_register result;
    result.success = FALSE;
    normal_output("You have reached give change.\n");
    return result;
}

/**
 * folds a string passed in so that no line is longer than the
 *specified
 *width.
 * This function should behave the same as the unix "fold" command.
 *You
 *should
 * compare your output to calling the fold program at the terminal
 *as
 *follows:
 *     fold -s -w [width] [filename]
 * Where width is the desired width to fold at and filename holds
 *the
 *contents
 * that you wish to fold.
 *
 * The recommended approach here is to jump forward by width
 *characters
 *and
 * then step backwards until you find a space character and replace
 *it
 *with
 * a newline character.
 **/
char* fold(char str[], unsigned width) {
    /* replace this comment and stub with your actual
     * implementation. */

    normal_output("You have reached the fold.\n    ");

    return NULL;
}

/**
 * check if there is a win. That is, is there three in a row of
 *either X
 *or
 *O
 * in any row or any column of the board or if there is three in a
 *row
 *in
 * either diagonal direction.
 **/
enum ttt_result ttt_check_win(ttt_board board) {

    normal_output("You have reached tictactoe.\n    ");
    return TTT_ONGOING;
}

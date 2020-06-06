#include "main.h"

#include "shared.h"
#include <limits.h>
#include <errno.h>
#include <ctype.h>
#include "options.h"
/*#include "menu.c"*/

/*added definitions*/
#define SCREENWIDTH 80

/**
 * extracts the seed (a long int) from a string passed in
 **/
static long get_seed(const char strseed[]) {
    char* end;
    long result;
#define DECIMAL 10
    /* try to extract a long integer */
    result = strtol(strseed, &end, DECIMAL);
    /* check it is within the valid range */
    if (errno == ERANGE) {

        fprintf(stderr,
                "Error: %s is outside the allowed range for a "
                "long integer.\n",
                strseed);
        exit(IR_FAILURE);
    }
    /* search for any trailing characters */
    while (isspace(*end)) {
        ++end;
    }
    if (*end) {
        fprintf(stderr, "Error: %s is not a valid seed.\n", strseed);
        exit(IR_FAILURE);
    }
    return result;
}

enum {
    MIN_ARGS = 1,
    CORRECT_ARGS,
    OVERFLOW_ARGS
};

#define SEED_ARG 1
/**
 * you are expected to READ the comments here and fill in your code BETWEEN the
 * comments.
 **/
void init_menu();
void display_menu();

int main(int argc, char* argv[]) {
    /* the user's menu choice */
    enum menu_choice choice;
    menu themenu;
    /* redundant code from part b
     * note that some of this is now down below
     * the menus themselves */
    /*
    printf("%s\n", "Welcome to my menu");
    int j;
    for (j = 0; j <= 18; ++j) {
        printf("%s", "_ ");
    };
    printf("\n");

    int ch;
    BOOLEAN D = TRUE;

    do {
        menu themenu;
        init_menu(themenu);
        display_menu(themenu);
        select_menu_item(themenu);
        menu_process_choice(choice);
        ch = getchar();
    } while (ch != 4 || ch != 13 || ch != EOF);
    return IR_EOF;
*/
    long seed;
    if (argc < MIN_ARGS || argc >= OVERFLOW_ARGS) {
        fprintf(stderr,
                "Error: invalid arguments passed in. You "
                "should call this program as follows: ");
        fprintf(stderr, "\tcpt_220_menu [seed]\n");
        fprintf(stderr,
                "Where seed is an optional argument which is a "
                "positive integer seed for the random number "
                "generator.\n");
        return EXIT_FAILURE;
    }
    seed = argc == CORRECT_ARGS ? get_seed(argv[SEED_ARG]) : EOF;
    /* initialise the menu with the data to be displayed to the user */
    /* display the menu to the user repeatedly until the user chooses to
     * quit */
    /* handle errors */
    /* check for guess choice - if it if guess a number, pass in the
     * seed as well as no further input is required */
    /* process the user input and run the appropriate menu
     * item */
    /*so it WAS supposed to go here all along*/
    init_menu(themenu);

    /*A do while loop here, just like in the redundant code above*/
    do {

        /*BOOLEAN used here too-success as per options.h*/
        BOOLEAN success = FALSE;
        /*choice as as the reference for the menu_choice enum found in menu.h
         * set above, select_menu_item from menu.c*/
        choice = select_menu_item(themenu);

        /*Provide facilities for error handling
         * error_output function from menu.c*/
        if (choice == MNU_INVAL) {
            error_output("Error! Invalid option selected.");
        } else if (choice == MNU_GUESS) {
            /*This requires the seed to be passed in to
             * allow the random number to generate-
             * note that no further input is subsequently required*/
            /*Also note that the correct parameters need to be
             * passed in options.c and options.h*/
            guess_a_number(seed);
        } else {
            /*process the choice and execute the relevant menu item*/
            menu_process_choice(choice);
        }
        if (success != FALSE) {
            /*fprint used here to run print from error stream*/
            fprintf(stderr, "Invalid option selected!\n");
        }

    } while (choice != MNU_QUIT);
    return EXIT_SUCCESS;
}

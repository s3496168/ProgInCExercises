#include "menu.h"

#include <stdarg.h>
#include <string.h>

#include "helpers.h"
#include "options.h"
#include "shared.h"

/*added definitions*/
#define SCREENWIDTH 80
#define NUM_MENU_ITEMS 7
#define MIN_NUM_MENU_ITEMS 1

/*added prototypes*/
void init_menu(char menu[NUM_MENU_ITEMS][SCREENWIDTH + 1]);
void display_menu(char menu[NUM_MENU_ITEMS][SCREENWIDTH + 1]);

typedef char selection[NUM_MENU_ITEMS][SCREENWIDTH - 1];

menu themenu;
selection s;

/**
 * The famous read_rest_of_line() function.
 * It reads chars from stdin (most of the time the keyboard) until we
 * reach either the end of the operating system's input buffer or we
 * reach a newline character (that's the end of the buffer that we should
 * read).
 **/
static void read_rest_of_line(void) {
    int ch;
    while (ch = getc(stdin), ch != '\n' && ch != EOF)
        ;
    clearerr(stdin);
}

/**
 * initialises the menu - that is copies the required string values into the
 * provided menu array. Please note that hardcoding of array indexes here
 * will result in a 50% penalty on this requirement.
 **/
void init_menu(char menu[NUM_MENU_ITEMS][SCREENWIDTH + 1]) {

    /**
     * displays the menu as specified by the assignment document. It must be
     * displayed exactly as outlined in the assignment specification.
    **/
    selection s = {"reverse a string",             "play guess a number",
                   "fold a string",                "validate tictactoe winner",
                   "check if change can be given", "access the help menu",
                   "quit the program"};
}

void display_menu(char menu[NUM_MENU_ITEMS][SCREENWIDTH + 1]) {
    selection s;
    themenu;
    int i;
    for (i = 0; i < NUM_MENU_ITEMS; ++i) {
        memcpy(&themenu[i], &s[i], sizeof(s[0]));
        printf("%d %s\n", i + 1, themenu[i]);
    }
}

/**
 * allows the user to select a menu item to run from the menu
 **/
enum menu_choice select_menu_item(char menu[NUM_MENU_ITEMS][SCREENWIDTH + 1]) {
    /* please note that this is a stub return value. You must delete this
     * comment and the return value below it or I will penalise for this */

    int input;
    char* end;
    char line[SCREENWIDTH + 1];
    printf("please enter your choice: ");
    fgets(line, SCREENWIDTH + 1, stdin);
    /*check for buffer overflow*/
    if (line[strlen(line) - 1] != '\n') {
        printf("Error: buffer overflow\n\n");
        return IR_FAILURE;
    }
    /* remove newline */
    line[strlen(line) - 1] = 0;
    /* ascii '0' != 0*/ /* retrieve number*/
    input = strtol(line, &end, 10);

    if (*end != '\0') {
        printf("Error: data entered was not numeric.\n\n");
        return IR_FAILURE;
    }

    /*Report an error if number is too large*/

    if (input > NUM_MENU_ITEMS) {
        printf(
            "You entered: %d. This is too high; please enter a number less "
            "than %d\n\n",
            input, NUM_MENU_ITEMS);
        return IR_FAILURE;
    }

    /*Report an error if number is too small*/

    if (input < MIN_NUM_MENU_ITEMS) {
        printf(
            "You entered: %d. This is too low; please enter a positive "
            "number greater than %d\n\n",
            input, MIN_NUM_MENU_ITEMS);
        return IR_FAILURE;
    }

    return IR_SUCCESS;
}

/**
 * process input from the menu and launch each of the options
 **/
void menu_process_choice(enum menu_choice selected_choice) {

    enum menu_choice choice;

    if (choice == 1) {
        printf("%d was chosen\n", choice);
    }
    if (choice == 2) {
        printf("%d was chosen\n", choice);
    }
    if (choice == 3) {
        printf("%d was chosen\n", choice);
    }
    if (choice == 4) {
        printf("%d was chosen\n", choice);
    }
    if (choice == 5) {
        printf("%d was chosen\n", choice);
    }
    if (choice == 6) {
        printf("%d was chosen\n", choice);
    }

    if (choice == 7) {
        printf("%d was chosen\n", choice);
    }
}

/**
 * simply calls printf to do the outputting to a file.
 **/
int normal_output(const char format[], ...) {
    va_list vl;
    int result;
    va_start(vl, format);
    result = vprintf(format, vl);
    va_end(vl);
    return result;
}

/**
 * simply display a prefix of Error: then display whatever message(s) have
 * been passed in
 **/
int error_output(const char format[], ...) {
    va_list vl;
    int result = 0;
    va_start(vl, format);
    result += fprintf(stderr, "Error: ");
    result = vfprintf(stderr, format, vl);
    va_end(vl);
    return result;
}

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
/*
 * This char is no longer needed in this manner
 * it has been moved to the appropriate function*/
typedef char selection[NUM_MENU_ITEMS][SCREENWIDTH + 1];

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
    /*   char selection[NUM_MENU_ITEMS][SCREENWIDTH+1]{*/
    selection s = {"reverse a string",             "play guess a number",
                   "fold a string",                "validate tictactoe winner",
                   "check if change can be given", "access the help menu",
                   "quit the program"};
    /*memmove used here to prevent undefined behaviou-
     * this can occur if using memcpy with overlapping regions*/
    memmove(menu, s, sizeof(s));
}

void display_menu(char menu[NUM_MENU_ITEMS][SCREENWIDTH + 1]) {
    /*redundant part b code
     * selection s;
    themenu;*/
    /*Create char array to display heading*/

    char* head = "Welcome to my menu";
    int dash;
    int strlen_head = strlen(head);
    int i;
    puts(head);
    for (dash = 0; dash < strlen_head; ++dash) {
        printf("%s", "-");
    }
    printf("\n");

    for (i = 0; i < NUM_MENU_ITEMS; ++i) {
        /*redundant partb code
        memcpy(&themenu[i], &s[i], sizeof(s[0]));
        printf("%d %s\n", i + 1, themenu[i]);
        */
        /*normal output variable from options.c
         * the printf statement from part b is refractored here*/
        normal_output("%d) %s\n", i + 1, menu[i]);
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
    enum input_result result;
    char line[SCREENWIDTH + 1];
    display_menu(menu);
    printf("please enter your choice: ");
    fgets(line, SCREENWIDTH + 1, stdin);

    /*check for buffer overflow*/
    if (line[strlen(line) - 1] != '\n') {
        printf("Internal error: buffer overflow\n\n");
        return IR_FAILURE;
    }
    /* remove newline to reset application */
    line[strlen(line) - 1] = 0;
    /* assign enum*/
    input = strtol(line, &end, 10);
    result = input;

    /*utilise ascii to detect non numeric data*/
    /*if (*end != '\0') {
        printf("Error: data entered was not numeric.\n\n");
        return IR_FAILURE;
    }*/

    /*Report an error if number is too large*/

    /*if (result > NUM_MENU_ITEMS) {
        printf(
            "You entered: %d. This is too high; please enter a number less "
            "than %d\n\n",
            result, NUM_MENU_ITEMS);
        return IR_FAILURE;
    }
    IR_FAILURE;
    */
    /*Report an error if number is too small*/
    /*
        if (result < MIN_NUM_MENU_ITEMS) {
            printf(
                "You entered: %d. This is too low; please enter a positive "
                "number greater than %d\n\n",
                result, MIN_NUM_MENU_ITEMS);
            return IR_FAILURE;
        }
    */
    return result;
}
void display_help(void) { printf("I will help\n"); }
void quit() {}

/**
 * process input from the menu and launch each of the options
 **/
void menu_process_choice(enum menu_choice selected_choice) {
    /*redundant part b code*/
    /* enum menu_choice choice;*/
    /*using selected_choice as per prototype*/

    if (selected_choice == MNU_REV) {
        reverse_string(NULL);
    } else if (selected_choice == MNU_FOLD) {
        fold(NULL, 0);
    } else if (selected_choice == MNU_TICTACTOE) {
        ttt_board aboard;
        ttt_check_win(aboard);
    } else if (selected_choice == MNU_CHG) {
        cash_register reg;
        change_requests reqs;
        int num_requests = 0;
        can_give_change(reg, reqs, num_requests);
    } else if (selected_choice == MNU_HELP) {
        display_help();
    } else if (selected_choice == MNU_QUIT) {
        quit();
    } else {
        error_output("invalid option selected.\n");
    }
    /*
    switch (selected_choice) {
    case MNU_REV: {
        reverse_string(NULL);
    } break;
    case MNU_FOLD: {
        fold(NULL, 0);
    } break;
    case MNU_TICTACTOE: {
        ttt_board aboard;
        ttt_check_win(aboard);
    } break;
    case MNU_CHG: {
        cash_register reg;
        change_requests reqs;
        int num_requests = 0;
        can_give_change(reg, reqs, num_requests);
    } break;
    case MNU_HELP: {
        display_help();
    } break;
    case MNU_QUIT:{
    quit();
    }break;
    default: { error_output("Invalid\n"); }
    }*/
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

#include <stddef.h>
/*above defines macros, especially NULL*/
#ifndef MENU_H
#define MENU_H

enum input_result {
    IR_FAILURE,
    IR_SUCCESS,
    IR_EOF = -1
};

enum menu_choice {
    MNU_REV = 1,
    MNU_GUESS = 2,
    MNU_FOLD = 3,
    MNU_TICTACTOE = 4,
    MNU_CHG = 5,
    MNU_HELP = 6,
    MNU_QUIT = 7,
    MNU_INVAL = -1
};

#define NUM_MENU_ITEMS 7
#define SCREENWIDTH 80
#define EXTRACHARS 2
#define MNU_MIN 1
#define MNU_MAX 7

typedef char menu[NUM_MENU_ITEMS][SCREENWIDTH + 1];

int normal_output(const char[], ...);
int error_output(const char[], ...);
void init_menu(char[][SCREENWIDTH + 1]);
void display_menu(char[][SCREENWIDTH + 1]);
enum menu_choice select_menu_item(char[][SCREENWIDTH + 1]);
enum input_result get_int(const char prompt[], int* output);
enum input_result get_string(const char[], char[], int);
void menu_process_choice(enum menu_choice);
#endif

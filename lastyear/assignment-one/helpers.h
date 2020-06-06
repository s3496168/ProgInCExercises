#include <stddef.h>

#include "shared.h"
#include "menu.h"

#ifndef HELPERS_H
#define HELPERS_H
/*******************************************************************************
 * helpers.h: This module contains the function prototypes and data defintions
 * required for the helpers module. The Helpers module contains any functions
 * you implemented that don't fit nicely into one of the existing modules.
 ******************************************************************************/
/**
 * put the function prototypes for this module here.
 **/

/*enum for the menu*/

enum help_menu_choice {
    HLP_REV = 1,
    HLP_GUESS = 2,
    HLP_FOLD = 3,
    HLP_TICTACTOE = 4,
    HLP_CHG = 5,
    HLP_QUIT = 6,
    HLP_INVAL = -1
};

#define HLP_MNU_MIN 1
#define HLP_MNU_MAX 7
#define NUM_MENU_HELP_ITEMS 6

typedef char help_menu[NUM_MENU_HELP_ITEMS][SCREENWIDTH + 1];

void init_help_menu(char[][SCREENWIDTH + 1]);
void display_help_menu(char[][SCREENWIDTH + 1]);
enum help_menu_choice select_help_menu_item(char[][SCREENWIDTH + 1]);
void menu_process_help_choice(enum help_menu_choice);

void reverse_help();
void guess_help();
void fold_help();
void tictactoe_help();
void change_help();

#endif

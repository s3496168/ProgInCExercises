/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * Assignment 1, study period 2, 2020.
 *****************************************************************************/
#include <stdarg.h>
#include "shared.h"
#include "helpers.h"

/**
 * this module is the place to implement all i/o functionality. You should not
 * call printf/fprintf, etc, outside this module as that will make it simpler
 * if we ever want to change the target for output for the program.
 **/
#ifndef IO_H
#define IO_H
#define EXTRACHARS 2
#define LINELEN 80

#define NUM_MENU_CHOICES 5
/*
#define SCREENWIDTH 80
*/

/*new teacher code*/

/*
 * macro that prints out a line of chars of the length specified.
 **/
#define PUTLINE(num, character)                   \
    {                                             \
        long count;                               \
        for (count = 0; count < (num); ++count) { \
            putchar(character);                   \
        }                                         \
        putchar('\n');                            \
    }

/* forwards declaration of the anagram_pair type that is used in the options
 * module */
struct anagram_pair;

/**
 * struct that represents the inputs needed for the clusters implementation
 **/
struct map_input {
    int x, y;
    char cluster_text[LINELEN + 1];
};

/*end new teacher code*/

/**
 * constants for the different options for the menu system
 **/
enum menu_choice {
    MNU_WD_SCR,
    MNU_ASC_TBL,
    MNU_ANAG,
    MNU_CLST,
    MNU_QUIT,
    MNU_EOF,
    MNU_INVALID = -1
};

/**
 * data type for the i/o functions to return. These give the possible outcomes
 * of an i/o operation.
 **/
enum input_result {
    IR_FAILURE,
    IR_SUCCESS,
    IR_EOF
};

/**
 * put here all declaratioins of user input functions
 **/
void init_the_menu();
enum menu_choice get_menu_choice();

/*more new teacher code*/
enum input_result string_from_keyboard(const char[], char[], long len);
enum input_result int_from_keyboard(const char[], int*);
enum input_result long_from_keyboard(const char[], long*);
enum input_result get_wordscore_input(char[]);
enum input_result get_asciitable_input(char[]);
enum input_result get_anagram_input(struct anagram_pair*);
enum input_result get_cluster_input(struct map_input*);
/*end new teacher code*/


struct menu {
    char selection[NUM_MENU_CHOICES];
} options;

/**
 * the input and output functions that you should call outside of this module
 **/
int normal_output(const char[], ...);
int error_output(const char[], ...);

#endif

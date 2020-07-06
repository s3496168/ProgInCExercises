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
void process_menu_choice(enum menu_choice);

struct menu {
    char selection[NUM_MENU_CHOICES];
} options;

/**
 * the input and output functions that you should call outside of this module
 **/
int normal_output(const char[], ...);
int error_output(const char[], ...);

#endif

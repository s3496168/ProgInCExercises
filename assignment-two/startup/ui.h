/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "main.h"
#include "shared.h"
#ifndef UI_H
#define UT_H
#define EXTRACHARS 2
#define SCREENWIDTH 80
#define MARGIN_WIDTH 5

/**
 * input result enum for handling the results of user input
 **/
enum input_result {
    IR_FAILURE,
    IR_SUCCESS,
    IR_NL,
    IR_EOF
};

/**
 * the implementation of the user interface itself
 **/
void repl(struct editor_system *);
#endif

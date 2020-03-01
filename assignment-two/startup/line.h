/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "shared.h"
#ifndef LINE_H
#define LINE_H
#include <assert.h>
#include <limits.h>
#include <string.h>
#include <stdio.h>
#include <stdlib.h>
/**
 * data required for a line of text to be stored in our linked list
 **/
struct line {
    /* the current line number of this line in the text file */
    ssize_t lineno;
    /* the text itself */
    char* text;
    /* the length of the line. This is stored so we don't need to call strlen
     * a whole bunch of times as each call to strlen involves traversing the
     * line of text.
     */
    ssize_t len;
};

/**
 * declare the functions for managing the line type here.
 **/
#endif

/******************************************************************************
 * Student Name    : Brearne Gbison
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "line.h"

/**
 * Implement the functions to manage the line type in here.
 *
 **/
struct line* manage_line(ssize_t lineno, char* text, ssize_t len) {

    struct line* new;

    /*text and should already exist*/
    assert(text);
    new = malloc(sizeof(struct line));
    /*copy in the data*/
    strcpy(new->text, text);
    new->lineno = lineno;
    new->len = len;
    return new;
}

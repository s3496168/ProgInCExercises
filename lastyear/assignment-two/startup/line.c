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

    /*redundant p2 code*/
    /*text and should already exist*/

    assert(text);
    assert(lineno > 0);
    /*slightly changed p2 code-allocates space for the line struct*/
    new = (struct line*)malloc(sizeof(struct line));
    /*new A3-throw an error if the newline is not created*/
    if (!new) {
        /*taking advantage of perror functionality*/
        perror("malloc");
        return NULL;
    }

    /*allocate space for the string to be held in the struct*/

    new->text = (char*)malloc(sizeof(char) + len);
    if (!new->text) {
        /*taking advantage of perror for efficient error message delivety*/
        perror("malloc");
        /*free the line and return null as thete is null to return*/
        free(new);
        return NULL;
    }

    /*copy in the data into the new struct*/
    strcpy(new->text, text);
    new->lineno = lineno;
    new->len = len;
    return new;

    /*creates a new line with the previously specified line number and contents
     */
}

/*
 *
 * Line.c
 *creates a new line with the line number specified and contents
struct line* line_make(ssize_t lineno, const char text[], ssize_tlen) {
    struct line* newline;
    document our assumptions about the parameters in a testable way through code

    assert(text);
    assert(lineno > 0);
     allocate space for the line struct
    newline = (struct line*)malloc(sizeof(struct line));
    if (!newline) {
        perror("malloc");
        return NULL;
    }


     allocate space for the string to held by the line
newline->text = (char*)malloc(sizeof(char) + len + 1);
if (!newline->text) {
    perror("malloc"); free(newline);
    return NULL;
}

initialise the data for the line
newline->lineno = lineno; newline->len = len; strcpy(newline->text, text);
return newline;
}
*/

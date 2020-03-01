/******************************************************************************
 * Student Name    :
 * RMIT Student ID :
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "line.h"
#include <assert.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

/**
 * creates a new line with the line number specified and contents
 **/
struct line* line_make(ssize_t lineno, const char text[], ssize_t len)
{
        struct line* newline;
        /* document our assumptions about the parameters in a testable way
         * through code
         */
        assert(text);
        assert(lineno > 0);

        /* allocate space for the line struct */
        newline = (struct line*)malloc(sizeof(struct line));
        if (!newline)
        {
                perror("malloc");
                return NULL;
        }

        /* allocate space for the string to held by the line */
        newline->text = (char*)malloc(sizeof(char) + len + 1);
        if (!newline->text)
        {
                perror("malloc");
                free(newline);
                return NULL;
        }

        /* initialise the data for the line */
        newline->lineno = lineno;
        newline->len = len;
        strcpy(newline->text, text);
        return newline;
}

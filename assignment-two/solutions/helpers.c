/******************************************************************************
 * Student Name    :
 * RMIT Student ID :
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "helpers.h"
#include <assert.h>
#include <ctype.h>
#include <errno.h>
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "linkedlist.h"

#define DECIMAL 10
#define EMPTY_STRING ""

char *strdup(const char *oldstr)
{
        char *copy;
        ssize_t len = strlen(oldstr);
        copy = (char *)malloc(sizeof(char) * (len + 1));
        if (!copy)
        {
                perror("malloc");
                return NULL;
        }
        memcpy(copy, oldstr, sizeof(char) * (len + 1));
        return copy;
}

/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "helpers.h"
#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define DECIMAL 10
#define EMPTY_STRING ""
/**
 * a commonly available convenience function that mallocs space for a copy of
 * the string passed in and if that succeeds, copy the data and return a
 * pointer to the copy and otherwise return NULL.
 **/
char *strdup(const char *oldstr) {
    char *copy;
    /* get the length of the string */
    ssize_t len = strlen(oldstr);
    /* malloc space */
    copy = (char *)malloc(sizeof(char) * (len + 1));
    /* if this failed, return NULL */
    if (!copy) {
        perror("malloc");
        return NULL;
    }
    /* otherwise, copy the data */
    memcpy(copy, oldstr, sizeof(char) * (len + 1));
    return copy;
}

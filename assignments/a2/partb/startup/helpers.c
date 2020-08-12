/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * Assignment 2, study period 2, 2020.
 *****************************************************************************/
#include "helpers.h"
#include "shared.h"
#include <string.h>
#include <stdlib.h>
#include <stdio.h>

/**
 * convenience function for copying a string to another pointer
 **/
char* strdup(const char orig[]) {
    /* allocate the space for the copy */
    char* copy = (char*)malloc(strlen(orig) + 1);
    if (!copy) {
        perror("malloc");
        return NULL;
    }
    /* copy the string */
    strcpy(copy, orig);
    return copy;
}

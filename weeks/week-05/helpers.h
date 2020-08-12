/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * Assignment 1, study period 2, 2020.
 *****************************************************************************/
#include "helpers.h"
#include <stdlib.h>
#include <string.h>
/**
 * In this module you can create any functions that don't specifically
 * relate to a single other module or a single option's implementation.
 **/

/**
 * convenience function you may wish to use with strtok to create a temporary
 * string for tokenization.
 **/
char* strdup(const char orig[]) {
    /* make space for the new stringg */
    char* copy = malloc(sizeof(char) + (strlen(orig) + 1));
    if (copy == NULL) {
        return NULL;
    }
    /* copy the string */
    strcpy(copy, orig);
    return copy;
}

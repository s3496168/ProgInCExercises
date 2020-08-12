/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * Assignment 2, study period 2, 2020.
 *****************************************************************************/
#include "shared.h"
#include <stdio.h>
#ifndef ARRAY_LIST
#define ARRAY_LIST

#define MIN_ARRAY_SIZE 16

struct array_list {
    /* array of words */
    struct word *words;
    /* count of words currently stored */
    long word_count;
    /* total current capacity for the data structure */
    long word_capacity;
};

/**
 * insert function prototypes for managing the array list here.
 **/

#endif

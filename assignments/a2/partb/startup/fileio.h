/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * Assignment 2, study period 2, 2020.
 *****************************************************************************/
#include "shared.h"
#include "linked_list.h"
#include "array_list.h"

#ifndef FILEIO_H
#define FILEIO_H

/**
 * the union of the two possible list types - only one can be used at a time
 **/
union list {
    struct linked_list linked_list;
    struct array_list array_list;
};

/**
 * enum for the possible types of list
 **/
enum list_type {
    LINKEDLIST,
    ARRAYLIST
};

/**
 * datastructure for managing the lists
 **/
struct file_data {
    /**
     * union of the two possible list types
     **/
    union list whichlist;
    /* enum that defines which kind of list we are using */
    enum list_type type;
    /* did the file load in a valid and complete way */
    BOOLEAN valid;
};

/**
 * function prototypes for this module
 **/
struct file_data load_file(const char[], enum list_type);

BOOLEAN save_data(struct file_data *, const char[]);

BOOLEAN load_data(struct file_data* data);

/**
 * additional function prototypes for this module
 **/

/*FILE* gropen(char * infile);*/
#endif

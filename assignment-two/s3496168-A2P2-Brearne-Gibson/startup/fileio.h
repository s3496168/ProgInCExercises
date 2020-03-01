/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/

#include <stdio.h>
#include "shared.h"
#include "linkedlist.h"
#include "main.h"
#include "line.h"
#ifndef FILEIO_H
#define FILEIO_H
#include <assert.h>

/*added to allow files to be opend and written to (should it become necessary)                            * */ FILE*
    fropen(const char* infile);
FILE* fwopen(const char* outfile);

/**
 * function that loads in a text file and populates the linked list with the
 * data
 **/
BOOLEAN load_file(const char fname[], struct linkedlist*);
/**
 * function that saves the loaded linked list to the filename specified
 **/
BOOLEAN save_file(const char fname[], struct linkedlist*);
#endif

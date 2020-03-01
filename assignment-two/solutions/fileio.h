/******************************************************************************
 * Student Name    :
 * RMIT Student ID :
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "linkedlist.h"
#ifndef FILEIO_H
#define FILEIO_H
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

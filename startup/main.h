/******************************************************************************
 * Student Name    :
 * RMIT Student ID :
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "action.h"
#include "linkedlist.h"
#ifndef MAIN_H
#define MAIN_H

/**
 * The core data structure for our system, that keeps track of all the data
 **/
struct editor_system {
    /* the path to the file currently loaded into the system */
    const char* file;
    /* linked list holding all the lines that have been loaded from the current
     * file
     */
    struct linkedlist* loaded_file;
    /**
     * array of functions that store each action in the system
     **/
    actionfunc functions[NUM_ACTIONS];

    /**
     * boolean variable that stores whether the current file that is loaded has
     * been modified since it was last saved or loaded. This is needed both for
     * the discard message when exiting and for rejecting requests to load a new
     * file while there is a loaded modified file.
     **/
    BOOLEAN modified;
};
#endif

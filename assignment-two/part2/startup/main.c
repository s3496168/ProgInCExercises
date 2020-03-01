/******************************************************************************
 * Student Name    :
 * RMIT Student ID :
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "main.h"
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "fileio.h"
#include "ui.h"

/**
 * explain to the user of your program how to use it correctly, when they have
 * provided incorrect args.
 **/
void display_usage(void) {}

/**
 * Initialise the editor system  according to the value of fname. If fname is
 * not NULL, load the file path specified.
 **/
BOOLEAN init_system(struct editor_system* thesystem, const char fname[]) {
    return FALSE;
}

int main(int argc, char* argv[]) {
    struct editor_system thesystem;
    /* initialise the system */
    /* hand the system over to the repl to manage until the program exits */
    repl(&thesystem);
    return EXIT_SUCCESS;
}

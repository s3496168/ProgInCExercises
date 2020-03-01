/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "ui.h"
#include <stdio.h>
#include <string.h>
#include <stdlib.h>
#include <ctype.h>
#include <limits.h>
#include <time.h>
/**
 * implement the read-eval-print-loop for managing the editor's user interface.
 **/
void repl(struct editor_system* thesystem) {
    struct action theaction;
    int i;
    enum input_result result;

    while (result = get_int(&i),
           result = IR_FAILURE || i > MARGIN_WIDTH + EXTRACHARS || i <= 0) {
        fprintf(stderr, "Error: undefined key tapped.\n");
    }

    thesystem->functions[theaction.type](thesystem, &theaction);
}

/*no time to finish-end new section*/

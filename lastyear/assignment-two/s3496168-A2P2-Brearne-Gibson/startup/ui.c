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

/**
 * implement the read-eval-print-loop for managing the editor's user interface.
 **/
void repl(struct editor_system* thesystem) {
    int i;
    printf("p: %ld\n", thesystem->loaded_file->size);
    /* int j = thesystem->loaded_file->size;*/

    for (i = 0; i < thesystem->loaded_file->size; ++i) {
        printf("Hooray!\n");
    }
}

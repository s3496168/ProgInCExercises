/******************************************************************************
 * Student Name    : Brearne Gibson
 * RMIT Student ID : s3496168
 *
 * Startup code provided by Paul Miller for use in "Programming in C",
 * study period 4, 2019.
 *****************************************************************************/
#include "main.h"
#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include "fileio.h"
#include <assert.h>

#define NUMARGS 2
#define FILEARGS 1

/**
 * explain to the user of your program how to use it correctly, when they
 *have
 * provided incorrect args.
 **/
void display_usage(void) {
    fprintf(
        stderr,
        "Please enter the name of ONE file for processing. This should be the "
        "name of the file and NOT accompanied with the file format. For "
        "example, file and NOT file.txt\n");
}
/*
FILE* fp;
FILE* fropen(char* fname) {
    FILE* fp;
    if ((fp = fopen(fname, "r")) == NULL) {
        perror("failed to open file");
        exit(EXIT_FAILURE);
    }
    return fp;
}
FILE* fwopen(char* fname) {
    FILE* fp;
    if ((fp = fopen(fname, "w")) == NULL) {
        perror("Failed to write to file");
        exit(EXIT_FAILURE);
    }
    return fp;
}*/
/**
 * Initialise the editor system  according to the value of fname. If fname
 *is
 * not NULL, load the file path specified.
 **/
BOOLEAN init_system(struct editor_system* thesystem, const char fname[]) {

    /*A2 P@ redundant code-this is nolw located within the linked list
     * zero initialised the rest of the struct, as requested*
    memset(thesystem, 0, sizeof(struct editor_system) * LONG_MIN);*/
    /**************************************************************************/
    /*for some reason, completely missing from last time*/
    thesystem->loaded_file = linkedlist_generate();
    if (!thesystem->loaded_file) {
        return FALSE;
    }
    /*updated ithe if statement to reflect the introduced functionality*/
    if (fname == NULL) {
        perror("Error, there is no file name");
        return FALSE;
    } else {
        if (!load_file(fname, thesystem->loaded_file)) {
            return FALSE;
        }
        thesystem->file = fname;
        /*        printf("It's: %s", fname);*/
        thesystem->modified = FALSE;
        /*also missing from A2 P2*/
        init_action_array(thesystem->functions);
        return TRUE;
    }
}

int main(int argc, char* argv[]) {
    /* FILE* in;*/
    char* fname;
    /*  char line[BUFSIZ + EXTRACHARS];*/
    /*initialise the system*/
    struct editor_system thesystem;
    /*No longer necessary due to the relocation of the loaded_file function)
    struct linkedlist thelist;*/
    /*Two argc is the minimum argc's needed to take an argument from the
     * user*/
    /**/

    if (argc != NUMARGS) {
        display_usage();
        return EXIT_FAILURE;
    }
    /*utilisation of functions above*/

    fname = (char*)malloc(sizeof(argv[FILEARGS]));
    strcpy(fname, argv[FILEARGS]);
    printf("New: %s\n", fname);
    /*fname = argv[FILEARGS];*/
    /* in = fropen(fname);*/
    /*old code-testing to see if input is working
    if (in) {
        printf("Yay!\n");
    }*/

    if (!init_system(&thesystem, fname)) {
        fprintf(stderr, "Error: The system did not initialise!");
        return EXIT_FAILURE;
    }
    /*redundant A2 P2improperly called load_file function here.Not only is it
     * calling the wrong variables, it is also not compartmentalised
     * appropriately. Hence
     * it has  been relocated (see above)
    load_file(fname, &thelist);*/

    /* hand the system over to the repl to manage until the program exits */
    /*save the file first*/

    if (!save_file(thesystem.file, thesystem.loaded_file)) {
        fprintf(stderr, "Error: The file did not save %s\n", thesystem.file);
    }
    repl(&thesystem);
    /*redundant A2 P2-improperly called
    save_file(fname, &thelist);*/

    return EXIT_SUCCESS;
}
